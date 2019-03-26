<?php
session_start();
include("../service/db/conn.php");
?>

<!DOCTYPE html>
<html> 
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">  
<meta http-equiv="X-UA-Compatible" content="IE=edge" />  
<!-- 包含头部信息用于适应不同设备 -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- 包含 bootstrap 样式表 -->
<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
</head>

<body bgcolor="#F5F5F5">

<div class=".container-fluid">
	<div class="row">
		<div class="col-md-8 column">
			<input type="text" class="form-control" placeholder="请输入文章标题" id="title" name="title">
		</div>
	
		<div class="col-md-3 column">
			<div class="form-group">
				<select class="form-control" id="filetype">
					<option>机器学习</option>
					<option>深度学习</option>
					<option>数学基础</option>
				</select>
			</div>
		</div>
		
		<div class="col-md-1 column">
			<button id="save" type="button" class="btn btn-danger">发布文章</button>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 column"> 
			<button type="button" class="btn btn-secondary" >这一行打算做工具行</button>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 column">
			<!--设置id为oriContent，如果想实现实时更新，使用onkeyup方法-->
			<textarea id="oriContent" style="height:400px;width:600px;" onkeyup="convert()"></textarea>
		</div>
		<div class="col-md-5 column">
			<!---设置展示的div添加id-->
			<div id="result" style="border:1px solid #ddd;height:400px;width:600px;"></div>
		</div>
	</div>
</div>
</body>
<!-- JavaScript 放置在文档最后面可以使页面加载速度更快 -->
<!-- 可选: 包含 jQuery 库 -->
<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
<!-- 可选: 合并了 Bootstrap JavaScript 插件 -->
<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="\service\showdown-master\dist\showdown.min.js"></script>
<script>
	<!--写转化函数-->
function convert(){
    var text = document.getElementById("oriContent").value;
    var converter = new showdown.Converter();
    var html = converter.makeHtml(text);
    document.getElementById("result").innerHTML = html;
}

$("#save").click(function(){
	var title = $("#title").val();
	var filetype = $("#filetype").val();
	var content = $("#oriContent").val();
	
	$.ajax({
		type: "POST",
		url: "/service/save_article.php",
		data: {	title: title, 
				filetype: filetype,
				content,content},
		dataType: "json",
		timeout : 10000,
		success: function(data){
			alert("保存成功。");
			//history.go(-1);
		} ,
		error: function(XMLHttpRequest,textStatus){  
			if(textStatus=='timeout'){//超时操作
				alert("对不起，保存超时，请重新保存。");
				return false;
			}else{//其他错误
				alert("操作失败！");
				return false;
			}
		} 
	}); 
})
</script>
</html>