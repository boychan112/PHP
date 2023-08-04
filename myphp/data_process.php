<?php
    $age = $_GET['number'];
    echo "{$age}를 입력했습니다.<br>";
    if($age <= 17){
        echo "미성년자입니다.";
    }
    else{
        echo "성인입니다.";
    }
?>