<?php

// Establish a database connection
$newconnection = new Connection();
$conn = $newconnection->openConnection();

// Function to get the count of categories
function getCategoryCount($conn)
{
    $stmt = $conn->prepare('SELECT COUNT(*) AS category_count FROM category_table');
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result['category_count'];
}

// Function to get the count of products
function getProductCount($conn)
{
    $stmt = $conn->prepare('SELECT COUNT(*) AS product_count FROM products_table');
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result['product_count'];
}

// Function to get the count in inventory
function getInventoryCount($conn)
{
    $stmt = $conn->prepare('SELECT COUNT(*) AS inventory_count FROM inventory_table');
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result['inventory_count'];
}

function getReturnedCount($conn)
{
    $stmt = $conn->prepare('SELECT COUNT(*) AS returned_count FROM returned_table');
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result['returned_count'];
}

function getSalesCount($conn)
{
    $stmt = $conn->prepare('SELECT COUNT(*) AS sale_count FROM sales_table');
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result['sale_count'];
}

$recentlyAddedQuery = "SELECT * FROM products_table WHERE date_added >= DATE_SUB(CURRENT_DATE(), INTERVAL 7 DAY)";
$recentlyAddedResult = $conn->query($recentlyAddedQuery);
$recentlyAddedProducts = $recentlyAddedResult->fetchAll(PDO::FETCH_ASSOC);
