<?php
    session_start();

    $id = $_POST['id'];
    $passwd = $_POST['password'];
    require 'conn.php';

    $sql = "SELECT * FROM users WHERE id = '$id'";
    $result = $db->query($sql);
    $list = $result->fetch();
    
    if($list->password == $passwd){
        echo "로그인 성공! <br>";
        echo "<a href='login.php'>메인페이지로</a>";
        $_SESSION['user']=['id'=>$id, 'name'=>'이원찬'];
    }
    else{
        echo "로그인 실패 <br>";
        echo "<a href='login.php'>메인페이지로</a>";
    }
?>