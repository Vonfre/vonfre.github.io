<?php
    // 连接数据库
    $servername="localhost";
    $username="root";
    $password="193757498";
    $dbname="liuyan";
    // 创建链接
    $conn = new mysqli($servername,$username,$password,$dbname);
    // 检测链接
    if($conn->connect_error){
        die("连接失败：".$conn->connect_error);
    }
?>
