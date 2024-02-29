<?php

include_once 'dbconfig.php';

// INSERT DATA IN DATABASE
if (isset($_POST['edit_profile'])) {

    // get data from inputs
    $admin_id = 1;
    $admin_Fname = $_POST['adminFirstname'];
    $admin_Lname = $_POST['adminLastname'];
    $admin_Uname = $_POST['adminUsername'];

    try {
        // get connection
        $connection = $newconnection->openConnection();
        // query using named placeholders
        $query = "UPDATE admin_table
                  SET first_name=:first_name, last_name=:last_name, username=:username
                  WHERE admin_id=:admin_id";

        $data = [
            ':first_name' => $admin_Fname,
            ':last_name' => $admin_Lname,
            ':username' => $admin_Uname,
            ':admin_id' => $admin_id
        ];
        // prepare the query
        $stmt = $connection->prepare($query);
        // execute query
        $stmt->execute($data);
        echo "Profile Info Updated Successfully";
    } catch (PDOException $th) {
        echo "Error Message:" . $th->getMessage();
    }
}

?>