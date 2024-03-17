<?php

include_once 'dbconfig.php';

    //INSERT DATA IN DATABASE
    if(isset($_POST['process_transaction'])) {
    
    //get data from inputs
    $voucher = $_POST['selected_voucher'];
    $customer_id = $_POST['customer_id'];
    $customer_name = $_POST['customer_name'];
    $subtotal = $_POST['process_subtotal'];
    $cash = $_POST['process_cash'];
    $total = $_POST['process_total'];
    $change = $_POST['process_change'];
    $transaction_code = generateTransactionCode(15);
    $status = "PAID";
    $req_status = "NONE";

    if($voucher != 0) {
        $voucher = ltrim($voucher, '0.');
        //$voucher = strval($voucher) . "%";
    }

    if(!empty($cash) && !empty($subtotal)) {
        try {
            // Get connection
            $connection = $newconnection->openConnection();
            // Query using named parameters
            $query = "INSERT INTO sales_table (voucher, customer_id, customer_name, subtotal, cash, total, remainder, transaction_code)
                      VALUES (:voucher, :customer_id, :customer_name, :subtotal, :cash, :total, :change, :transaction_code)";
            // Prepare the query
            $stmt = $connection->prepare($query);
            // Bind parameters
            $stmt->bindParam(':voucher', $voucher);
            $stmt->bindParam(':customer_id', $customer_id);
            $stmt->bindParam(':customer_name', $customer_name);
            $stmt->bindParam(':subtotal', $subtotal);
            $stmt->bindParam(':cash', $cash);
            $stmt->bindParam(':total', $total);
            $stmt->bindParam(':change', $change);
            $stmt->bindParam(':transaction_code', $transaction_code);
            // Execute query
            $stmt->execute();
    
            $transactQuery = "UPDATE transaction_table 
                              SET status = :status, transaction_code = :transaction_code
                              WHERE customer_id = :customer_id AND status = 'UNPAID'";
            // Prepare the query
            $stmt = $connection->prepare($transactQuery);
            // Bind parameters
            $stmt->bindParam(':status', $status);
            $stmt->bindParam(':transaction_code', $transaction_code);
            $stmt->bindParam(':customer_id', $customer_id);
            // Execute query
            $stmt->execute();

            echo '<script> window.location = "transaction.php"</script>';
            //$success_msg = "Transaction Recorded Successfully";
        } catch (PDOException $th) {
            $error_msg = "Error Message: " . $th->getMessage();
        }

        // Remove customer from active Transactions
        if(!empty($customer_id)) {
            try {
                // prepare query statement using named parameters
                $stmt = $connection->prepare("UPDATE customer_table
                        SET status=:status
                        WHERE customer_id=:customer_id");
        
                // get data inputs
                $data = [
                    ':status' => $req_status,
                    ':customer_id' => $customer_id
                ];
                // execute the query statement
                $query = $stmt->execute($data);
                
            } catch (PDOException $th) {
                $error_msg = "Error Message:" . $th->getMessage();
            }
        } else {
            $error_msg = "Error: Something Failed";
        }

    } else {
        $error_msg = "No Product Detected";
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