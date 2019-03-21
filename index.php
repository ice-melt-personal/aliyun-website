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

<!---->
<link rel="stylesheet" href="/assets/style.css" />
<link rel="shortcut icon" href="/assets/favicon.ico" /> 

</head>

<body bgcolor="#F5F5F5">
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<nav class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> 
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button> <a class="navbar-brand" href="javascript:void(0)" onclick="iFrame('links.php')"><strong>夕兮曦兮 | ice-melt</strong></a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active">
							 <a href="javascript:void(0)" onclick="iFrame('home.php')"><span class="glyphicon glyphicon-home"></span> 主页</a>
						</li>
						<li>
							 <a href="javascript:void(0)" onclick="iFrame('essays.php')">随笔</a>
						</li>
						<li>
							 <a href="javascript:void(0)" onclick="iFrame('tutorials.php')">教程</a>
						</li>
						<li>
							 <a href="javascript:void(0)" onclick="iFrame('projects.php')">项目</a>
						</li>
						<li>
							 <a href="javascript:void(0)" onclick="iFrame('comment.php')">留言</a>
						</li>
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">关于<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									 <a href="javascript:void(0)" onclick="iFrame('website_description.php')">网站说明</a>
								</li>
								<li>
									 <a href="javascript:void(0)" onclick="iFrame('website_planning.php')">短期规划</a>
								</li>
								<li>
									 <a href="javascript:void(0)" onclick="iFrame('website_log.php')">网站日志</a>
								</li>
								<li class="divider">
								</li>
								<li>
									 <a href="javascript:void(0)" onclick="iFrame('about_me.php')">关于我</a>
								</li>
							</ul>
						</li>
					</ul>
					<form class="navbar-form navbar-right" role="search">
						<div class="form-group">
							<input class="form-control" type="text" placeholder="百度一下..."/>
						</div> 
						<button class="btn btn-default"type="search" >
						<span class="glyphicon glyphicon-search"></span> 搜索</button> 
					</form>
				</div> 
			</nav>
		</div>
	</div>
</div> 

<iframe src='pages/home.php' width='100%' height='100%' frameborder='0' id="iFrame-content" onLoad="iFrameHeight()"></iframe>	
	
	
<div class="container footer"> 
	<div class="row">
		<div class="col-md-12 column">
			<p class="text-center">
				<a href="#">自强</a> | 
				<a href="#">笃实</a> | 
				<a href="#">求源</a> | 
				<a href="#">创新</a>
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 column">
			<p class="text-center">
			<a href="#">Copyright &copy; <?php echo date("Y")?> 夕兮曦兮的个人网站-</a>
			<a href="http://www.miitbeian.gov.cn/" target="_blank"> 陕ICP备18016987号</a>
			</p>
		</div>
	</div>	
</div>

</body>

<!-- JavaScript 放置在文档最后面可以使页面加载速度更快 -->
<!-- 可选: 包含 jQuery 库 -->
<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
<!-- 可选: 合并了 Bootstrap JavaScript 插件 -->
<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script type="text/JavaScript">
		function iFrameHeight() {
			var ifm= document.getElementById("iFrame-content");  
			var subWeb = document.frames ? document.frames["iFrame-content"].document : ifm.contentDocument;  
			if(ifm != null && subWeb != null) {  
				ifm.height = subWeb.body.scrollHeight; 
			}
		}
		function iFrame(url){
			
			$('#iFrame-content').attr("src", "pages/"+url)
		}
	</script>
</html>