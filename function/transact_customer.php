<?php

include_once 'dbconfig.php';

$customer_id = isset($_GET['id']) ? $_GET['id'] : null;
$full_name = isset($_GET['name']) ? $_GET['name'] : null;

$connection = $newconnection->openConnection();
$stmt = $connection->prepare("SELECT * FROM customer_table WHERE customer_id = $customer_id");
$stmt->execute();
$resultCurse = $stmt->fetchAll();
?>