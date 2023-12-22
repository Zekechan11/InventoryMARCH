<?php
include_once('dbconfig.php');

// DELETE DATA IN DATABASE
if (isset($_POST['delete_product'])) {
    // get id from form submission
    $delete_product_id = $_POST['delete_product_id'];

    try {
        // get connection
        $connection = $newconnection->openConnection();
        // prepare query
        $stmt = $connection->prepare("DELETE FROM products_table WHERE product_id = :product_id");
        // bind parameter
        $stmt->bindParam(':product_id', $delete_product_id, PDO::PARAM_INT);
        // execute query
        $query = $stmt->execute();
        
    } catch (PDOException $th) {
        echo "Error Message:" . $th->getMessage();
    }
}
?>
