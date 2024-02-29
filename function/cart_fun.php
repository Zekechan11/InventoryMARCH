<?php

include_once('dbconfig.php');

if(isset($_POST['removeCartItem'])) {
    $transaction_id = $_POST['cart_id_rem'];

    try {
        $connection = $newconnection->openConnection();
        $stmt = $connection->prepare("DELETE FROM transaction_table WHERE transaction_id = :transaction_id");
        $stmt->bindParam(':transaction_id', $transaction_id, PDO::PARAM_INT);
        $query = $stmt->execute();
        
    } catch (PDOException $th) {
        echo "Error Message:" . $th->getMessage();
    }
}

?>