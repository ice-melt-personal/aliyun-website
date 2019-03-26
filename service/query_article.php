<?php 
//session_start();
include("db/conn.php");

if(mysqli_errno($link)){
	echo mysqli_errno($link);
	exit;
} 

mysqli_set_charset($link,'utf8');

$sql = "select id,filetype,title,content,save_time from im_article";
  
$result = mysqli_query($link,$sql);  

?>