<?php
// DELETE DATA IN DATABASE
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_product'], $_POST['delete-product-id'])) {
    // get id from form submission
    $delete_product_id = $_POST['delete-product-id'];

    try {
        // get connection
        $connection = $newconnection->openConnection();
        // prepare query
        $stmt = $connection->prepare("DELETE FROM products_table WHERE product_id = :product_id");
        // bind parameter
        $stmt->bindParam(':product_id', $delete_product_id, PDO::PARAM_INT);
        // execute query
        $query = $stmt->execute();

        // check if query is true
        if ($query) {
            header("location: product.php");
            exit(); // Stop further execution
        }
    } catch (PDOException $th) {
        echo "Error Message:" . $th->getMessage();
    }
}
?>
