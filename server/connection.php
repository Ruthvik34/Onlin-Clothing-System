<?php

$servername = "localhost";
$username = "root";
$password = "ruthvik@34";
$database = "project";


$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
