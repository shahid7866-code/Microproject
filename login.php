<?php
include "db.php";

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    // ✅ success
    header("Location: dashboard.html"); // better than dashboard
    exit();
} else {
    // ❌ failed
    echo "<script>
            alert('Invalid username or password');
            window.location.href='login.html';
          </script>";
}
?>