<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: *');
header('Access-Control-Allow-Methods: *');
header('Access-Control-Allow-Credentials: true');
header('Content-type: json/application');

include('connection.php');

// Query to fetch data from the users table
$sql = "SELECT * FROM customer_table";
$result = $mysqli->query($sql);

// Check if the query was successful
if (!$result) {
    die("Error in the query: " . $mysqli->error);
}

// Fetch the data and store it in an array
$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

// Close the database connection
$mysqli->close();

// Set the content type to JSON
header('Content-Type: application/json');

// Convert the data array to JSON and echo it
echo json_encode($data);

?>