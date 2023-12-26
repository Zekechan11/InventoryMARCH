<?php
include_once('dbconfig.php');

// UPDATE DATA IN DATABASE
if (isset($_POST['update_product'])) {

    // get data from inputs
    $product_id = $_POST['edit_product_id'];
    $product_name = $_POST['edit_product_name'];
    $quantity = $_POST['edit_quantity'];
    $price = $_POST['edit_price'];
    $category_id = $_POST['edit_category_name'];

    // File upload handling
    $targetDir = "uploads/";
    $fileName = basename($_FILES["edit_files"]["name"][0]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    try {
        $connection = $newconnection->openConnection();
        if (!empty($_FILES["edit_files"]["name"][0])) {
            $allowedTypes = array("png", "jpeg", "jpg");
            if (in_array($fileType, $allowedTypes)) {
                if (move_uploaded_file($_FILES["edit_files"]["tmp_name"][0], $targetFilePath)) {
                    // File uploaded successfully, update database with image
                    $stmt = $connection->prepare("UPDATE products_table
                    SET product_name=:product_name, quantity=:quantity, price=:price, category_id=:category_id, image=:image
                    WHERE product_id=:product_id
                    LIMIT 1");

                    // get data inputs
                    $data = [
                        ':product_name' => $product_name,
                        ':quantity' => $quantity,
                        ':price' => $price,
                        ':category_id' => $category_id,
                        ':image' => $targetFilePath,
                        ':product_id' => $product_id
                    ];

                    $query = $stmt->execute($data);
                } else {
                    echo "File upload failed.";
                }
            } else {
                echo "Invalid file type.";
            }
        } else {
            // If no file update boink
            $stmt = $connection->prepare("UPDATE products_table
            SET product_name=:product_name, quantity=:quantity, price=:price, category_id=:category_id
            WHERE product_id=:product_id
            LIMIT 1");

            // Get data inputs
            $data = [
                ':product_name' => $product_name,
                ':quantity' => $quantity,
                ':price' => $price,
                ':category_id' => $category_id,
                ':product_id' => $product_id
            ];

            // execute the query statement
            $query = $stmt->execute($data);
        }

    } catch (PDOException $th) {
        echo "Error Message:" . $th->getMessage();
    }
}
?>
