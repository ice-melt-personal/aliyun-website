<?php
//include(dirname(__FILE__).'/../service/article_query_list.php'); 
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

<div class="container-fluid">
	<div class="row clearfix">
		<div class="col-md-2 column">
			<b>文章目录:</b>
		</div>
		<div class="col-md-10 column">
			<div id="artical_list">
			  <ul>
				<li v-for="artical in data">
					<div class="panel panel-primary" onclick="goPage(this);">
						<div class="artical_id" style="display:none">{{artical.id}}</div>
						<div class="panel-heading">
						<h3 class="panel-title">{{artical.title}}</h3>
						</div>
						<div class="panel-body">
							{{artical.content}}
						</div>
					</div>
				</li>
			  </ul>
			</div>
		</div>
	</div> 
</div>
</body>

<!-- JavaScript 放置在文档最后面可以使页面加载速度更快 -->
<!-- 可选: 包含 jQuery 库 -->
<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
<!-- 可选: 合并了 Bootstrap JavaScript 插件 -->
<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdn.staticfile.org/vue/2.2.2/vue.min.js"></script>
<script>

$(document).ready(function(){
	$.ajax({
		type: "POST",
		url: "/service/article_query_list.php",
		data: {	start:"0",limit:"100"},
		dataType: "json",
		timeout : 10000,
		success: function(datas){
			console.log(datas);
			new Vue({
				el:'#artical_list',
				data:{data:datas}, 
			});
			
			$(".panel").on({
				mouseover : function(){
					$(this).css('background-color','red');
				},
				mouseout : function(){
					$(this).css('background-color','#ddd');
				} 
			}) ;
		} ,
		error: function(XMLHttpRequest,textStatus){  
			if(textStatus=='timeout'){//超时操作
				alert("对不起，保存超时，请重新保存。");
				return false;
			}else{//其他错误
				console.log(textStatus);
				console.log(XMLHttpRequest)
				alert("操作失败！");
				return false;
			}
		} 
	}); 

});

function goPage(_this){ 
	id = $(_this).find(".artical_id:first").text();
	window.open(encodeURI("http://localhost/pages/article_display.php?id="+$.trim(id)));
	//window.location.href="http://localhost/pages/article_display.php?id="+$.trim(id);
}
</script>
</html>