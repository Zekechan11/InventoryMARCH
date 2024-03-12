<?php

include_once 'dbconfig.php';

    //INSERT DATA IN DATABASE
    if(isset($_POST['process_transaction'])) {
    
    //get data from inputs
    $voucher = $_POST['selected_voucher'];
    $customer_id = $_POST['customer_id'];
    $subtotal = $_POST['subtotal'];
    $cash = $_POST['cash'];
    $total = $_POST['total'];
    $change = $_POST['change'];
    $transaction_code = generateTransactionCode(15);

    if($voucher != 0) {
        $voucher = ltrim($voucher, '0.');
        //$voucher = strval($voucher) . "%";
    }

    try {
        // Get connection
        $connection = $newconnection->openConnection();
        // Query using named parameters
        $query = "INSERT INTO sales_table (voucher, customer_id, subtotal, cash, total, remainder, transaction_code)
                  VALUES (:voucher, :customer_id, :subtotal, :cash, :total, :change, :transaction_code)";
        // Prepare the query
        $stmt = $connection->prepare($query);
        // Bind parameters
        $stmt->bindParam(':voucher', $voucher);
        $stmt->bindParam(':customer_id', $customer_id);
        $stmt->bindParam(':subtotal', $subtotal);
        $stmt->bindParam(':cash', $cash);
        $stmt->bindParam(':total', $total);
        $stmt->bindParam(':change', $change);
        $stmt->bindParam(':transaction_code', $transaction_code);
        // Execute query
        $stmt->execute();

        //$transactQuery = "UPDATE transaction_table ";

        echo "Transaction Recorded Successfully";
    } catch (PDOException $th) {
        echo "Error Message: " . $th->getMessage();
    }
}


function generateTransactionCode($length = 8) {
    // Add current timestamp
    $timestamp = time(); // Current Unix timestamp
    $timestampString = base_convert($timestamp, 10, 36); // Convert timestamp to base36 string

    // Characters for random string
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';

    // Generate random string
    $max = strlen($characters) - 1;
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $max)];
    }

    // Concatenate timestamp and random string
    $transactionCode = $timestampString . $randomString;

    return $transactionCode;
}


?>