<?php
    $host = "localhost";
    $dbname = "todo";
    $charset = "utf8mb4";
    $user = "root";
    $pass = "";
    $option =[PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ];
    
    $db = new PDO("mysql:host={$host}; dbname={$dbname}; charset={$charset}", $user, $pass, $option);

    // var_dump($db);
?>