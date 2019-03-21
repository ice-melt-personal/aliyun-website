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
<style>
@charset "utf-8";

body,ul,li,p,h1,h2,h3,h4,h5,h6,form,fieldset,table,td,img,div,dl,dt,dd,iput{margin:0;padding:0;}

body{font-size:12px;}

img{border:none;}

li{list-style:none;}

input,select,textarea{outline:none;}

textarea{resize:none;}

a{text-decoration:none;}
a:link,a:visited{color:#444;text-decoration:none;}
a:hover{color:#ff0000;}
/*�帡��*/

.clearfix:after{content:"";display:block;clear:both;}

.clearfix{zoom:1;}

input[type="submit"],
 input[type="reset"],
 input[type="button"],
button{
 -webkit-appearance: none;
	
 }
 @keyframes close{
	from{
		width:240px;
	}
	to{
		width:0px;
	}
}
@keyframes contentleft{
	from{margin-left: 240px;}
	to{margin-left:0px;}
}



#box{
	
	width: 100%;
	position: absolute;
}

.bottom{
	width: 100%;
	height: 900px;
	background-color: #f5f5f5;
	margin-top: 80px;
}

@media screen and (max-width: 600px){
  /* 手机端CSS代码 */

	.bottom{
		width: 100%;
		height: 900px;
		background-color: #f5f5f5;
		margin-top: 60px;
	}
}
/*侧边栏*/
#left{
	z-index: 1;
	position: fixed;
	width: 250px;
	top: 80px;
	left: -250px;
	bottom: 0;
	background-color: #414E63;
	transition: all 1s;
	/*animation:close 2s forwards;*/
	
}
@media screen and (min-width: 600px){
  /* 电脑端CSS代码 */
	
	
}


@media screen and (max-width: 600px){
  /* 手机端CSS代码 */

	#left{
		position: fixed;
		width: 250px;
		top: 60px;
		left: -250px;
		bottom: 0;
		background-color: #414E63;
		transition: all 1s;
		/*animation:close 2s forwards;*/

	}
}
.touxiang{
	width: 100%;
	height: 200px;
	float: left;
}
.touxiang p{
	color: rgba(204,204,204,1.00);
	font-size: 13px;
	padding-top: 10px;
}
.touxiang img{
	width: 120px;
	height: 120px;
	border-radius: 100%;
	margin-top: 30px;
	transition: all 2s;
	right:0px;
	border: 5px solid rgba(255,255,255,0.3);
}
#left ul{
	width: 100%;
}
#left ul li{
	padding-left: 50px;
	width: 80%;
	display: inline-block;
	height: 50px;
	line-height: 50px;
	padding: 20px auto;
	cursor: pointer;

}
#left ul a{
	color:rgba(255,255,255,0.6);
	font-size: 15px;
	margin: 0 auto;
}
#left ul a:hover{
	color: rgba(232,232,232,1.00);
}
.cebianlan img{
	width: 20px;
	height: 20px;
	vertical-align:sub;
}
#left ul li:hover{
	background-color: rgba(177,177,177,0.3);
	
}
/*内容*/
#right{
	height:900px;
	
	/*animation:contentleft 2s forwards;*/
	transition: all 1s;
}
#jieshao{
	width: 100%;
}
.jieshao-head{
	width: 100%;
	overflow:hidden;
	background: url(../images/bg-1.png) fixed; 
}
.jieshao-head-content{
	margin: 0 auto;
    width: 60%;
    padding: 0 1.25em;
    box-sizing: content-box;

	
}
@media screen and (max-width: 1579px){
	.jieshao-head-content{
	margin: 0 auto;
    width: 100%;
    padding: 0 1.25em;
    box-sizing: content-box;

	
}
	
}
@media screen and (max-width: 600px){
	.jieshao-head-content{
		margin: 0 auto;
		width:90%;
		padding: 0 1.25em;
		box-sizing: content-box;
		
		min-height: 470px;
	}
}
.jieshao-head-content h1{
	padding-top: 5vh;
	font-weight: bold;
}
.jieshao-pailie{
	width: 20%;
	float: left;
	margin: 0 30px;
	font-size: 15px;
	line-height: 50px;
}
@media screen and (max-width: 600px){
		.jieshao-pailie{
			width: 90%;
			margin: 0 10px;
		}
}
.jieshao-pailie p{
	color: rgba(86,86,86,1.00);
}
.jieshao-skill{
	width: 100%;
	background-color: #f0ad4e;

	overflow: hidden;
}
.jieshao-skill-content{
	width: 60%;
	min-height: 400px;
	margin: 0px auto;
	
}
@media screen and (max-width: 1579px){
	.jieshao-skill-content{
		width: 100%;
		min-height: 400px;
		margin: 0px auto;
	
	}
	
}

