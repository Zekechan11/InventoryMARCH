<?php

include_once 'dbconfig.php';

// INSERT DATA INTO DATABASE
if (isset($_POST['add_customer'])) {

    // get data from inputs
    $full_name = $_POST['full_name'];
    $contact_number = $_POST['contact_number'];
    $address = $_POST['address'];

    try {
        // get connection
        $connection = $newconnection->openConnection();

        // query using named parameters
        $query = "INSERT INTO customer_table(`full_name`, `contact_number`, `address`) VALUES(:full_name, :contact_number, :address)";

        // prepare the query
        $stmt = $connection->prepare($query);

        // bind parameters
        $stmt->bindParam(':full_name', $full_name, PDO::PARAM_STR);
        $stmt->bindParam(':contact_number', $contact_number, PDO::PARAM_INT);
        $stmt->bindParam(':address', $address, PDO::PARAM_STR);

        // execute query
        $stmt->execute();

        echo "Customer Added Successfully";
    } catch (PDOException $th) {
        echo "Error Message:" . $th->getMessage();
    }
}

?>
