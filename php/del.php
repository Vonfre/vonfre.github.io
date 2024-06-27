<?php

//加载配置文件
require_once "config.php";

//点击之后传了个id过来
//这边php文件通过GET接受传过来的id
$id = $_GET['id'];

//删除语句
$sql = "DELETE FROM `liuyan` WHERE `liuyan`.`id` = $id";
//执行sql语句
$conn->query($sql);
//$conn->query($sql1);

//返回到index.php
header("Location:index.php");
