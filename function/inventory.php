<?php

require_once('dbconfig.php');  // Include your database configuration file

// Establish a database connection
$newconnection = new Connection();
$conn = $newconnection->openConnection();

// Function to get inventory data from the database
function getInventoryData($conn)
{
    $stmt = $conn->prepare('SELECT * FROM inventory_table');
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Assuming $conn is your database connection, adjust the variable name if needed
$inventoryData = getInventoryData($conn);
$stmt = $conn->prepare('SELECT i.inventory_id, i.product_id, p.product_name, i.stock_in, i.out_of_stock
FROM inventory_table i
INNER JOIN products_table p ON i.product_id = p.product_id;');
 $stmt->execute();
 $inventoryData = $stmt->fetchAll();
?>