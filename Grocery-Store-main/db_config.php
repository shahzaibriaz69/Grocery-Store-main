<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "groco.db"; // Changed from groco_db to groco.db

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>