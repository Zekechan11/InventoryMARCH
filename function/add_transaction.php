<?php

include_once 'dbconfig.php';

// INSERT DATA IN DATABASE
if (isset($_POST['save_quantity_add'])) {
    $connection = $newconnection->openConnection();

    // Get data from inputs
    $product_name = $_POST['prody_name'];
    $price = $_POST['pricekun'];
    $quantity = $_POST['quantityx'];
    $product_id = $_POST['prody_id'];
    $customer_id = $_POST['idchann'];
    $customer_name = $_POST['namechann'];
    $status = "UNPAID";

    try {
        // Check if the product already exists for the given user
        $stmt = $connection->prepare("SELECT * FROM transaction_table WHERE product_id = :product_id AND customer_id = :customer_id AND status = 'UNPAID'");
        $stmt->bindParam(':product_id', $product_id);
        $stmt->bindParam(':customer_id', $customer_id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            // Product exists, update the quantity
            $newQuantity = $result['quantity'] + $quantity;

            $updateStmt = $connection->prepare("UPDATE transaction_table SET quantity = :new_quantity WHERE product_id = :product_id AND customer_id = :customer_id");
            $updateStmt->bindParam(':new_quantity', $newQuantity);
            $updateStmt->bindParam(':product_id', $product_id);
            $updateStmt->bindParam(':customer_id', $customer_id);
            $updateStmt->execute();

            $success_msg = "Quantity Updated Successfully";
        } else {
            // Product does not exist, insert new record
            $insertStmt = $connection->prepare("INSERT INTO transaction_table(product_name, price, quantity, product_id, customer_id, customer_name, status) 
                                                VALUES(:product_name, :price, :quantity, :product_id, :customer_id, :customer_name, :status)");
            $insertStmt->bindParam(':product_name', $product_name);
            $insertStmt->bindParam(':price', $price);
            $insertStmt->bindParam(':quantity', $quantity);
            $insertStmt->bindParam(':product_id', $product_id);
            $insertStmt->bindParam(':customer_id', $customer_id);
            $insertStmt->bindParam(':customer_name', $customer_name);
            $insertStmt->bindParam(':status', $status);
            $insertStmt->execute();

            $success_msg = "Data Inserted Successfully";
        }
    } catch (PDOException $th) {
        $error_msg = "Error Message:" . $th->getMessage();
    }
}

?>
