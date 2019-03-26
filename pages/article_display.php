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

<div class="container">

		<div id="artical" class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">{{data.title}}</h3>
			</div>
			<div class="panel-body">
				<div id="result" style="border:1px solid #ddd;height:auto;width:80%;">
				{{data.content}}
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
<script src="\service\showdown-master\dist\showdown.min.js"></script>
<script src="https://cdn.staticfile.org/vue/2.2.2/vue.min.js"></script>
<script>
$(document).ready(function(){
	//获取 上一个搜索页面传来的参数  
    var searchUrl = window.location.href;
    var searchData = searchUrl.split("="); //截取 url中的“=”,获得“=”后面的参数  
    var searchID = decodeURI(searchData[1]); //decodeURI解码  
    
	
	$.ajax({
		type: "POST",
		url: "/service/article_query_by_id.php",
		data: {	id:searchID},
		dataType: "json",
		timeout : 10000,
		success: function(datas){
			 
			new Vue({
				el:'#artical',
				data:{data:datas}, 
			});
			 
		} ,
		error: function(XMLHttpRequest,textStatus){  
			if(textStatus=='timeout'){//超时操作
				alert("对不起，读取超时，请联系管理员。");
				return false;
			}else{//其他错误
				console.log(textStatus);
				console.log(XMLHttpRequest)
				alert("读取失败！");
				return false;
			}
		} 
	}); 

});
function convert(){
	var text = document.getElementById("result").innerHTML;
	console.log(text);
    var converter = new showdown.Converter();
    var html = converter.makeHtml(text);
    document.getElementById("result").innerHTML = html;
}
convert();
</script>

</html>