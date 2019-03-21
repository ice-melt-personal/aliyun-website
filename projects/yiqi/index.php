<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>一奇个人网站</title>
		<link href="style/reset.css" rel="stylesheet" />
	  	<link href="style/main.css" rel="stylesheet" />
		<link href="style/yiqi.css" rel="stylesheet" />
</head>
<script type="text/JavaScript" src="js/yiqi.js"></script>
<body bgcolor="#F5F5F5">
	<div id="box">
				<div class="bottom">
			<div id="left">
				<div class="touxiang" align="center">
					<img src="http://q2.qlogo.cn/headimg_dl?dst_uin=330729121&spec=5"  id="touxiang">
					<p>欢迎你admin</p>
				</div>
				<div align="left" class="cebianlan">
					<ul>
						<li  onClick="iFrame('daohang.php')"><img src="images/icon/zy.png"><a href="#">首页</a></li>
						<li><img src="images/icon/love2.png"><a href="#">表白</a></li>
						<li><img src="images/icon/chat.png"><a href="#">匿名聊天</a></li>
						<li><img src="images/icon/yuanfen.png"><a href="#">查看对方喜欢谁</a></li>
						<li><img src="images/icon/ip1.png"><a href="#">ip定位</a></li>
						<li><img src="images/icon/book.png"><a href="#">一奇博客</a></li>
						<li  onClick="iFrame('jieshao.php')"><img src="images/icon/touxiang.png"><a href="#">个人介绍</a></li>
					</ul>
				</div>
			</div>
			<div id="right">
					<iframe src='daohang.php' width='100%' height='100%' frameborder='0' name="_blank" id="iFrame-content" ></iframe>
					
			</div>
		</div>
		<div class="head">
			<h1>一奇个人网站</h1>
			<div class="openclose" id="openclose">
				<img id="xiangleftright" src="images/icon/candan.png">
			</div>
			<div class="head-right" align="center">
				<p>登录</p>
				<img src="images/icon/xia.png">
			</div>
		</div>

		</div>
		
</body>

	<script type="text/JavaScript" src="js/main.js"></script>
	<script type="text/JavaScript">
		
				function iFrame(url){
						var iframe = byId("iFrame-content");
							iframe.src=url;
							sczhezhao();
					}
	</script>
</html>