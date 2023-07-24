<?php
    $host = "localhost";
    $dbname = "myblog";
    $charset = "utf8mb4";
    $user = "root";
    $pass = "";
    $option =[PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
    
    $db = new PDO("mysql:host={$host}; dbname={$dbname}; charset={$charset}", $user, $pass, $option);

    $sql = "INSERT INTO users(id,name,password,level) VALUES ('test01','이원찬',PASSWORD('1234'), 1)";
    $db->exec($sql);
?>