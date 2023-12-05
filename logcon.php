<?php

require_once('dbconfig.php');
if (isset($_POST["login"])) {
    if (empty($_POST["username"]) || empty($_POST["password"])) {
        $message = '<label>All fields are required</label>';
    } else {
        $query = "SELECT * FROM admin_table WHERE username = :username AND password = :password";
        $stmt = $conn->prepare($query);
        $stmt->execute(
            array(
                'username'     =>     $_POST["username"],
                'password'     =>     $_POST["password"]
            )
        );
        $count = $stmt->rowCount();
        if ($count > 0) {
            $_SESSION["username"] = $_POST["username"];
            header("location: index.php");
        } else {
            $message = '<label>Wrong Data</label>';
        }
    }
}