.jieshao-skill-content h1{
		font-weight: bold;
		padding-top: 1vh;
		}
.jieshao-skill-pailie{
	width: 100%;
	overflow: hidden;
	margin:20px auto;
}
.jieshao-skill-pailie-lie{
	width: 28%;
	float: left;
	min-height: 200px;
	margin: 25px;
	background-color:rgba(248,248,248,0.6);
}
.jieshao-skill-pailie-lie img{
	margin-top:20px;
	width: 92px;
	height: 92px;
}
.jieshao-skill-pailie-lie p{
	margin:10px;
	color: rgba(92,92,92,1.00);
}
@media screen and (max-width: 600px){
		.jieshao-skill-content{
			width: 100%;
			min-height: 400px;
			margin: 20px auto;
		}
		.jieshao-skill-content h1{
			margin-left: 20px;
		}
		.jieshao-skill-pailie{
			width: 100%;
			margin:10px auto;
			position: relative;
			background-color:rgba(248,248,248,0.6);
		}
		.jieshao-skill-pailie-lie{
			width:33%;
			min-height: 200px;
			display: inline;
			margin:20px auto;
			background:none;
			
		}
}
/*成品展示*/
#chengping{
	position: relative;
	width:100%;
	background-color: #f5f5f5;
	min-height: 310px;
}

.img-item{
	position: absolute;
	width: 100%;
	display: none;
	transform: all 1s;
}
		/*成品展示轮播按钮*/
.btn-wrap{
	height: 50px;
	position: absolute;
	right: 5px;
}
@media screen and (min-width: 1200px){
	.btn-wrap{
		height: 50px;
		width: 250px;
		position: absolute;
		right: 5px;
	
	}
}
.btn-item{
	width: 8px;
	height: 8px;
	display: inline-block;
	border: 2px solid rgba(0,0,0,0.4);
	margin-top: 15PX;
	border-radius: 50%;
	cursor: pointer;
}

.btn-item:hover{
	background-color: rgba(37,37,37,0.9);
}

.btn-yanxia{
	background-color: rgba(37,37,37,0.9);
}

.img-item-sm{
	position: absolute;
	top:0;
	background-color:rgba(0,0,0,0.5);
}
.img-item-sm h1{
	line-height: 70px;
	margin:0 10px;
	color: rgba(245,66,69,1.00);
	
}
/*导航页面*/
.daohang-content{
	width: 80%;
	margin: 0 auto;
	margin-top: 50px;
	overflow: hidden;
} 
@media screen and (max-width: 1062px){
	.daohang-content{
		width: 100%;
		margin-top: 20px;
	}
}

	/*百度搜索*/
.baidu{
	width: 97%;
	background-color:#fff;
	padding-bottom: 40px;
	 border: 1px solid rgba(123,123,123,0.3);
	border-radius: 5px;
}
.baidu h3{
	margin-top: 30px;
	color: rgba(114,114,114,1.00);
	cursor: pointer;
}
.baidu img{
	width: 230px;
	height: 130px;
	margin-bottom: 10px;
	display: block;
}
.baidu-input-1{
	width: 537px;
	height: 40px;
	box-sizing: border-box;
	margin-right: -7px;
	border-radius: 0px;
}
.baidu-input-1:focus{
	border: 1px solid rgba(32,118,235,0.8);
}
.baidu-input-2{
	height: 41px;
	background-color: #38f;
	border: none;
	color:#fff;
	font-size: 15px;
	cursor: pointer;
	border-radius: 0px;
}
@media screen and (max-width: 757px){

}
@media screen and (max-width: 651px){
	.baidu-input-1{
		width: 500px;
		height: 30px;
	}
	.baidu-input-2{
		height: 30px;
	}
	.baidu img{
		width: 200px;
	}

}

