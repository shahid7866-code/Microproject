<?php
session_start();
include "db.php";

$username = trim($_POST['username'] ?? "");
$password = trim($_POST['password'] ?? "");

if ($username === "" || $password === "") {
    header("Location: login.html");
    exit();
}

$safeUsername = mysqli_real_escape_string($conn, $username);
$safePassword = mysqli_real_escape_string($conn, $password);

$sql = "SELECT * FROM users WHERE username='$safeUsername' AND password='$safePassword'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) === 1) {
    $_SESSION['username'] = $username;
    header("Location: dashboard.php");
    exit();
}

echo "<script>
        alert('Invalid username or password');
        window.location.href='login.html';
      </script>";
?>
