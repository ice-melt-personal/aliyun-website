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
    <!--设置id为oriContent，如果想实现实时更新，使用onkeyup方法-->

    <textarea id="oriContent" style="height:400px;width:600px;" onkeyup="convert()"></textarea>

<!---设置展示的div添加id-->
    <div id="result"></div>
<!--
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<div class="text-center" hight="100px">
				<h1>正在开发随笔相关功能。。。<h1>
			</div>
		</div>
	</div>
</div>-->
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

</script>
</html>