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
    <title>3D Viewer | Heritage AR</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600;700&family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="theme.css">
    <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
</head>
<body class="theme-body">
    <div class="starfield" data-count="28" aria-hidden="true"></div>

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
                <a href="dashboard.php">Dashboard</a>
                <a href="logout.php" class="nav-cta">Logout</a>
            </nav>
        </header>

        <main class="viewer-layout">
            <section class="panel viewer-info">
                <div class="eyebrow">3D Experience</div>
                <h1 id="placeTitle">Taj Mahal</h1>
                <p id="placeDescription">
                    Explore the selected heritage model in a dedicated 3D viewer with the
                    same visual language as the homepage.
                </p>

                <div class="actions">
                    <a class="button button-primary" href="heritage.php">Back to Heritage</a>
                    <a class="button button-secondary" href="search_ar.html">Search Another</a>
                </div>

                <div class="mini-list">
                    <div class="mini-item">
                        <strong>Controls</strong>
                        <span>Drag to rotate, scroll to zoom, and use touch gestures on mobile.</span>
                    </div>
                    <div class="mini-item">
                        <strong>User</strong>
                        <span><?php echo $username; ?> is signed in and can access protected models.</span>
                    </div>
                    <div class="mini-item">
                        <strong>Mode</strong>
                        <span id="placeMode">Interactive monument viewing experience.</span>
                    </div>
                    <div class="mini-item">
                        <strong>Model Path</strong>
                        <span id="modelPath">models/tajmahal.glb</span>
                    </div>
                </div>

                <div class="notice">
                    This viewer is protected by login. Users who are not signed in are redirected
                    to the login page before any model is opened.
                </div>
            </section>

            <section class="panel viewer-frame">
                <model-viewer
                    id="viewer"
                    src=""
                    camera-controls
                    auto-rotate
                    shadow-intensity="1"
                    exposure="1.2"
                    environment-image="neutral">
                </model-viewer>
            </section>
        </main>

        <footer class="page-footer">
            <span>&copy; 2026 Heritage AR Platform</span>
            <span>Immersive 3D viewing aligned with the homepage theme.</span>
        </footer>
    </div>

    <script src="theme.js"></script>
    <script>
        const places = {
            taj: {
                title: "Taj Mahal",
                description: "Experience the monument through a cleaner 3D presentation that highlights form, structure, and visual identity.",
                mode: "Interactive monument viewing experience.",
                model: "models/tajmahal.glb"
            },
            hampi: {
                title: "Hampi",
                description: "Navigate a heritage scene inspired by the ruins of the Vijayanagara Empire and explore its digital reconstruction.",
                mode: "Interactive archaeological heritage viewing experience.",
                model: "models/hampi.glb"
            },
            museum: {
                title: "Museum",
                description: "Open a curated museum-style scene to browse artifacts and objects in a more immersive digital exhibit space.",
                mode: "Interactive collection and artifact viewing experience.",
                model: "models/museum.glb"
            }
        };

        const params = new URLSearchParams(window.location.search);
        const requestedPlace = params.get("place");
        const currentPlace = places[requestedPlace] || places.taj;

        document.title = `${currentPlace.title} | Heritage AR`;
        document.getElementById("placeTitle").textContent = currentPlace.title;
        document.getElementById("placeDescription").textContent = currentPlace.description;
        document.getElementById("placeMode").textContent = currentPlace.mode;
        document.getElementById("modelPath").textContent = currentPlace.model;
        document.getElementById("viewer").setAttribute("src", currentPlace.model);
    </script>
</body>
</html>
