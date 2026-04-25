<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}

$username = htmlspecialchars($_SESSION['username']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Heritage AR</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600;700&family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="theme.css">
</head>
<body class="theme-body">
    <div class="starfield" data-count="32" aria-hidden="true"></div>

    <div class="page-shell">
        <header class="site-header">
            <a class="brand" href="index.html">
                <div class="brand-mark">AR</div>
                <div class="brand-copy">
                    <strong>Heritage AR</strong>
                    <span>Cultural Discovery Platform</span>
                </div>
            </a>

            <nav class="nav">
                <a href="index.html">Home</a>
                <a href="heritage.php">Explore</a>
                <a href="search_ar.html">Search</a>
                <a href="logout.php" class="nav-cta">Logout</a>
            </nav>
        </header>

        <main>
            <section class="dashboard-grid">
                <div class="panel page-intro is-full">
                    <div class="eyebrow">Dashboard</div>
                    <h1>Welcome back, <?php echo $username; ?>.</h1>
                    <p>
                        Your dashboard now matches the homepage theme and acts like a
                        real continuation of the experience. From here you can explore
                        heritage places, search faster, or jump back to the landing page.
                    </p>

                    <div class="actions">
                        <a class="button button-primary" href="heritage.php">Explore Heritage</a>
                        <a class="button button-secondary" href="search_ar.html">Search Heritage</a>
                        <a class="button button-danger" href="logout.php">Logout</a>
                    </div>

                    <div class="stat-grid">
                        <div class="stat">
                            <strong>3</strong>
                            <span>interactive heritage spaces ready to open</span>
                        </div>
                        <div class="stat">
                            <strong>1</strong>
                            <span>themed dashboard experience after login</span>
                        </div>
                        <div class="stat">
                            <strong>Live</strong>
                            <span>connected route into search, explore, and viewer pages</span>
                        </div>
                    </div>
                </div>

                <div class="stack">
                    <article class="info-card">
                        <div class="info-top">
                            <span class="tag">Next Steps</span>
                            <span class="meta">Keep exploring</span>
                        </div>
                        <h3>Pick up where you left off</h3>
                        <p>
                            Continue with heritage selection, search for a place directly,
                            or return home and present the project from the landing page.
                        </p>
                        <div class="card-actions">
                            <a class="button button-primary" href="heritage.php">Open Sites</a>
                            <a class="button button-secondary" href="index.html">Homepage</a>
                        </div>
                    </article>

                    <article class="info-card">
                        <div class="info-top">
                            <span class="tag">Session</span>
                            <span class="meta">Account active</span>
                        </div>
                        <h3>Signed in as <?php echo $username; ?></h3>
                        <p>
                            Your session is active and ready to move through the rest of
                            the project with the same visual theme.
                        </p>
                    </article>
                </div>
            </section>

            <section class="section">
                <div class="section-head">
                    <div>
                        <div class="eyebrow">Quick Access</div>
                        <h2>Move through the project faster</h2>
                    </div>
                    <p>
                        These shortcuts keep the post-login flow practical for demos,
                        presentations, and everyday testing.
                    </p>
                </div>

                <div class="grid card-grid-3">
                    <article class="info-card">
                        <div class="info-top">
                            <span class="tag">Explore</span>
                            <span class="meta">Selection Page</span>
                        </div>
                        <h3>Heritage Library</h3>
                        <p>
                            Open the main site selection page and move into the current
                            Taj Mahal, Hampi, and Museum experiences.
                        </p>
                        <div class="card-actions">
                            <a class="button button-primary" href="heritage.php">View Sites</a>
                        </div>
                    </article>

                    <article class="info-card">
                        <div class="info-top">
                            <span class="tag">Search</span>
                            <span class="meta">Direct Route</span>
                        </div>
                        <h3>Search Heritage</h3>
                        <p>
                            Type the place name and jump straight into the 3D viewer for a
                            faster interaction path.
                        </p>
                        <div class="card-actions">
                            <a class="button button-primary" href="search_ar.html">Search Now</a>
                        </div>
                    </article>

                    <article class="info-card">
                        <div class="info-top">
                            <span class="tag">Home</span>
                            <span class="meta">Landing View</span>
                        </div>
                        <h3>Return to Homepage</h3>
                        <p>
                            Go back to the themed landing page when you want to present the
                            project from its main entry point.
                        </p>
                        <div class="card-actions">
                            <a class="button button-primary" href="index.html">Go Home</a>
                        </div>
                    </article>
                </div>
            </section>
        </main>

        <footer class="page-footer">
            <span>&copy; 2026 Heritage AR Platform</span>
            <span>Themed dashboard integrated into the main project flow.</span>
        </footer>
    </div>

    <script src="theme.js"></script>
</body>
</html>
