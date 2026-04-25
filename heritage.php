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
    <title>Explore Heritage | Heritage AR</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600;700&family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="theme.css">
</head>
<body class="theme-body">
    <div class="starfield" data-count="36" aria-hidden="true"></div>

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
                <a href="search_ar.html">Search</a>
                <a href="dashboard.php">Dashboard</a>
                <a href="logout.php" class="nav-cta">Logout</a>
            </nav>
        </header>

        <main>
            <section class="page-hero">
                <div class="panel page-intro">
                    <div class="eyebrow">Explore Heritage</div>
                    <h1>Choose a heritage world, <?php echo $username; ?>.</h1>
                    <p>
                        This page is now part of the protected flow, so only logged-in users
                        can continue from here into the 3D heritage models.
                    </p>

                    <div class="actions">
                        <a class="button button-primary" href="dashboard.php">Back to Dashboard</a>
                        <a class="button button-secondary" href="search_ar.html">Search Heritage</a>
                    </div>
                </div>
            </section>

            <section class="section">
                <div class="section-head">
                    <div>
                        <div class="eyebrow">Available Spaces</div>
                        <h2>Current heritage destinations</h2>
                    </div>
                    <p>
                        Open the currently available 3D destinations and continue exploring
                        with the same theme you see on the homepage.
                    </p>
                </div>

                <div class="grid card-grid-3">
                    <article class="info-card">
                        <div class="info-top">
                            <span class="tag">Monument</span>
                            <span class="meta">Featured View</span>
                        </div>
                        <h3>Taj Mahal</h3>
                        <p>
                            Explore one of India's most recognized landmarks through a
                            browser-based 3D experience designed for quick access and visual engagement.
                        </p>
                        <div class="card-actions">
                            <a class="button button-primary" href="ar_view.php?place=taj">Open 3D View</a>
                        </div>
                    </article>

                    <article class="info-card">
                        <div class="info-top">
                            <span class="tag">Historic Ruins</span>
                            <span class="meta">Immersive Scene</span>
                        </div>
                        <h3>Hampi</h3>
                        <p>
                            Step into the historic remains of the Vijayanagara Empire and
                            use the viewer to examine a more immersive cultural landscape.
                        </p>
                        <div class="card-actions">
                            <a class="button button-primary" href="ar_view.php?place=hampi">Open 3D View</a>
                        </div>
                    </article>

                    <article class="info-card">
                        <div class="info-top">
                            <span class="tag">Collection Space</span>
                            <span class="meta">Artifact Preview</span>
                        </div>
                        <h3>Museum</h3>
                        <p>
                            View artifacts in a digital museum environment that brings a
                            more curated, exhibit-style feel to the project experience.
                        </p>
                        <div class="card-actions">
                            <a class="button button-primary" href="ar_view.php?place=museum">Open 3D View</a>
                        </div>
                    </article>
                </div>
            </section>
        </main>

        <footer class="page-footer">
            <span>&copy; 2026 Heritage AR Platform</span>
            <span>PHP heritage page aligned with the homepage theme.</span>
        </footer>
    </div>

    <script src="theme.js"></script>
</body>
</html>
