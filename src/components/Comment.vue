<template>
  <div id='comment' class="container">
      <h5><span class="glyphicon glyphicon-comment" aria-hidden="true"></span>&nbsp;&nbsp; 如果您有好的想法和建议,欢迎给我留言~</h5>

      <div id="SOHUCS" sid="icemelt.top.comment" ></div>
  </div>
</template>

<script>
import {createComment} from "../assets/js/main.js"

export default {
    name: 'Comment',
    data () {
      return {msg:""}
    },
    methods: {

    },
    mounted () {
      createComment()
    },
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
