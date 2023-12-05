<?php
require_once('dbconfig.php');

function getProducts($conn)
{
    $stmt = $conn->query("SELECT * FROM products_table");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

$products = getProducts($conn);

if (isset($_POST['add_sales'])) {
    // Handle form submission and insert data into the database
    $product_id = $_POST['product_name'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $total_price = $_POST['total_price'];

    // Perform the database insertion here, you might want to use prepared statements
    $stmt = $conn->prepare("INSERT INTO sales_table (product_id, quantity, price, total_price, date) VALUES (:product_id, :quantity, :price, :total_price, NOW())");
    $stmt->bindParam(':product_id', $product_id);
    $stmt->bindParam(':quantity', $quantity);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':total_price', $total_price);
    $stmt->execute();

    // Update product table stock
    $stmt = $conn->prepare("UPDATE products_table SET quantity = quantity - :quantity WHERE product_id = :product_id");
    $stmt->bindParam(':quantity', $quantity);
    $stmt->bindParam(':product_id', $product_id);
    $stmt->execute();

    // Update inventory table stock_in
    $stmt = $conn->prepare("UPDATE inventory_table SET stock_in = stock_in - :quantity WHERE product_id = :product_id");
    $stmt->bindParam(':quantity', $quantity);
    $stmt->bindParam(':product_id', $product_id);
    $stmt->execute();
}

// Fetch sales data from the database to display in the table
$stmt = $conn->query("
    SELECT s.*, p.product_name, p.price
    FROM sales_table s
    INNER JOIN products_table p ON s.product_id = p.product_id
");

$sales_data = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Fetch inventory data from the database
$stmt = $conn->prepare('SELECT i.inventory_id, i.product_id, p.product_name, i.stock_in, i.out_of_stock
FROM inventory_table i
INNER JOIN products_table p ON i.product_id = p.product_id;');
$stmt->execute();
$inventoryData = $stmt->fetchAll();
?>
