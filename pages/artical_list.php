<?php
session_start();
include("../service/query_article.php");
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
			<?php
				$num=mysqli_num_rows($result);

				for($i=0;$i<$num;$i++)
				{
					$row=mysqli_fetch_assoc($result); 
					//print_r($row);
					echo '<div class="panel panel-primary" onclick="goPage('.$row['id'].')">';
					echo '<div class="panel-heading">';
					echo '<h3 class="panel-title">'.$row['title'].'</h3>';
					echo '</div>';
					echo '<div class="panel-body">';
					echo $row['content'];
					echo '</div>';
					echo '</div>';
				}
			?>
		</div>
	</div> 
</div>
</body>

<!-- JavaScript 放置在文档最后面可以使页面加载速度更快 -->
<!-- 可选: 包含 jQuery 库 -->
<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
<!-- 可选: 合并了 Bootstrap JavaScript 插件 -->
<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>

$(document).ready(function(){
	$(".panel").on({
		mouseover : function(){
			$(this).css('background-color','red');
		},
		mouseout : function(){
			$(this).css('background-color','#ddd');
		} 
	}) ;
});

function goPage(id){
	//window.open("http://localhost/pages/artical_display.php?id="+id);
	window.location.href="http://localhost/pages/artical_display.php?id="+id;
}
</script>
</html>