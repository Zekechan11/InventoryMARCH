<?php
require_once('dbconfig.php');

// UPDATE DATA IN DATABASE
if (isset($_POST['removeTransaction'])) {

    // get data from inputs
    $customer_id = $_POST['customer_id_rev'];
    $status = "NONE";

    try {
        $connection = $newconnection->openConnection();
        $stmt = $connection->prepare("UPDATE customer_table
                                      SET status=:status
                                      WHERE customer_id=:customer_id
                                      LIMIT 1");
        $data = [
            ':status' => $status,
            ':customer_id' => $customer_id
        ];
        $query = $stmt->execute($data);
        
    } catch (PDOException $th) {
        echo "Error Message:" . $th->getMessage();
    }
}