<?php
// activity.php
$page_title = "Activity - Team Portfolio";
$current_page = "activity";

// Team stats
$stats = [
    'total_repos' => 26,
    'total_stars' => 0,
    'total_followers' => 0,
    'total_following' => 0
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
                        <a class="nav-link" href="projects.php">
                            <i class="fas fa-project-diagram me-1"></i>Projects
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="activity.php">
                            <i class="fas fa-chart-line me-1"></i>Activity
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container" style="margin-top: 100px;">
        <h1 class="section-title text-center mb-5">
            <i class="fas fa-chart-line me-2"></i>Recent Activity
        </h1>
        
        <!-- Activity Stats -->
        <div class="row mb-5">
            <div class="col-md-3 mb-3">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="fas fa-code-branch text-primary fa-2x mb-2"></i>
                        <h4 class="text-primary"><?php echo $stats['total_repos']; ?></h4>
                        <small class="text-muted">Total Repositories</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="fas fa-star text-warning fa-2x mb-2"></i>
                        <h4 class="text-warning"><?php echo $stats['total_stars']; ?></h4>
                        <small class="text-muted">Total Stars</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="fas fa-users text-success fa-2x mb-2"></i>
                        <h4 class="text-success"><?php echo $stats['total_followers']; ?></h4>
                        <small class="text-muted">Total Followers</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="fas fa-eye text-info fa-2x mb-2"></i>
                        <h4 class="text-info"><?php echo $stats['total_following']; ?></h4>
                        <small class="text-muted">Total Following</small>
                    </div>
                </div>
            </div>
        </div>

        <!-- Activity Chart Section -->
        <div class="row mt-5">
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0"><i class="fas fa-chart-bar me-2"></i>Contributions This Month</h5>
                    </div>
                    <div class="card-body">
                        <div class="row text-center">
                            <div class="col-4">
                                <h3 class="text-primary">10</h3>
                                <small class="text-muted">Commits</small>
                            </div>
                            <div class="col-4">
                                <h3 class="text-success">0</h3>
                                <small class="text-muted">Pull Requests</small>
                            </div>
                            <div class="col-4">
                                <h3 class="text-warning">0</h3>
                                <small class="text-muted">Releases</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0"><i class="fas fa-code me-2"></i>Top Languages</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <div class="d-flex justify-content-between">
                                <span>HTML</span>
                                <span>70%</span>
                            </div>
                            <div class="progress" style="height: 8px;">
                                <div class="progress-bar bg-warning" style="width: 40%"></div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between">
                                <span>CSS</span>
                                <span>60%</span>
                            </div>
                            <div class="progress" style="height: 8px;">
                                <div class="progress-bar bg-success" style="width: 30%"></div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between">
                                <span>PHP</span>
                                <span>40%</span>
                            </div>
                            <div class="progress" style="height: 8px;">
                                <div class="progress-bar bg-info" style="width: 20%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="d-flex justify-content-between">
                                <span>Others</span>
                                <span>10%</span>
                            </div>
                            <div class="progress" style="height: 8px;">
                                <div class="progress-bar bg-secondary" style="width: 10%"></div>
                            </div>
                        </div>
                    </div>
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