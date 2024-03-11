<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: *');
header('Access-Control-Allow-Methods: *');
header('Access-Control-Allow-Credentials: true');
header('Content-type: json/application');

include('connection.php');

$customer_id = isset($_GET['id']) ? $_GET['id'] : null;

$sql = "SELECT SUM(price * quantity) AS total FROM transaction_table
        WHERE customer_id = $customer_id AND status = 'UNPAID'";
$result = $mysqli->query($sql);

// Check if the query was successful
if (!$result) {
    die("Error in the query: " . $mysqli->error);
}

// Fetch the total sum
$total = $result->fetch_assoc()['total'];

// Close the database connection
$mysqli->close();

// Set the content type to JSON
header('Content-Type: application/json');

// Output the total sum as JSON
echo json_encode(array('total' => $total));

?>
