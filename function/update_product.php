<?php
include_once('dbconfig.php');

// UPDATE DATA IN DATABASE
if (isset($_POST['update_product'])) {

    // get data from inputs
    $product_id = $_POST['edit_product_id'];
    $product_name = $_POST['edit_product_name'];
    $quantity = $_POST['edit_quantity'];
    $price = $_POST['edit_price'];
    $category_id = $_POST['edit_category_name']; // Add this line

    try {
        // get connection
        $connection = $newconnection->openConnection();
        // prepare query statement using named parameters
        $stmt = $connection->prepare("UPDATE products_table
        SET product_name=:product_name, quantity=:quantity, price=:price, category_id=:category_id
        WHERE product_id=:product_id
        LIMIT 1");

        // get data inputs
        $data = [
            ':product_name' => $product_name,
            ':quantity' => $quantity,
            ':price' => $price,
            ':category_id' => $category_id, // Add this line
            ':product_id' => $product_id
        ];
        // execute the query statement
        $query = $stmt->execute($data);

    } catch (PDOException $th) {
        echo "Error Message:" . $th->getMessage();
    }
}
?>
