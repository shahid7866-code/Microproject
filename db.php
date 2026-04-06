<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "cultural_heritage_db";
$port = 3307;

// connect database with port
$conn = mysqli_connect($servername, $username, $password, $database, $port);

// check connection
if (!$conn) {
    die("Connection failed");
}
?>