<?php
$servername = "localhost";
$username = "project1";
$password = "project1";
$databasename = "test";
// Create connection
$conn = new mysqli($servername, $username, $password,$databasename);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?> 