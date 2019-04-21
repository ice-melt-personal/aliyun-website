<template>
  <div class="home">
    <div class="content">
      <h2 class="content__title">夕兮曦兮</h2>
      <h3 class="content__subtitle">ice-melt</h3>
    </div>

    <!-- <div class="ivu-loading-bar" style="/* display: none; */">
      <div class="ivu-loading-bar-inner ivu-loading-bar-inner-color-primary" style="width: 0%; height: 2px;"></div>
    </div> -->


    <!-- <canvas id="mainCanvas" width="1000" height="560"></canvas>
	    <div id="output"></div> -->
    <!-- <h1>{{ msg }}</h1> -->
  </div>
</template>

<script>
import "../assets/js/three.min.js"
import "../assets/js/TweenMax.min.js"
import {createHomeSE3} from "../assets/js/main.js"

export default {
  name: 'Home',
  data () {
    return {
      msg: 'Hello，我是夕兮曦兮，英文名ice-melt,这是我的 个人网站，如果有什么问题，欢迎提出探讨~'
    }
  },
  mounted () {
      createHomeSE3()
    },
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
@import '../assets/css/main.css'; /*引入公共样式*/
/* h1, h2 {
  font-weight: normal;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #bb196a;
} */
</style>
