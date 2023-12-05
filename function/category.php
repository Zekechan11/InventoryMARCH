<?php

    include_once 'dbconfig.php';

    //INSERT DATA IN DATABASE
    if(isset($_POST['add_category'])) {
    
    //get data from inputs
    $category_name = $_POST['category_name'];

    try {
        //get connection
        $connection = $newconnection->openConnection();
        //query using positional parameters
        $query = "INSERT INTO category_table(`category_name`) VALUES(?)";
        //prepare the query
        $stmt = $connection->prepare($query);
        //execute query
        $query = $stmt->execute([$category_name]);
        echo "Category Added Successfully";
    } catch (PDOException $th) {
        echo "Error Message:" .$th->getMessage();
    }
}

?>