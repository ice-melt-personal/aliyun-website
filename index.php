<?php
session_start();

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

<!--
<link rel="stylesheet" href="assets/css/style02.css" />
-->
<link rel="shortcut icon" href="/assets/images/favicon.ico" /> 

<style>
body {
	padding-top: 50px; 
}
.footer {
	padding-top: 10px;
    background-color: #222;
	width: 100%;
}
.footer a:link{text-decoration:none; color:#9d9d9d;}
.footer a:visited{text-decoration:none;color:#9d9d9d; }
.footer a:active{text-decoration:none;color:#9d9d9d;}
.footer a:hover{text-decoration:none;color:#9d9d9d;}
</style>
</head>

<body bgcolor="#F5F5F5">
<div class="container header">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<nav class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> 
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					
						<?php
							if(isset($_COOKIE["im_username"])){
						?>
								<a class="navbar-brand"  rel="nofollow">
									<strong>夕曦 | ice-melt</strong>
								</a>
						<?php						
							}else{
						?>
								<a class="navbar-brand" data-toggle="modal" 
									data-target="#loginModal" class="login" rel="nofollow">
									<img id="xiangleftright" width="21px" height="21px" 
									style="float:left;" src="assets/images/icon/candan.png">
									<strong> &nbsp;Hi,站长登录</strong>	
								</a>
						<?php		
							}
						?>
						
					</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li  class="active">
							<a href="javascript:void(0)" onclick="iFrame('home.php')"><span class="glyphicon glyphicon-home"></span> 主页</a>
						</li>
						<?php
							if(isset($_COOKIE["im_username"])){
						?>	
						<li>
							<a href="javascript:void(0)" onclick="iFrame('artical_write.php')">写博客</a>
						</li>
						<?php
							}
						?>
						<li>
							<a href="javascript:void(0)" onclick="iFrame('artical_list.php')">博客</a>
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
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">关于</a>
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
					<!--
					<div>
						<img id="xiangleftright" width="21px" height="21px" style="float:left;" src="assets/images/icon/candan.png">
					</div>
					-->
				</div> 
			</nav>
		</div>
	</div>
</div> 


<iframe src='pages/home.php' width='100%' height="558px" frameborder='0' id="iFrame-content" ></iframe>	
 	
	
<div class="container footer"> 
	<!--
	<div class="row clearfix">
		<div class="col-md-12 column">
			<p class="text-center">
				<a href="#">自强</a> | 
				<a href="#">笃实</a> | 
				<a href="#">求源</a> | 
				<a href="#">创新</a>
			</p>
		</div>
	</div>-->
	<div class="row clearfix">
		<div class="col-md-12 column">
			<p class="text-center">
			<a href="#">Copyright &copy; <?php echo date("Y")?> 夕兮曦兮的个人网站-</a>
			<a href="http://www.miitbeian.gov.cn/" target="_blank"> 陕ICP备18016987号</a>
			</p>
		</div>
	</div>	
</div>


<!--登录注册模态框-->
<div class="modal fade user-select" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="/service/logincheck.php" method="post">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="loginModalLabel">登录</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="loginModalUserNmae">用户名</label>
            <input name="username" type="text" class="form-control" id="loginModalUserNmae" placeholder="请输入用户名" autofocus maxlength="15" autocomplete="off" required>
          </div>
          <div class="form-group">
            <label for="loginModalUserPwd">密码</label>
            <input name="password" type="password" class="form-control" id="loginModalUserPwd" placeholder="请输入密码" maxlength="18" autocomplete="off" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
          <input name="submit" type="submit" class="btn btn-primary" value="登录"/>
        </div>
      </form>
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

	$(document).ready(function(){
	    $(".dropdown").on({
			mouseover : function(){
				$(".dropdown-menu").show();
			},
			mouseout : function(){
				$(".dropdown-menu").hide();
			} 
		}) ;
	});

//$(document).ready(function(){ 
//	var a = document.body.clientHeight;
//	var height = $('body').clientHeight-50;
//	console.log(a);
//	$('#iFrame-content').css('height',height+"px")
//});
// onLoad="iFrameHeight()"
	function iFrameHeight() {
		console.log('=======')
		var ifm= document.getElementById("iFrame-content");  
		var subWeb = document.frames ? document.frames["iFrame-content"].document : ifm.contentDocument;
		var type = document.frames?0:1;
		console.log(type)
		if(ifm != null && subWeb != null) {  
			//ifm.height = subWeb.body.scrollHeight; 
			ifm.height = $('body').scrollHeight;
		}
	}
	function iFrame(url){
		
		$('#iFrame-content').attr("src", "pages/"+url)
	}
</script>
</html>