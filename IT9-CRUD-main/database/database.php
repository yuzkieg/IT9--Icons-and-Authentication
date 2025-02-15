<?php

$servername = "localhost"; 
$username = "root";
$password = "";
$dbname = "it9-crud";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// No closing PHP tag needed at the end of this file