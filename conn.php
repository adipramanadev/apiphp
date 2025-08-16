<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_inventori";

// Create connection
$conn = new mysqli(hostname: $servername, username: $username, password: $password, database: $dbname);

// Check connection
if (!$conn->connect_error) {
   
} else {
    die("Connection failed: " . $conn->connect_error);
}
?>