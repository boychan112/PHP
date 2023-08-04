<?php
    require 'conn.php';
    $id = $_POST['id'];
    $passwd = $_POST['password'];
    $name = $_POST['name'];


    $sql = "INSERT INTO users(id,name,password,level) VALUES (?,?,?,?)";
    $q = $db->prepare($sql);
    $q->execute([$id, $name, $passwd,1]);
?>