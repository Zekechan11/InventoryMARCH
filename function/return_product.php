<?php

include_once 'dbconfig.php';

//INSERT DATA IN DATABASE
if(isset($_POST['return_product'])) {
    
    //get data from inputs
    $transact_id = $_POST['return_transactId'];
    $transact_code = $_POST['return_transactCode'];
    $price = $_POST['return_price'];
    $customer_name = $_POST['return_customer'];
    $product_name = $_POST['return_productName'];
    $reason = $_POST['return_reason'];
    $return_quantity = $_POST['return_quantity'];

    try {
        //get connection
        $connection = $newconnection->openConnection();
        //query using positional parameters
        $query = "INSERT INTO returned_table (transact_id, transact_code, price, customer_name, product_name, reason, return_quantity) VALUES (:transact_id, :transact_code, :price, :customer_name, :product_name, :reason, :return_quantity)";
        //prepare the query
        $stmt = $connection->prepare($query);

        $stmt->bindParam(':transact_id', $transact_id);
        $stmt->bindParam(':transact_code', $transact_code);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':customer_name', $customer_name);
        $stmt->bindParam(':product_name', $product_name);
        $stmt->bindParam(':reason', $reason);
        $stmt->bindParam(':return_quantity', $return_quantity);
        //execute query
        $stmt->execute();
        $success_msg = "Product has been return.";
    } catch (PDOException $th) {
        $error_msg = "Error Message:" .$th->getMessage();
    }
}

?>