<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Dashboard</title>
</head>
<body>
<a href="heritage.php">Explore Cultural Heritage</a>

<h2>Welcome, <?php echo $_SESSION['username']; ?></h2>

<p>You have successfully logged in.</p>

<a href="heritage.html">View Cultural Heritage</a><br><br>
<a href="logout.php">Logout</a>

</body>
</html>
