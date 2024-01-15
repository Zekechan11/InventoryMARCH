<?php
require_once('dbconfig.php');

// UPDATE DATA IN DATABASE
if (isset($_POST['update_category'])) {

    // get data from inputs
    $category_id = $_POST['edit_category_id'];
    $category_name = $_POST['edit_category_name'];

    try {
        // get connection
        $connection = $newconnection->openConnection();
        // prepare query statement using named parameters
        $stmt = $connection->prepare("UPDATE category_table SET category_name=:category_name WHERE category_id=:category_id LIMIT 1");

        // get data inputs
        $data = [
            ':category_name' => $category_name,
            ':category_id' => $category_id
        ];
        // execute the query statement
        $query = $stmt->execute($data);
        
    } catch (PDOException $th) {
        echo "Error Message:" . $th->getMessage();
    }
}

// DELETE DATA IN DATABASE
if (isset($_POST['delete_category'])) {
    // get id and name from form submission
    $delete_category_id = $_POST['delete_category_id'];
    $delete_category_name = $_POST['delete_category_name'];

    try {
        // get connection
        $connection = $newconnection->openConnection();
        // prepare query
        $stmt = $connection->prepare("DELETE FROM category_table WHERE category_id = :category_id AND category_name = :category_name");
        // bind parameters
        $stmt->bindParam(':category_id', $delete_category_id, PDO::PARAM_INT);
        $stmt->bindParam(':category_name', $delete_category_name, PDO::PARAM_STR);
        // execute query
        $query = $stmt->execute();
        // check if query is true
        // if ($query) {
        //     header("location: category.php");
        // }
    } catch (PDOException $th) {
        echo "Error Message:" . $th->getMessage();
    }
}
?>