<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "cultural_heritage_db";
$port = 3307;
$conn = mysqli_connect($servername,$username,$password,$database,$port);
if (!$conn) {
die("Database connection failed");
}
echo"Database connected successfully";
?>