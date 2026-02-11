<?php
include "db.php";

$username = $_POST['username'];
$password = $_POST['password'];

// SQL query
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);

// Check user
if (mysqli_num_rows($result) == 1) {
    // ✅ Login success → redirect
    header("Location: dashboard.html");
    exit();
} else {
    // ❌ Login failed
    echo "<script>
            alert('Invalid username or password');
            window.location.href='login.php';
          </script>";
}
?>
