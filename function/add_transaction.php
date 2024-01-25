<?php

include_once 'dbconfig.php';

// INSERT DATA IN DATABASE
if(isset($_POST['save_quantity_add'])) {

    // Get data from inputs
    $product_name = $_POST['prody_name'];
    $price = $_POST['pricekun'];
    $quantity = $_POST['quantityx'];
    $product_id = $_POST['prody_id'];
    $customer_id = $_POST['iamkiraId'];
    $customer_name = $_POST['iamkira'];

    try {
        // Get connection
        $connection = $newconnection->openConnection();

        // Query using named parameters
        $query = "INSERT INTO transaction_table(product_name, price, quantity, product_id, customer_id, customer_name) VALUES(:product_name, :price, :quantity, :product_id, :customer_id, :customer_name)";

        // Prepare the query
        $stmt = $connection->prepare($query);

        // Bind parameters
        $stmt->bindParam(':product_name', $product_name);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':quantity', $quantity);
        $stmt->bindParam(':product_id', $product_id);
        $stmt->bindParam(':customer_id', $customer_id);
        $stmt->bindParam(':customer_name', $customer_name);

        // Execute query
        $stmt->execute();

        echo "Data Inserted Successfully";
    } catch (PDOException $th) {
        echo "Error Message:" . $th->getMessage();
    }
}

?>
