<template>
    <div id='about' style='width:100%'>
      <div class="me-header pull-left">
        <img class="img-thumbnail" src="../assets/img/photo128x128.ico"  alt="头像">
      </div>
      <div class="me-info pull-left" style="height: 138px;overflow: hidden;padding: 15px 0 0 15px;">
        <h4>夕曦 &middot; 90后</h4>
        <Divider style='margin: 15px 0 10px 0;'/>
        <div sytle="float:left">
          <Icon type="ios-school" />&nbsp;&nbsp;<a href="http://www.xauat.edu.cn/zh-cn/index.php" target="_blank">西安建筑科技大学</a><br>
          <Icon type="ios-mail" />&nbsp;&nbsp;<span>ice-melt@outlook.com</span>
        </div>
        <Menu mode="horizontal" :theme="theme1" active-name="1" @on-select="route">
           <MenuItem v-for="(name,index) in menu" :key="index" :name="index">
           {{name}}
           </MenuItem>
        </Menu>
      </div>

      <Divider style="margin:0"/>
    <div id="intro">
      也不知道说啥好，先就这样吧
    </div>
    <div id="resume">
        <Row>
          <Col span='20'>
            <h2><span class="glyphicon glyphicon-console" aria-hidden="true"></span>&nbsp;&nbsp;个人简介</h2>
          </Col>
          <Col span='4'>
             <a class="col-md-12 btn btn-success hidden printl" href="javascript:alert('此功能纯属摆设！');">打印简历
              <span class="glyphicon glyphicon-print" aria-hidden="true"></span>
             </a>
          </Col>
        </Row>
        <Row>
          <Col span='20'>简历暂不开放</Col>
          <Col span='4'></Col>
        </Row>
        <div style="padding-right:16%">
            <!--<p style="line-height: 2em;" class="well">
            信息：CSDN证书查询 https://edu.csdn.net/cert<br>
            C0102018121001004068
            </p>-->
            <h5><span class="glyphicon glyphicon-console" aria-hidden="true"></span>&nbsp;&nbsp;求职意向<a class="btn unlock" href="javascript:;"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></a></h5>
            <div id="wantjob">
              <p style="line-height: 1em;">
                <span style="color: #999;">此部分为加密数据，请解锁查看。</span>
              </p>
            </div>
            <h5><span class="glyphicon glyphicon-console" aria-hidden="true"></span>&nbsp;&nbsp;职业技能<a class="btn unlock" href="javascript:;"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></a></h5>
            <div id="knowlege">
              <p style="line-height: 1em;">
                <span style="color: #999;">此部分为加密数据，请解锁查看。</span>
              </p>
            </div>
            <h5><span class="glyphicon glyphicon-console" aria-hidden="true"></span>&nbsp;&nbsp;工作历程<a class="btn unlock" href="javascript:;"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></a></h5>
            <div id="work">
              <p style="line-height: 1em;">
                <span style="color: #999;">此部分为加密数据，请解锁查看。</span>
              </p>
            </div>

          </div>

      </div>
    </div>

</template>

<script>

export default {
    name: 'About',
    data () {
        return {
            menu:[
              "谈谈我寄己",
              "个人简历",
            ],
            split1: 0.5,
            theme1: 'light'
        }
    },
    methods:{
      route(name){
        console.log(name)
        if(name){
            document.getElementById("intro").style.display="none"
            document.getElementById("resume").style.display="block"
        }else{
            document.getElementById("intro").style.display="block"
            document.getElementById("resume").style.display="none"
        }

      }
    },
    mounted(){
        document.getElementById("intro").style.display="block"
        document.getElementById("resume").style.display="none"
    }
}
</script>

<style lang='stylus' scoped>
#about{
    margin 0
    padding 0
    width 600
    height 400
    position absolute
    left 0
    right 0
    /** background-image url(../assets/images/bg.jpeg) */
    background-size cover
    background-position center
    font 14px 'microsoft yahei'
    color #4d4d4d
    font-smoothing:antialiased;
    font-weight 300
}
.img-thumbnail {
    display: inline-block;
    max-width: 100%;
    height: auto;
    padding: 4px;
    line-height: 1.42857143;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 4px;
    transition: all .2s ease-in-out;
}
h4{
text-align: left;

}

.pull-left {
    float: left;
}
.pull-right {
    float: right;
}
</style>
