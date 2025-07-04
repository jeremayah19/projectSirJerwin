<?php
// api/github.php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET');
header('Access-Control-Allow-Headers: Content-Type');

function fetchGitHubProfile($username) {
    $url = "https://api.github.com/users/" . urlencode($username);
    
    $options = [
        "http" => [
            "header" => "User-Agent: Team-Portfolio-App\r\n",
            "method" => "GET",
            "timeout" => 10
        ]
    ];
    
    $context = stream_context_create($options);
    $response = @file_get_contents($url, false, $context);
    
    if ($response === FALSE) {
        return null;
    }
    
    return json_decode($response, true);
}

function fetchGitHubRepos($username, $limit = 5) {
    $url = "https://api.github.com/users/" . urlencode($username) . "/repos?sort=updated&per_page=" . $limit;
    
    $options = [
        "http" => [
            "header" => "User-Agent: Team-Portfolio-App\r\n",
            "method" => "GET",
            "timeout" => 10
        ]
    ];
    
    $context = stream_context_create($options);
    $response = @file_get_contents($url, false, $context);
    
    if ($response === FALSE) {
        return [];
    }
    
    return json_decode($response, true);
}

// Handle API requests
if (isset($_GET['action'])) {
    $action = $_GET['action'];
    
    switch ($action) {
        case 'profile':
            if (isset($_GET['username'])) {
                $username = $_GET['username'];
                $profile = fetchGitHubProfile($username);
                
                if ($profile) {
                    echo json_encode([
                        'success' => true,
                        'data' => $profile
                    ]);
                } else {
                    echo json_encode([
                        'success' => false,
                        'error' => 'Failed to fetch profile'
                    ]);
                }
            } else {
                echo json_encode([
                    'success' => false,
                    'error' => 'Username required'
                ]);
            }
            break;
            
        case 'repos':
            if (isset($_GET['username'])) {
                $username = $_GET['username'];
                $limit = isset($_GET['limit']) ? intval($_GET['limit']) : 5;
                $repos = fetchGitHubRepos($username, $limit);
                
                echo json_encode([
                    'success' => true,
                    'data' => $repos
                ]);
            } else {
                echo json_encode([
                    'success' => false,
                    'error' => 'Username required'
                ]);
            }
            break;
            
        default:
            echo json_encode([
                'success' => false,
                'error' => 'Invalid action'
            ]);
    }
} else {
    echo json_encode([
        'success' => false,
        'error' => 'No action specified'
    ]);
}
?>