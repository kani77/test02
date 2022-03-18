<?php
    $host = '';
    $user = '';
    $pw = '';
    $dbName = '';
    $conn = "";
    //$mysqli = new mysqli($host, $user, $pw, $dbName);

    //$conn=mysql_connect($host, $user, $pw);
    //mysql_select_db("php_exam", $conn);
    
    if($conn){
        echo "MySQL 접속 성공";
    }else{
        echo "MySQL 접속 실패";
    }
    echo date("Y-m-d", time());
?>