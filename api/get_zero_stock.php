<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: *');
header('Access-Control-Allow-Methods: *');
header('Access-Control-Allow-Credentials: true');
header('Content-type: application/json');

include('connection.php');

$sql = "SELECT COUNT(*) as count FROM products_table WHERE quantity <= 0";
$result = $mysqli->query($sql);

// Check if the query was successful
if (!$result) {
    die("Error in the query: " . $mysqli->error);
}

// Fetch the count from the result
$row = $result->fetch_assoc();
$count = $row['count'];

// Close the database connection
$mysqli->close();

// Create an associative array for the count
$response = array('count' => $count);

// Set the content type to JSON
header('Content-Type: application/json');

// Convert the response array to JSON and echo it
echo json_encode($response);

?>
