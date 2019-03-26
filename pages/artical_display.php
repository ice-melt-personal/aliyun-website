<?php
session_start();
include("../service/query_article_by_id.php");
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

<div class="container">

	<?php
		$num=mysqli_num_rows($result);
		if($num==0){
	?> 	
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title"></h3>
		</div>
		<div class="panel-body">
			<div id="result" style="border:1px solid #ddd;height:400px;width:600px;"></div>
		</div>;
	</div>;
	<?php
		}else{
			$row=mysqli_fetch_assoc($result);
	?> 
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title"><?php echo $row['title'];?></h3>
			</div>
			<div class="panel-body">
				<div id="result" style="border:1px solid #ddd;height:auto;width:80%;">
				<?php echo $row['content'];?>
				</div>
			</div>
		</div>
		
	<?php	
		} 
	?> 	
</div>
</body>

<!-- JavaScript 放置在文档最后面可以使页面加载速度更快 -->
<!-- 可选: 包含 jQuery 库 -->
<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
<!-- 可选: 合并了 Bootstrap JavaScript 插件 -->
<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="\service\showdown-master\dist\showdown.min.js"></script>
<script>

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