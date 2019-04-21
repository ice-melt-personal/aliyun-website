<template>
  <div id='footer' class="container">
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
          <a href="#">Copyright &copy; {{ year }} 夕兮曦兮的个人网站 - </a>
          <a href="http://www.miitbeian.gov.cn/" target="_blank" class="miitbeian"> 陕ICP备18016987号</a>
        </p>
      </div>
    </div>
  </div>
</template>

<script>

export default {
    name: 'Footer',
    data () {
    return {
      year: '2019'
    }
  }
}
</script>

<style lang='stylus' scoped>
  /*底部*/
  #footer
    clear: both;
    padding: 24px 15px;
    font-size: 16px;
    line-height: 16px;
    text-align: center;
    text-transform: uppercase;
    color: #999;
    box-shadow: 0px 0px 2px 0px rgba(0,0,0,.1);
  a
    color: #999;
    text-decoration-line: none;
  .miitbeian:hover
    color: red;

</style>
