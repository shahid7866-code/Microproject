<?php
include "db.php";

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO users (username, email, password)
        VALUES ('$username', '$email', '$password')";

if (mysqli_query($conn, $sql)) {
    // ✅ redirect instead of echo
    header("Location: login.html");
    exit();
} else {
    echo "Error in registration";
}
?>