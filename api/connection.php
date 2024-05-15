<?php

// Database connection parameters
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'test_inventory';

// Create a connection to the database
$mysqli = new mysqli($host, $username, $password, $database);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

?>