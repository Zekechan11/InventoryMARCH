<?php
include_once('dbconfig.php');

//UPDATE CUSTOMER
if (isset($_POST['update_customer'])) {

    // get data from inputs
    $customer_id = $_POST['edit_customer_id'];
    $customer_name = $_POST['edit_customer_name'];
    $customer_contact = $_POST['edit_contact'];
    $customer_address = $_POST['edit_address'];

    try {
        // get connection
        $connection = $newconnection->openConnection();
        // prepare query statement using named parameters
        $stmt = $connection->prepare("UPDATE customer_table
                SET full_name=:full_name, contact_number=:contact_number, address=:address
                WHERE customer_id=:customer_id");

        // get data inputs
        $data = [
            ':address' => $customer_address,
            ':contact_number' => $customer_contact,
            ':full_name' => $customer_name,
            ':customer_id' => $customer_id
        ];
        // execute the query statement
        $query = $stmt->execute($data);

        $success_msg = "Category Updated Successfully";
        
    } catch (PDOException $th) {
        $error_msg = "Error Message:" . $th->getMessage();
    }
}

//DELETE CUSTOMER
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

        $success_msg = "Customer Deleted Successfully";
        
    } catch (PDOException $th) {
        $error_msg = "Error Message:" . $th->getMessage();
    }
}
?>