<?php
session_start();


//登录处理界面 logincheck.php
//判断是否按下提交按钮
 if(isset($_POST["submit"]) && $_POST["submit"] == "登录") 
 { 
	//将用户名和密码存入变量中，供后续使用
	$user = trim($_POST["username"]);
	$psw = trim($_POST["password"]);

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
	{ 	//确认用户名密码验证码不为空，则连接数据库
		//$conn = mysqli_connect("bdm175223383.my3w.com","bdm175223383","Qjyj@sf!15467","bdm175223383_db");//数据库帐号密码为安装数据库时设置
		$conn = mysqli_connect("localhost","root","","mysql");//数据库帐号密码为安装数据库时设置
		if(mysqli_errno($conn)){
			echo mysqli_errno($conn);
			exit;
		} 


		mysqli_set_charset($conn,'utf8');

		$sql = "select username ,password from im_users where username = '$user' and password = PASSWORD('$psw')"; 
		$result = mysqli_query($conn,$sql);  

		$num = mysqli_num_rows($result);  
		if($num) 
		{  
			echo "<script>alert('成功登录'); window.location.href='http://localhost/index.php';</script>"; 
		} 
		else 
		{ 
			echo "<script>alert('用户名或密码不正确！');";//history.go(-1);</script>"; 
		} 
	} 
 } 
 else 
 { 
 echo "<script>alert('提交未成功44444！');</script>"; 
 }  
?> 