@media screen and (max-width: 590px){
	.baidu-input-1{
		width: 400px;
	}
}
@media screen and (max-width: 511px){
	.baidu-input-1{
		width: 282px;
		height: 40px;
		float: left;
		margin-left: 22px;
	}
	.baidu-input-2{
		height: 40px;
		
	}
	.daohang-content{
		width: 100%;
	}
}
@media screen and (max-width:401px){
	.baidu-input-1{
		width: 250px;

	}

}
@media screen and (max-width:336px){
	.baidu-input-1{
		width: 200px;

	}

}
.daohang-sousuo{
	width: 50px;
	height: 40px;
	display: inline-block;
	background-color: aqua;
	
}


/*导航链接*/
.daohang-buttom{
	width:97%;
	background-color:#fff;
	margin-top: 20px;
	border: 1px solid rgba(123,123,123,0.3);
	border-radius: 5px;
	overflow: hidden;
	position: relative;
	transition: all 0.5s;
	
}
.daohang-buttom img{
	width: 40px;
	height: 30px;
	cursor: pointer;
}
.daohang-buttom h1{
	color: rgba(58,58,58,1.00);
	padding-top: 20px;
}
.daohang-lianjie{
	width: 250px;
	margin: 15px;
	height: 130px;
	float: left;
	border-radius: 5px;
	border: 1px solid rgba(151,151,151,0.5);
	box-shadow: 1px 2px 3px #f2f6f8;
	margin-bottom: 30px;
	transition: all .3s;
	cursor: pointer;
	overflow: hidden;
}
.daohang-lianjie:hover{
	  transform: translateY(-5px);
}
/*导航logo*/
.daohang-logo{
	overflow: hidden;
	white-space: nowrap;
	text-overflow: ellipsis;
}
.daohang-logo img{
	width: 21%;
	height: 21%;
	border-radius: 50%;
	margin-top: 10px;
	margin-left: 10px;
	margin-bottom: 10px;
	margin-right: 5px;
	vertical-align:middle;
}
.daohang-logo span{
	color:#4271EF;
	font-size: 20px;
	font-weight: bold;
	

}
.daohang-shuoming p{
	color: #878484;
	margin-left: 10px;
	margin-right: 10px;
}
@media screen and (max-width:1495px){
	.content{
		width: 850px;
		margin: 0 auto;
	}
}
@media screen and (max-width:1184px){
	.content{
		width: 600px;
		margin: 0 auto;
	}
}
@media screen and (max-width:740px){
	.daohang-lianjie{
		width: 200px;
	}
	.content{
		width: 480px;
		margin: 0 auto;
	}
}
@media screen and (max-width:473px){
	.daohang-lianjie{
		width: 180px;
	}
	.daohang-logo span{
		font-size: 15px;
	}
	.content{
		width: 430px;
		margin: 0 auto;
	}
}
@media screen and (max-width:430px){
	.daohang-lianjie{
		width: 150px;
		margin: 10px;
	}
	.content{
		width: 350px;
		margin: 0 auto;
	}
}
@media screen and (max-width:347px){
	.daohang-lianjie{
		width: 80%;
		min-width: 100px;
	}
	.content{
		width: 80%;
		margin: 0 auto;
	}
}


/*头部*/

.head{
	width: 100%;
	height: 80px;
	background-color: #fff;
	box-shadow: 1px 1px 5px #333333;
	position: fixed;
	top: 0;
	z-index: 1;
}

.head h1{
	display: inline-block;
	margin-left: 20px;
	line-height: 80px;
	color: #434343;
}
.openclose{
	display: inline-block;
}
.openclose img{
	width: 30px;
	height: 30px;
	cursor: pointer;
	vertical-align: middle;
	margin-bottom: 12px;
	margin-left: 30px;
	background-image: url(../images/icon/right.png);
}
.head-right {
	float: right;
	line-height: 80px;
	color: #606060;
	font-size: 20px;
	width: 110px;
}
.head-right p{
	display: inline-block;
}
.head-right img{
	width: 30px;
	height: 30px;
	vertical-align:sub;
	cursor: pointer;
}
@media screen and (max-width: 600px){
		.head{
		width: 100%;
		height: 60px;
		background-color: #fff;
		box-shadow: 1px 1px 5px #333333;
		position: fixed;
		top: 0;
	}
		.head h1{
			display: inline-block;
			margin-left: 10px;
			line-height: 60px;
			color: #434343;
		}
		.openclose img{
			width: 30px;
			height: 30px;
			cursor: pointer;
			vertical-align: middle;
			margin-bottom: 12px;
			margin-left: 10px;
		}
	.head-right {
		float: right;
		display: inherit;
		line-height: 60px;
		color: #606060;
		font-size: 20px;
		width: 80px;

	}
}
/*底部*/
.buttom{
	font-size: 13px;
	margin-top: 30px;
	width: 97%;
	height: 50px;
	background-color: #fff;
	line-height: 50px;
	color: #676767;
	cursor: pointer;
}
.buttom span:hover{
	color: #F54D50;
}

