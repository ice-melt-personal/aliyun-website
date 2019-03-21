<!doctype html>
<html>
<head>
<meta charset="utf-8">
	
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>一奇个人网站</title>
		<link href="style/reset.css" rel="stylesheet" />
	  	<link href="style/main.css" rel="stylesheet" />
		
</head>
	<script type="text/JavaScript" src="js/yiqi.js"></script>
<body>
	<div id="jieshao">
			<div class="jieshao-head">
				<div class="jieshao-head-content">
					<h1>个人介绍</h1>
					<div class="jieshao-pailie"><p>名称:一奇</p><p>性别:男</p><p>年龄:18岁</p><p>专业:软件工程</p></div>
					<div class="jieshao-pailie"><p>qq:</p><p>邮箱:@qq.com</p></div>
					<div class="jieshao-pailie"><p>性格开朗，为人诚恳，乐观向上，兴趣广泛，拥有良好的学习能力和适应能力性格开朗</p></div>
				</div>
			</div>
			<div class="jieshao-skill">
				<div class="jieshao-skill-content">
					<h1>掌握技能</h1>
					<div class="jieshao-skill-pailie" align="center">
						<div class="jieshao-skill-pailie-lie">
							<img src="images/dw.png">
							<h2>Dreamweaver</h2>
							<p>熟练使用dw编辑器对网站进行代码编写</p>
						</div>
						<div class="jieshao-skill-pailie-lie">
							<img src="images/ps.png">
							<h2>Photoshop</h2>
							<p>熟练使用PS进行网站设计，抠图,切片,合成,等基本功能</p>
						</div>
						<div class="jieshao-skill-pailie-lie">
							<img src="images/inventor1.png">
							<h2>inventor</h2>
							<p>熟练inventor基本功能,对基本图纸进行3D建模,熟悉基本动画,渲染,能够独立进行设计建模</p>
						</div>
					</div>
					<div class="jieshao-skill-pailie" align="center">
						<div class="jieshao-skill-pailie-lie">
							<img src="images/fusion360.jpg">
							<h2>funsion360</h2>
							<p>熟悉基本工具使用,产品渲染,自由造型建模</p>
						</div>
						<div class="jieshao-skill-pailie-lie">
							<img src="images/js.png">
							<h2>Html</h2>
							<p>熟练使用css,JavaScript进行前端基础设计,使用css进行基本布局</p>
						</div>
						<div class="jieshao-skill-pailie-lie">
							<img src="images/wz.png">
							<h2>PHP</h2>
							<p>熟练使用php对mysql数据库的增删查改,以及使用ajax与前端进行交互和基本的安全防护</p>
						</div>
					</div>
				</div>
			</div>
			<div id="chengping">
					<div class="tab-wrap">
						<ul class="img-wrap" id="img-wrap">
							<li class="img-item" style="display: block;"><div class="img-item-sm"></div><img src="images/lunbo2.jpg" width="100%" height="30%"></li>
							<li class="img-item"><img src="images/lunbo3.jpg" width="100%" height="30%"></li>
							<li class="img-item"><img src="images/lunbo3.jpg" width="100%" height="30%"></li>
						</ul>
					</div>
					<div class="btn-wrap">
						<ul class="btn-list" id="btn-list">
							<li class="btn-item btn-yanxia"></li>
							<li class="btn-item"></li>
							<li class="btn-item"></li>
							<li class="btn-item"></li>
						</ul>
					</div>
			</div>
	</div>
</body>
		<script type="text/JavaScript">
				
						
				var pics = byId("img-wrap").getElementsByClassName("img-item"),
					len = pics.length,
					index = 0,
					timer = null;
				var hqimgbtn = byId("btn-list").getElementsByClassName("btn-item"),
					
					timer = setInterval(function(){
							index++;
							if(index>=len){
								index=0;
							}
						changeImg();
						imgbtn();
					},3000);
			/*点击圆点切换图片*/
					for(var d=0;d<len;d++){
						hqimgbtn[d].id=d;
						hqimgbtn[d].onclick=function(){
						index=this.id;
						changeImg()
						imgbtn()
								}
					}
			
			/*改变图片*/
					function changeImg(){
						for(var i=0;i<len;i++){
							pics[i].style.display="none";
						}
						pics[index].style.display="block";
					}
			/*改变圆点*/
					function imgbtn(){						
							for(var a=0;a<len;a++){
								hqimgbtn[a].classList.remove("btn-yanxia");
							}
							hqimgbtn[index].classList.add("btn-yanxia");
					}
			
			
					  
					  </script>
</html>