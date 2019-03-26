<?php
session_start();
include("db/conn.php");


//登录处理界面 logincheck.php

//判断是否按下提交按钮
if(isset($_POST["submit"]) && $_POST["submit"] == "登录") 
{
	//将用户名和密码存入变量中，供后续使用
	$user = trim($_POST["username"]);
	$psw = md5(trim($_POST["password"]));//密码使用md5加密

	//$code = $_POST["code"];
	if($user == "" || $psw == "") 
	{
		//用户名或者密码其中之一为空，则弹出对话框，确定后返回当前页的上一页 
		echo "<script>alert('请输入用户名或者密码！'); history.go(-1);</script>"; 
	}
	//else if($code != $_SESSION[' ver_code']){
	//echo "<script>alert('验证码不正确，请重新输入！'); history.go(-1);</script>";
	//} 
	else 
	{ 	if(mysqli_errno($link)){
			echo mysqli_errno($link);
			exit;
		} 

		mysqli_set_charset($link,'utf8');

		$sql = "select username ,password from im_users where username = '$user' and password = '$psw'";
		//$sql = "update im_users set password = '$psw' where  username = '$user' "; 
		$result = mysqli_query($link,$sql);  
		
		$num = mysqli_num_rows($result);  
		if($num) 
		{
			//设置 cookie
			setcookie("im_username", $user, time()+3600,"/");//60*60*24*7
			setcookie("im_password", $password, time()+3600,"/");//60*60*24*7
			setcookie("im_status", true, time()+3600,"/");//60*60*24*7
			echo "<script>alert('成功登录'); window.location.href='http://localhost/index.php';</script>"; 
		} 
		else 
		{ 
			echo "<script>alert('用户名或密码不正确！');history.go(-1);</script>"; 
		} 
	} 
} else { 
	echo "<script>alert('提交未成功44444！');history.go(-1);</script>"; 
}  
?> 