<?php 
session_start();
include("db/conn.php");

$title = $_POST["title"];
$filetype = $_POST["filetype"];
$content = $_POST["content"];
$time = date('Y-m-d h:i:s', time());
if(mysqli_errno($link)){
	echo mysqli_errno($link);
	exit;
} 

mysqli_set_charset($link,'utf8');

$sql = "insert into im_article(title,filetype,content,save_time) values('$title','$filetype','$content','$time')";
  
$result = mysqli_query($link,$sql);  

echo $result;
?>