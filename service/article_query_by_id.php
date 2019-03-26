<?php 
//session_start();
include("conn.php");
$id=$_REQUEST['id'];

if(mysqli_errno($link)){
	echo mysqli_errno($link);
	exit;
} 

mysqli_set_charset($link,'utf8');

$sql = "select id,filetype,title,content,save_time from im_article where id='$id'";
$result = mysqli_query($link,$sql);  
$num=mysqli_num_rows($result);
$arr = array();
if($num=0){
	$arr["id"] = "";
	$arr["filetype"] = "";
	$arr["title"] = "";
	$arr["content"] = "";
	$arr["save_time"] = "";
}else{
	$row=mysqli_fetch_assoc($result);
	$arr["id"] = $row["id"];
	$arr["filetype"] = $row["filetype"];
	$arr["title"] = $row["title"];
	$arr["content"] = $row["content"];
	$arr["save_time"] = $row["save_time"];
}

echo json_encode($arr); 
?>