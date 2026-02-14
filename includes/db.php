<?php
// Database configuration
$host = 'localhost';
$username = 'your_username';
$password = 'your_password';
$database = 'your_database';

// Create connection
$connection = new mysqli($host, $username, $password, $database);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// echo "Connected successfully"; // Uncomment for testing
?>