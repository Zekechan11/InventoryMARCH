<?php
include_once('dbconfig.php');

//DELETE CUSTOMER

// DELETE DATA IN DATABASE
if (isset($_POST['delete_customer'])) {
    // get id from form submission
    $delete_customer_id = $_POST['delete_customer_id'];

    try {
        // get connection
        $connection = $newconnection->openConnection();
        // prepare query
        $stmt = $connection->prepare("DELETE FROM customer_table WHERE customer_id = :customer_id");
        // bind parameter
        $stmt->bindParam(':customer_id', $delete_customer_id, PDO::PARAM_INT);
        // execute query
        $query = $stmt->execute();
        
    } catch (PDOException $th) {
        echo "Error Message:" . $th->getMessage();
    }
}
?>