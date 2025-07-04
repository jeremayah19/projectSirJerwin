<?php
// member.php
$member_id = isset($_GET['id']) ? (int)$_GET['id'] : 1;

// Members data
$members = [
    1 => [
        'id' => 1,
        'name' => 'Jeremayah Gayondato',
        'username' => 'jeremayah',
        'role' => 'Web designer',
        'bio' => 'Im a student currently learning web design. Im passionate about creating clean, user-friendly websites using HTML, CSS, and JavaScript. Im excited to keep improving and building real-world projects.',
        'image' => 'photos/profile.jpg',
        'github' => 'https://github.com/jeremayah19',
        'portfolio' => 'https://github.com/jeremayah19/jeremayah19.github.io',
        'location' => 'Cavite, Philippines',
        'company' => 'CVSU',
        'joined' => 'July 2025',
        'stats' => [
            'repos' => 2,
            'followers' => 0,
            'following' => 0,
            'stars' => 0
        ],
        'skills' => ['HTML', 'CSS', 'JavaScript', 'MYSQL', 'BOOTSTRAP']
    ],
    2 => [
        'id' => 2,
        'name' => 'Jane Smith',
        'username' => 'janesmith',
        'role' => 'UI/UX Designer & Frontend Developer',
        'bio' => 'Creative UI/UX designer and frontend developer with a passion for creating beautiful, user-friendly interfaces. Expert in modern design principles and frontend technologies.',
        'image' => 'https://images.unsplash.com/photo-1494790108755-2616b612b1c5?w=200&h=200&fit=crop&crop=face',
        'github' => 'https://github.com/janesmith',
        'portfolio' => 'https://janesmith.design',
        'location' => 'San Francisco, USA',
        'company' => 'Creative Design Studio',
        'joined' => 'March 2021',
        'stats' => [
            'repos' => 6,
            'followers' => 18,
            'following' => 22,
            'stars' => 32
        ],
        'skills' => ['UI/UX Design', 'React', 'CSS', 'Figma', 'Adobe XD', 'TypeScript']
    ],
    3 => [
        'id' => 3,
        'name' => 'Mike Johnson',
        'username' => 'mikejohnson',
        'role' => 'Backend Developer & DevOps Engineer',
        'bio' => 'Backend developer and DevOps engineer focused on building scalable, reliable systems. Expert in cloud infrastructure, API development, and deployment automation.',
        'image' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=200&h=200&fit=crop&crop=face',
        'github' => 'https://github.com/mikejohnson',
        'portfolio' => 'https://mikejohnson.tech',
        'location' => 'Austin, USA',
        'company' => 'Cloud Solutions Ltd.',
        'joined' => 'February 2021',
        'stats' => [
            'repos' => 12,
            'followers' => 31,
            'following' => 19,
            'stars' => 77
        ],
        'skills' => ['Python', 'Docker', 'AWS', 'DevOps', 'PostgreSQL', 'FastAPI']
    ]
];

// Get member data or default to first member
$member = isset($members[$member_id]) ? $members[$member_id] : $members[1];
$page_title = $member['name'] . " - Team Portfolio";

// Member's projects (simplified)
$member_projects = [
    1 => [
        ['name' => 'Portfolio', 'description' => 'First ever portfolio', 'tech' => 'HTML, BOOTSTRAP'],
        ['name' => 'Barangay System', 'description' => 'Our baranggay system', 'tech' => 'PHP, MYSQL']
    ],
    2 => [
        ['name' => 'Task Management App', 'description' => 'Beautiful task management application', 'tech' => 'React, TypeScript'],
        ['name' => 'Design System', 'description' => 'Comprehensive design system', 'tech' => 'CSS, Figma']
    ],
    3 => [
        ['name' => 'Weather API Service', 'description' => 'Robust weather API service', 'tech' => 'Python, FastAPI'],
        ['name' => 'Analytics Dashboard', 'description' => 'Real-time analytics dashboard', 'tech' => 'Vue.js, Node.js']
    ]
];

