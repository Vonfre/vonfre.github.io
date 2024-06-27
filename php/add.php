<?php
require_once 'config.php';

$t = $_GET["t"];
$n = $_GET["n"];
$time = date("Y-m-d H:i:s",time());

//插入语句
$sql = "INSERT INTO `liuyan` (`id`, `username`, `text`, `time`) VALUES (NULL, '$n', '$t', '$time');";
$conn->query($sql);
header("Location:index.php");
?>