</style>
</head>

<body bgcolor="#F5F5F5">

<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<div class="content">
					<div class="daohang-lianjie" align="left" onClick="Newopen('http://blog.csdn.net/')">
						<div class="daohang-logo">
							<img src="/assets/links/daohang/csdn.ico">
							<span>CSDN</span>				
						</div>
						<div class="daohang-shuoming">
							<p>中国最大的IT社区和服务平台</p>
						</div>
					</div>
					<div class="daohang-lianjie" align="left" onClick="Newopen('https://juejin.im/')">
						<div class="daohang-logo">
							<img src="/assets/links/daohang/gold-favicon.png">
							<span>掘金</span>
						</div>
						<div class="daohang-shuoming">
							<p>只有高手分享的中文技术社区</p>
						</div>
					</div>
					<div class="daohang-lianjie" align="left" onClick="Newopen('https://github.com/')">
						<div class="daohang-logo">
							<img src="/assets/links/daohang/github.ico">
							<span>github</span>
						</div>
						<div class="daohang-shuoming">
							<p>面向开源及私有软件项目的git托管平台</p>
						</div>
					</div>
					<div class="daohang-lianjie" align="left" onClick="Newopen('http://stackoverflow.com/')">
						<div class="daohang-logo">
							<img src="/assets/links/daohang/stackoverflow.ico">
							<span>stackoverflow</span>
						</div>
						<div class="daohang-shuoming">
							<p>国外编程相关的IT技术问答网站</p>
						</div>
					</div>
					<div class="daohang-lianjie" align="left" onClick="Newopen('https://segmentfault.com/')">
						<div class="daohang-logo">
							<img src="/assets/links/daohang/segmentfault.ico">
							<span>segmentfault</span>
						</div>
						<div class="daohang-shuoming">
							<p>一个专注于解决编程问题，提高开发技能的社区</p>
						</div>
					</div>
					<div class="daohang-lianjie" align="left" onClick="Newopen('https://www.zhihu.com/')">
						<div class="daohang-logo">
							<img src="/assets/links/daohang/zhihu.ico">
							<span>知乎</span>
						</div>
						<div class="daohang-shuoming">
							<p>与世界分享你的知识、经验和见解与世界分享你的知识、经验和见解</p>
						</div>
					</div>
					<div class="daohang-lianjie" align="left" onClick="Newopen('https://www.cnblogs.com/')">
						<div class="daohang-logo">
							<img src="/assets/links/daohang/cnblogs.ico">
							<span>博客园</span>
						</div>
						<div class="daohang-shuoming">
							<p>博客模式的技术分享社区</p>
						</div>
					</div>
					<div class="daohang-lianjie" align="left" onClick="Newopen('https://www.oschina.net/')">
						<div class="daohang-logo">
							<img src="/assets/links/daohang/oschina.ico">
							<span>开源中国</span>
						</div>
						<div class="daohang-shuoming">
							<p>目前中国最大的开源技术社区</p>
						</div>
					</div>
					<div class="daohang-lianjie" align="left" onClick="Newopen('https://www.v2ex.com/')">
						<div class="daohang-logo">
							<img src="/assets/links/daohang/v2ex.png">
							<span>V2EX</span>
						</div>
						<div class="daohang-shuoming">
							<p>一个关于分享和探索的地方</p>
						</div>
					</div>
					<div class="daohang-lianjie" align="left" onClick="Newopen('https://coding.net/')">
						<div class="daohang-logo">
							<img src="/assets/links/daohang/coding.png">
							<span>Coding</span>
						</div>
						<div class="daohang-shuoming">
							<p>中国最大的git平台。</p>
						</div>
					</div>	
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
<script>
var daohanght = 0;
function daohangss(id){
	var buttom = byId("daohang-buttom-" + id);
	var heighT=buttom.offsetHeight;
	
	if(heighT>83){
		daohanght=heighT;
		
		buttom.style.height=80+"px";
	
	}else{
		buttom.style.height=daohanght+"px";
	}
}

	function Newopen(url){
		window.open(url);
	}
</script>
</html>