<!DOCTYPE html>
<head>

<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">  
<meta http-equiv="X-UA-Compatible" content="IE=edge" />  
<!-- 包含头部信息用于适应不同设备 -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- 包含 bootstrap 样式表 -->
<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  

<style>
	body{
		display:block;
	}
</style>
</head>
<?php
$href1 = "http://ice-melt.top/blog/";
$href2 = "http://ice-melt.top/projects/yiqingxuan";
$href3 = "http://ice-melt.top/projects/yi";
$href4 = "http://ice-melt.top/projects/tmlog";
$href5 = "http://ice-melt.github.io";

//$href1 = "http://localhost/blog/";
//$href2 = "http://localhost/projects/yiqingxuan";
//$href3 = "http://localhost/projects/yi";
//$href4 = "http://localhost/projects/tmlog";
//$href5 = "http://ice-melt.github.io";

?>
<body>  
<div class="table-responsive">
	<h1>网站建设中。。。<h1>
  <table class="table table-striped table-hover "> 
    <tbody> 
		<tr>
			<td>WordPress搭建博客</td>
			<td><a href="<?php echo $href1; ?>">跳转</a></td></tr>
		<tr>
			<td>参考1</td>
			<td><a href="<?php echo $href2; ?>">跳转</a></td></tr>
		<tr>
			<td>参考2</td>
			<td><a href="<?php echo $href3; ?>">跳转</a></td></tr>
		<tr>
			<td>参考3</td>
			<td><a href="<?php echo $href4; ?>">跳转</a></td></tr>
		<tr>
			<td>GitHub+Jetty</td>
			<td><a href="<?php echo $href5; ?>">跳转</a></td></tr>
    </tbody>
  </table>
</div>

</body>
<!-- JavaScript 放置在文档最后面可以使页面加载速度更快 -->
<!-- 可选: 包含 jQuery 库 -->
<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
<!-- 可选: 合并了 Bootstrap JavaScript 插件 -->
<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
$(function(){
		$("#myCarousel").ready(function(){
			$('#myCarousel').carousel({interval: 2000})
			$("#myCarousel").carousel('cycle');
		});
		

        // 初始化轮播
        $(".start-slide").click(function(){
            $("#myCarousel").carousel('cycle');
        });
        // 停止轮播
        $(".pause-slide").click(function(){
            $("#myCarousel").carousel('pause');
        });
        // 循环轮播到上一个项目
        $(".prev-slide").click(function(){
            $("#myCarousel").carousel('prev');
        });
        // 循环轮播到下一个项目
        $(".next-slide").click(function(){
            $("#myCarousel").carousel('next');
        });
        // 循环轮播到某个特定的帧 
        $(".slide-one").click(function(){
            $("#myCarousel").carousel(0);
        });
        $(".slide-two").click(function(){
            $("#myCarousel").carousel(1);
        });
        $(".slide-three").click(function(){
            $("#myCarousel").carousel(2);
        });
    });
</script>
</html>