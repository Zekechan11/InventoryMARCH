<?php

// error_reporting(E_ALL);
// ini_set('display_errors', 1);

// require_once('../dbconfig.php');

// if (isset($_POST["login"])) {
//     if (empty($_POST["username"]) || empty($_POST["password"])) {
//         $message = '<label>All fields are required</label>';
//     } else {
//         $query = "SELECT * FROM admin_table WHERE username = :username AND password = :password";
        
//         try {
//             $conn = $newconnection->openConnection();
            
//             $stmt = $conn->prepare($query);
//             $stmt->bindParam(':username', $_POST["username"]);
//             $stmt->bindParam(':password', $_POST["password"]);
//             $stmt->execute();
            
//             $count = $stmt->rowCount();
            
//             if ($count > 0) {
//                 session_start();
//                 $_SESSION["username"] = $_POST["username"];
//                 header("location: index.php");
//             } else {
//                 $message = '<label>Wrong Data</label>';
//             }
//         } catch (PDOException $e) {
//             echo "Error: " . $e->getMessage();
//         } finally {
//             $newconnection->closeConnection();
//         }
//     }
// }

?>

<?php
include_once 'dbconfig.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    try {
        $connection = new Connection();
        $pdo = $connection->openConnection();

        $stmt = $pdo->prepare("SELECT * FROM admin_table WHERE username = :username AND password = :password");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            session_start();
            $_SESSION['username'] = $username;

            header("Location: dashboard.php");
            exit();
        } else {
            $error_message = "Incorrect username or password";
        }
    } catch (PDOException $e) {
        $error_message = "Error executing query: " . $e->getMessage();
    } finally {
        $connection->closeConnection();
    }
}
?>


