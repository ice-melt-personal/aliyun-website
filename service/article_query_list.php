<?php 
header('Content-Type:application/json; charset=utf-8');
//session_start();
include("conn.php");

class Result
{
  var $flag;
  var $data;
  function Result($flag="true",$data) {
    $this->flag = $flag;
	$this->flag = $flag;
  }
}

$start = $_POST["start"];
$limit = $_POST["limit"]; 


if(mysqli_errno($link)){
	echo mysqli_errno($link);
	exit;
} 

//mysqli_set_charset($link,'utf8');
$arr = array();
$sql = "select id,filetype,title,content,save_time from im_article";
$result = mysqli_query($link,$sql);
$num=mysqli_num_rows($result);

for($i=0;$i<$num;$i++)
{
	$row=mysqli_fetch_assoc($result); 
	$temp = array();
	$temp["id"] = $row["id"];
	$temp["filetype"] = $row["filetype"];
	$temp["title"] = $row["title"];
	$temp["content"] = $row["content"];
	$temp["save_time"] = $row["save_time"];
	//array_push($temp,"id" =&gt; $row["id"]);
	//array_push($temp,"filetype" =&gt; $row["filetype"]);
	//array_push($temp,"title" =&gt; $row["title"]);
	//array_push($temp,"content" =&gt; $row["content"]);
	//array_push($temp,"save_time" =&gt; $row["save_time"]);
	
	array_push($arr,$temp);
}

echo json_encode($arr); 
?>