<?php
include "dbconfig.php";

// Establish a database connection
$newconnection = new Connection();
$conn = $newconnection->openConnection();

if (isset($_POST['submit'])) {

    $product_name = $_POST['product_name'];
    $category_id = $_POST['category_name']; // Assuming you have a category_id in your category_table
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];

    // Count total files
    $countfiles = count($_FILES['files']['name']);

    // Prepared statement for products_table
    $products_query = "INSERT INTO products_table (product_name, image, category_id, quantity, price, date_added) 
    VALUES (?, ?, ?, ?, ?, NOW())";

    $products_statement = $conn->prepare($products_query);

    // Loop all files
    for ($i = 0; $i < $countfiles; $i++) {

        // File name
        $filename = $_FILES['files']['name'][$i];

        // Location
        $target_file = 'uploads/' . $filename;

        // file extension
        $file_extension = pathinfo(
            $target_file, PATHINFO_EXTENSION
        );

        $file_extension = strtolower($file_extension);

        // Valid image extension
        $valid_extension = array("png", "jpeg", "jpg");

        if (in_array($file_extension, $valid_extension)) {

            // Upload file
            if (move_uploaded_file(
                $_FILES['files']['tmp_name'][$i],
                $target_file
            )) {

                // Execute query for products_table
                $products_statement->execute(
                    array($product_name, $target_file, $category_id, $quantity, $price)
                );

                // Get the last inserted product_id
                $product_id = $conn->lastInsertId();

                // Assuming you have an inventory_table with product_id, stock_in, and out_of_stock columns
                // Prepared statement for inventory_table
                $inventory_query = "INSERT INTO inventory_table (product_id, stock_in, out_of_stock) 
                VALUES (?, ?, ?)";

                $inventory_statement = $conn->prepare($inventory_query);

                // Execute query for inventory_table
                $stock_in = $quantity;  // Assuming the initial stock is the same as the quantity added
                $out_of_stock = 0;  // Assuming initially, the product is not out of stock
                $inventory_statement->execute(
                    array($product_id, $stock_in, $out_of_stock)
                );

                echo "Product added successfully";
            } else {
                echo "Error uploading file.";
            }
        } else {
            echo "Invalid file format. Please upload a PNG, JPEG, or JPG file.";
        }
    }
}

function getCategories($conn){
    $stmt = $conn->query("SELECT * FROM category_table");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

$categories = getCategories($conn);

// Function to fetch products
function getProducts($conn)
{
    $stmt = $conn->query("SELECT * FROM products_table");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

$products = getProducts($conn);
?>

