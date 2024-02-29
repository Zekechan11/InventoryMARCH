<?php
    require_once('dbconfig.php');

    $connection = $newconnection->openConnection();
    $stmt = $connection->prepare("SELECT * FROM admin_table");
    $stmt->execute();
    $result = $stmt->fetchAll();
?>