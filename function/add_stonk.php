<?php
include_once 'dbconfig.php';

// UPDATE STOCK IN DATABASE
if (isset($_POST['add_stonk'])) {

    // get data from inputs
    $productId = $_POST['stonk_id']; // product ID
    $newStock = $_POST['new_stonk']; // stock to be added

    try {
        // get connection
        $connection = $newconnection->openConnection();
        // query using positional parameters
        $query = "UPDATE products_table SET `quantity` = `quantity` + ? WHERE product_id = ?";
        // prepare the query
        $stmt = $connection->prepare($query);
        // execute query
        $result = $stmt->execute([$newStock, $productId]);

        if ($result) {
            echo "Stock Added Successfully";
        } else {
            echo "Error executing query";
        }
    } catch (PDOException $th) {
        echo "Error Message: " . $th->getMessage();
    }
}
?>