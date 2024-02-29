<?php

include_once 'dbconfig.php';

// UPDATE USER INFO
if (isset($_POST['edit_profile'])) {

    // get data from inputs
    $admin_id = $_SESSION['admin_id'];
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

// UPDATE PASSWORD
if (isset($_POST['update_password'])) {

    $connection = $newconnection->openConnection();
    $stmt = $connection->prepare("SELECT password FROM admin_table");
    $stmt->execute();
    $admin_pass = $stmt->fetch();

    $currentPassword =  $admin_pass['password'];

    // get data from inputs
    $admin_id_ps = $_SESSION['admin_id'];
    $oldPassword = $_POST['oldPassword'];
    $newPassword = $_POST['newPassword'];
    $confirmPassword = $_POST['confirmPassword'];

    switch (true) {
        case ($oldPassword !== $currentPassword):
            echo "Please input the correct old password";
            break;
    
        case $newPassword !== $confirmPassword:
            echo "New password and confirm password do not match.";
            break;
    
        default:
            try {
                // get connection
                $connection = $newconnection->openConnection();
                // query using named placeholders
                $query = "UPDATE admin_table
                          SET password=:password
                          WHERE admin_id=:admin_id";
                $data = [
                    ':password' => $confirmPassword,
                    ':admin_id' => $admin_id_ps
                ];
    
                // prepare the query
                $stmt = $connection->prepare($query);
                // execute query
                $stmt->execute($data);
    
                echo "Password updated successfully";
            } catch (PDOException $th) {
                echo "Error Message: " . $th->getMessage();
            }
            break;
    }    
}
?>