$projects = isset($member_projects[$member_id]) ? $member_projects[$member_id] : [];
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
                        <a class="nav-link" href="activity.php">
                            <i class="fas fa-chart-line me-1"></i>Activity
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container" style="margin-top: 100px;">
        <!-- Back Button -->
        <div class="mb-4">
            <a href="index.php" class="btn btn-outline-secondary">
                <i class="fas fa-arrow-left me-2"></i>Back to Dashboard
            </a>
        </div>

        <!-- Member Profile Header -->
        <div class="card mb-4">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-md-3 text-center">
                        <img src="<?php echo $member['image']; ?>" 
                             alt="<?php echo htmlspecialchars($member['name']); ?>" 
                             class="rounded-circle member-img-large mb-3"
                             style="width: 180px; height: 180px; object-fit: cover; border: 4px solid #3498db;">
                    </div>
                    <div class="col-md-9">
                        <h1 class="mb-2"><?php echo htmlspecialchars($member['name']); ?></h1>
                        <p class="text-muted mb-2">@<?php echo htmlspecialchars($member['username']); ?></p>
                        <h5 class="text-primary mb-3"><?php echo htmlspecialchars($member['role']); ?></h5>
                        <p class="lead mb-3"><?php echo htmlspecialchars($member['bio']); ?></p>
                        
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <p class="mb-1"><i class="fas fa-map-marker-alt me-2 text-primary"></i><?php echo htmlspecialchars($member['location']); ?></p>
                                <p class="mb-1"><i class="fas fa-building me-2 text-primary"></i><?php echo htmlspecialchars($member['company']); ?></p>
                            </div>
                            <div class="col-md-6">
                                <p class="mb-1"><i class="fas fa-calendar me-2 text-primary"></i>Joined <?php echo htmlspecialchars($member['joined']); ?></p>
                            </div>
                        </div>
                        
                        <div class="d-flex gap-2 flex-wrap">
                            <a href="<?php echo $member['github']; ?>" target="_blank" class="btn btn-primary">
                                <i class="fab fa-github me-1"></i>GitHub
                            </a>
                            <a href="<?php echo $member['portfolio']; ?>" target="_blank" class="btn btn-outline-primary">
                                <i class="fas fa-globe me-1"></i>Portfolio
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Member Stats -->
        <div class="row mb-4">
            <div class="col-md-3 mb-3">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fas fa-code-branch text-primary fa-2x mb-2"></i>
                        <h3 class="text-primary"><?php echo $member['stats']['repos']; ?></h3>
                        <small class="text-muted">Repositories</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fas fa-users text-success fa-2x mb-2"></i>
                        <h3 class="text-success"><?php echo $member['stats']['followers']; ?></h3>
                        <small class="text-muted">Followers</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fas fa-eye text-info fa-2x mb-2"></i>
                        <h3 class="text-info"><?php echo $member['stats']['following']; ?></h3>
                        <small class="text-muted">Following</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fas fa-star text-warning fa-2x mb-2"></i>
                        <h3 class="text-warning"><?php echo $member['stats']['stars']; ?></h3>
                        <small class="text-muted">Stars Earned</small>
                    </div>
                </div>
            </div>
        </div>

        <!-- Skills Section -->
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="mb-0"><i class="fas fa-tools me-2"></i>Skills & Technologies</h5>
            </div>
            <div class="card-body">
                <div class="d-flex flex-wrap gap-2">
                    <?php foreach ($member['skills'] as $skill): ?>
                        <span class="badge bg-primary fs-6 p-2"><?php echo htmlspecialchars($skill); ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <!-- Projects Section -->
        <?php if (!empty($projects)): ?>
            <h2 class="section-title">Projects by <?php echo htmlspecialchars($member['name']); ?></h2>
            <div class="row">
                <?php foreach ($projects as $project): ?>
                    <div class="col-lg-6 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo htmlspecialchars($project['name']); ?></h5>
                                <p class="card-text"><?php echo htmlspecialchars($project['description']); ?></p>
                                <p class="text-muted">
                                    <i class="fas fa-code me-1"></i>
                                    <strong>Tech:</strong> <?php echo htmlspecialchars($project['tech']); ?>
                                </p>
                                <div class="d-flex gap-2">
                                    <a href="<?php echo $member['github']; ?>" target="_blank" class="btn btn-primary btn-sm">
                                        <i class="fab fa-github me-1"></i>View Code
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <!-- Other Team Members -->
        <h2 class="section-title mt-5">Other Team Members</h2>
        <div class="row">
            <?php foreach ($members as $other_member): ?>
                <?php if ($other_member['id'] !== $member['id']): ?>
                    <div class="col-md-6 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <img src="<?php echo $other_member['image']; ?>" 
                                         alt="<?php echo htmlspecialchars($other_member['name']); ?>" 
                                         class="rounded-circle me-3"
                                         style="width: 60px; height: 60px; object-fit: cover;">
                                    <div>
                                        <h6 class="mb-1"><?php echo htmlspecialchars($other_member['name']); ?></h6>
                                        <p class="text-muted mb-1"><?php echo htmlspecialchars($other_member['role']); ?></p>
                                        <a href="member.php?id=<?php echo $other_member['id']; ?>" class="btn btn-sm btn-outline-primary">
                                            View Profile
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-white mt-5 py-4 shadow-sm">
        <div class="container text-center">
            <p class="text-muted mb-0">© 2024 Team Portfolio. Built with Bootstrap and PHP.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>