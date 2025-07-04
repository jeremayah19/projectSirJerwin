<?php
// projects.php
$page_title = "Projects - Team Portfolio";
$current_page = "projects";

// Projects data
$projects = [
    [
        'id' => 1,
        'name' => 'Portfolio',
        'description' => 'my first ever portfolio',
        'image' => 'photos/profile.jpg',
        'github' => 'https://github.com/jeremayah19/jeremayah19.github.io',
        'demo' => '',
        'author' => 'Jeremayah Gayondato',
        'technologies' => ['HTML', 'CSS', 'BOOTSTRAP', 'JAVASCRIPT']
    ],
    [
        'id' => 2,
        'name' => 'Task Management App',
        'description' => 'A beautiful task management application with drag-and-drop functionality, team collaboration, and real-time updates.',
        'image' => 'https://images.unsplash.com/photo-1551650975-87deedd944c3?w=400&h=200&fit=crop',
        'github' => 'https://github.com/janesmith/task-manager',
        'demo' => '',
        'author' => 'Jane Smith',
        'technologies' => ['React', 'TypeScript', 'Firebase', 'Material-UI']
    ],
    [
        'id' => 3,
        'name' => 'Weather API Service',
        'description' => 'A robust weather API service with caching, rate limiting, and comprehensive documentation. Serves weather data for multiple applications.',
        'image' => 'https://images.unsplash.com/photo-1518186285589-2f7649de83e0?w=400&h=200&fit=crop',
        'github' => 'https://github.com/mikejohnson/weather-api',
        'demo' => '',
        'author' => 'Mike Johnson',
        'technologies' => ['Python', 'FastAPI', 'Redis', 'PostgreSQL']
    ],
    [
        'id' => 4,
        'name' => 'Analytics Dashboard',
        'description' => 'A comprehensive analytics dashboard with real-time data visualization, custom reports, and user management features.',
        'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=400&h=200&fit=crop',
        'github' => 'https://github.com/team/analytics-dashboard',
        'demo' => '',
        'author' => 'Team Project',
        'technologies' => ['Vue.js', 'D3.js', 'Node.js', 'MongoDB']
    ],
    [
        'id' => 5,
        'name' => 'Baranggay System',
        'description' => 'Our Barangay System.',
        'image' => 'photos/profile.jpg',
        'github' => 'https://github.com/jeremayah19/BarangaySystem',
        'demo' => '',
        'author' => 'Jeremayah Gayondato',
        'technologies' => ['PHP', 'MYSQL']
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <i class="fas fa-users me-2"></i>Team Portfolio
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">
                            <i class="fas fa-home me-1"></i>Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="projects.php">
                            <i class="fas fa-project-diagram me-1"></i>Projects
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="activity.php">
                            <i class="fas fa-chart-line me-1"></i>Activity
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container" style="margin-top: 100px;">
        <h1 class="section-title text-center mb-5">
            <i class="fas fa-project-diagram me-2"></i>Our Projects
        </h1>
        
        <!-- Project Stats -->
        <div class="row mb-5">
            <div class="col-md-3 mb-3">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fas fa-project-diagram text-primary fa-2x mb-2"></i>
                        <h4 class="text-primary"><?php echo count($projects); ?></h4>
                        <small class="text-muted">Total Projects</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fas fa-users text-success fa-2x mb-2"></i>
                        <h4 class="text-success">3</h4>
                        <small class="text-muted">Contributors</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fas fa-code text-info fa-2x mb-2"></i>
                        <h4 class="text-info">8</h4>
                        <small class="text-muted">Technologies</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fas fa-star text-warning fa-2x mb-2"></i>
                        <h4 class="text-warning">100%</h4>
                        <small class="text-muted">Open Source</small>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Projects Grid -->
        <div class="row">
            <?php foreach ($projects as $project): ?>
                <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                        <img src="<?php echo $project['image']; ?>" 
                             class="card-img-top project-img" 
                             alt="<?php echo htmlspecialchars($project['name']); ?>">
                        <div class="card-body d-flex flex-column">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h5 class="card-title"><?php echo htmlspecialchars($project['name']); ?></h5>
                                <span class="badge bg-primary"><?php echo htmlspecialchars($project['author']); ?></span>
                            </div>
                            <p class="card-text flex-grow-1"><?php echo htmlspecialchars($project['description']); ?></p>
                            
                            <!-- Technologies -->
                            <div class="mb-3">
                                <?php foreach ($project['technologies'] as $tech): ?>
                                    <span class="badge bg-secondary me-1"><?php echo htmlspecialchars($tech); ?></span>
                                <?php endforeach; ?>
                            </div>
                            
                            <div class="mt-auto">
                                <div class="d-flex gap-2">
                                    <a href="<?php echo $project['github']; ?>" target="_blank" class="btn btn-primary btn-sm">
                                        <i class="fab fa-github me-1"></i>Code
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Tech Stack Section -->
        <div class="card mt-5">
            <div class="card-body">
                <h2 class="section-title text-center mb-4">
                    <i class="fas fa-layer-group me-2"></i>Technology Stack
                </h2>
                <div class="d-flex flex-wrap gap-2 justify-content-center">
                    <span class="badge bg-danger fs-6 p-2"><i class="fab fa-react me-1"></i>HTML</span>
                    <span class="badge bg-success fs-6 p-2"><i class="fab fa-node-js me-1"></i>CSS</span>
                    <span class="badge bg-primary fs-6 p-2"><i class="fab fa-python me-1"></i>Python</span>
                    <span class="badge bg-warning fs-6 p-2"><i class="fab fa-js-square me-1"></i>JavaScript</span>
                    <span class="badge bg-info fs-6 p-2"><i class="fas fa-database me-1"></i>MYSQL</span>
                    <span class="badge bg-secondary fs-6 p-2"><i class="fab fa-git-alt me-1"></i>Git</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-white mt-5 py-4 shadow-sm">
        <div class="container text-center">
            <p class="text-muted mb-0">© 2024 Team Portfolio.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>