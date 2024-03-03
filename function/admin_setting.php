<?php

include_once 'dbconfig.php';

// UPDATE USER INFO
if (isset($_POST['edit_profile'])) {

    // get data from inputs
    $admin_id = $_SESSION['admin_id'];
    $admin_Fname = $_POST['adminFirstname'];
    $admin_Lname = $_POST['adminLastname'];
    $admin_Uname = $_POST['adminUsername'];

    // Check if a file was uploaded
    if ($_FILES['imageInput']['error'] == 0) {
        // File upload configuration
        $targetDir = "uploads/";  // Specify your upload directory
        $targetFile = $targetDir . basename($_FILES["imageInput"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Check if the image file is a actual image or fake image
        $check = getimagesize($_FILES["imageInput"]["tmp_name"]);
        if ($check !== false) {
            // Allow certain file formats
            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 1) {
            // If everything is ok, try to upload file
            if (move_uploaded_file($_FILES["imageInput"]["tmp_name"], $targetFile)) {
                // File uploaded successfully, update the database with the new image path
                try {
                    // get connection
                    $connection = $newconnection->openConnection();
                    // query using named placeholders
                    $query = "UPDATE admin_table
                              SET first_name=:first_name, last_name=:last_name, username=:username, profile_pic=:profile_pic
                              WHERE admin_id=:admin_id";

                    $data = [
                        ':first_name' => $admin_Fname,
                        ':last_name' => $admin_Lname,
                        ':username' => $admin_Uname,
                        ':admin_id' => $admin_id,
                        ':profile_pic' => $targetFile  // Updated to include the new image path
                    ];
                    // prepare the query
                    $stmt = $connection->prepare($query);
                    // execute query
                    $stmt->execute($data);
                    echo "Profile Info Updated Successfully";
                } catch (PDOException $th) {
                    echo "Error Message:" . $th->getMessage();
                }
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    } else {
        // No file uploaded, update only text information
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

// RESTORE TO DEFAULT
if(isset($_POST['reset_profile'])) {
    
    //get data from inputs
    $admin_Id = $_SESSION['admin_id'];
    $admin_Fname = "Hardware";
    $admin_Lname = "Admin";
    $admin_Uname = "admin";
    $admin_Pname = "image/default_profile.png";

    try {
        //get connection
        $connection = $newconnection->openConnection();
        //query using positional parameters
        $query = "UPDATE admin_table
                  SET first_name=:first_name, last_name=:last_name, username=:username, profile_pic=:profile_pic
                  WHERE admin_id=:admin_id";

        $data = [
            ':first_name' => $admin_Fname,
            ':last_name' => $admin_Lname,
            ':username' => $admin_Uname,
            ':profile_pic' => $admin_Pname,
            ':admin_id' => $admin_Id
        ];
        //prepare the query
        $stmt = $connection->prepare($query);
        //execute query
        $query = $stmt->execute($data);
        echo "Profile has been reset to default";
    } catch (PDOException $th) {
        echo "Error Message:" . $th->getMessage();
    }
}

?>