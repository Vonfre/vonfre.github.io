<?php
require_once "config.php";

//点击之后传了个id过来
//这边php文件通过GET接受传过来的id和2个值
$id = $_GET['i'];
$t = $_GET['t'];

var_dump($id);
var_dump($t);


//sql的更新代码
$sql = "UPDATE `liuyan` SET `text` = '$t' WHERE `liuyan`.`id` = $id;";
//执行sql更新语句
$conn->query($sql);

//回到首页
header("Location:index.php");
?>
