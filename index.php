<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Portfolio</title>
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
                        <a class="nav-link active" href="index.php">
                            <i class="fas fa-home me-1"></i>Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="projects.php">
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
        <div class="d-flex justify-content-between align-items-center mb-5">
            <h1 class="section-title text-center mb-0">
                <i class="fas fa-tachometer-alt me-2"></i>Team Dashboard
            </h1>
            <button class="btn btn-outline-primary btn-sm" onclick="refreshGitHubData()">
                <i class="fas fa-sync-alt me-1"></i>Refresh Data
            </button>
        </div>
        
        <!-- Stats Cards -->
        <div class="row mb-5">
            <div class="col-md-3 mb-3">
                <div class="card stats-card">
                    <div class="card-body text-center">
                        <i class="fas fa-users fa-2x mb-3"></i>
                        <h3>3</h3>
                        <p class="mb-0">Team Members</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card stats-card">
                    <div class="card-body text-center">
                        <i class="fas fa-project-diagram fa-2x mb-3"></i>
                        <h3>5</h3>
                        <p class="mb-0">Projects</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card stats-card">
                    <div class="card-body text-center">
                        <i class="fas fa-code fa-2x mb-3"></i>
                        <h3 data-stat="total-repos">6</h3>
                        <p class="mb-0">Repositories</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card stats-card">
                    <div class="card-body text-center">
                        <i class="fas fa-star fa-2x mb-3"></i>
                        <h3>154</h3>
                        <p class="mb-0">Total Stars</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Team Members -->
        <h2 class="section-title text-center">Our Team</h2>
        <div class="row">
            <!-- Member 1 -->
            <div class="col-lg-4 mb-4">
                <div class="card member-card">
                    <div class="card-body text-center">
                        <img src="photos/profile.jpg" 
                             alt="John Doe" class="rounded-circle member-img mb-3">
                        <h5 class="card-title">Jeremayah Gayondato</h5>
                        <p class="text-muted">@Jeremayah</p>
                        <p class="text-primary">Web designer</p>
                        <p class="card-text">Im a student that eager to learn web designing</p>
                        
                        <div class="row text-center mb-3">
                            <div class="col-4">
                                <small class="text-muted">Repos</small>
                                <div class="fw-bold">2</div>
                            </div>
                            <div class="col-4">
                                <small class="text-muted">Followers</small>
                                <div class="fw-bold">0</div>
                            </div>
                            <div class="col-4">
                                <small class="text-muted">Following</small>
                                <div class="fw-bold">0</div>
                            </div>
                        </div>
                        
                        <div class="d-flex gap-2 justify-content-center">
                            <a href="https://github.com/jeremayah19" target="_blank" class="btn btn-primary btn-sm">
                                <i class="fab fa-github me-1"></i>GitHub
                            </a>
                            <a href="member.php?id=1" class="btn btn-outline-secondary btn-sm">
                                <i class="fas fa-user me-1"></i>Profile
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Member 2 -->
            <div class="col-lg-4 mb-4">
                <div class="card member-card">
                    <div class="card-body text-center">
                        <img src="https://images.unsplash.com/photo-1494790108755-2616b612b1c5?w=150&h=150&fit=crop&crop=face" 
                             alt="Jane Smith" class="rounded-circle member-img mb-3">
                        <h5 class="card-title">Jane Smith</h5>
                        <p class="text-muted">@janesmith</p>
                        <p class="text-primary">UI/UX Designer</p>
                        <p class="card-text">Creative designer with expertise in user experience and modern web interfaces.</p>
                        
                        <div class="row text-center mb-3">
                            <div class="col-4">
                                <small class="text-muted">Repos</small>
                                <div class="fw-bold">6</div>
                            </div>
                            <div class="col-4">
                                <small class="text-muted">Followers</small>
                                <div class="fw-bold">6</div>
                            </div>
                            <div class="col-4">
                                <small class="text-muted">Following</small>
                                <div class="fw-bold">22</div>
                            </div>
                        </div>
                        
                        <div class="d-flex gap-2 justify-content-center">
                            <a href="https://github.com/janesmith" target="_blank" class="btn btn-primary btn-sm">
                                <i class="fab fa-github me-1"></i>GitHub
                            </a>
                            <a href="member.php?id=2" class="btn btn-outline-secondary btn-sm">
                                <i class="fas fa-user me-1"></i>Profile
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Member 3 -->
            <div class="col-lg-4 mb-4">
                <div class="card member-card">
                    <div class="card-body text-center">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=150&h=150&fit=crop&crop=face" 
                             alt="Mike Johnson" class="rounded-circle member-img mb-3">
                        <h5 class="card-title">Mike Johnson</h5>
                        <p class="text-muted">@mikejohnson</p>
                        <p class="text-primary">Backend Developer</p>
                        <p class="card-text">Backend specialist focused on scalable solutions and cloud infrastructure.</p>
                        
                        <div class="row text-center mb-3">
                            <div class="col-4">
                                <small class="text-muted">Repos</small>
                                <div class="fw-bold">12</div>
                            </div>
                            <div class="col-4">
                                <small class="text-muted">Followers</small>
                                <div class="fw-bold">31</div>
                            </div>
                            <div class="col-4">
                                <small class="text-muted">Following</small>
                                <div class="fw-bold">19</div>
                            </div>
                        </div>
                        
                        <div class="d-flex gap-2 justify-content-center">
                            <a href="https://github.com/mikejohnson" target="_blank" class="btn btn-primary btn-sm">
                                <i class="fab fa-github me-1"></i>GitHub
                            </a>
                            <a href="member.php?id=3" class="btn btn-outline-secondary btn-sm">
                                <i class="fas fa-user me-1"></i>Profile
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Projects Preview -->
        <h2 class="section-title text-center mt-5">Recent Projects</h2>
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?w=400&h=200&fit=crop" 
                         class="card-img-top project-img" alt="E-Commerce">
                    <div class="card-body d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <h5 class="card-title">Baranngay System</h5>
                            <span class="badge bg-primary">Jeremayah Gayondato</span>
                        </div>
                        <p class="card-text flex-grow-1">Our first ever baranggay System</p>
                        <div class="mt-auto">
                            <div class="d-flex gap-2">
                                <a href="https://github.com/jeremayah19/BarangaySystem" target="_blank" class="btn btn-primary btn-sm">
                                    <i class="fab fa-github me-1"></i>Code
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3?w=400&h=200&fit=crop" 
                         class="card-img-top project-img" alt="Task Manager">
                    <div class="card-body d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <h5 class="card-title">Task Management App</h5>
                            <span class="badge bg-primary">Jane Smith</span>
                        </div>
                        <p class="card-text flex-grow-1">Beautiful task management with drag-and-drop functionality.</p>
                        <div class="mt-auto">
                            <div class="d-flex gap-2">
                                <a href="https://github.com/janesmith/taskmanager" target="_blank" class="btn btn-primary btn-sm">
                                    <i class="fab fa-github me-1"></i>Code
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <img src="https://images.unsplash.com/photo-1518186285589-2f7649de83e0?w=400&h=200&fit=crop" 
                         class="card-img-top project-img" alt="Weather API">
                    <div class="card-body d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <h5 class="card-title">Weather API Service</h5>
                            <span class="badge bg-primary">Mike Johnson</span>
                        </div>
                        <p class="card-text flex-grow-1">Robust weather API with caching and rate limiting.</p>
                        <div class="mt-auto">
                            <div class="d-flex gap-2">
                                <a href="https://github.com/mikejohnson/weather-api" target="_blank" class="btn btn-primary btn-sm">
                                    <i class="fab fa-github me-1"></i>Code
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-4">
            <a href="projects.php" class="btn btn-primary btn-lg">
                <i class="fas fa-project-diagram me-2"></i>View All Projects
            </a>
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
    <script src="js/github-api.js"></script>
</body>
</html>