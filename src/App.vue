<template>
  <div id="app" class="user-select detail">
    <div id="nav" class="detail-header">
    <Menu mode="horizontal" :theme="theme1" active-name="1">
        <MenuItem name="0" class="logo" style="padding-left:0">
          <img src="./assets/img/logo.png">
        </MenuItem>
        <MenuItem name="1">
            <Icon type="ios-home" />
            <router-link to="/Home">主页</router-link>
        </MenuItem>
        <MenuItem name="2">
            <Icon type="ios-book" />
            <router-link to="/Blog">博客</router-link>

        </MenuItem>
        <Submenu name="3">
            <template slot="title">
                项目
            </template>
            <MenuGroup title="===前端===">
                <MenuItem name="3-1"><router-link to="/TodoList">TodoList</router-link></MenuItem>
                <MenuItem name="3-2"><router-link to="/TodoList_Easy">TodoList_Easy</router-link></MenuItem>
            </MenuGroup>
            <MenuGroup title="===人工智能===">
                <MenuItem name="3-3">Image Caption</MenuItem>
            </MenuGroup>
        </Submenu>
         <MenuItem name="4">
            <router-link to="/Comment">留言</router-link>
        </MenuItem>
        <Submenu name="5">

            <template slot="title">
                关于
            </template>
            <MenuItem name="5-1">网站说明</MenuItem>
            <MenuItem name="5-2">网站日志</MenuItem>
            <MenuItem name="5-3">短期规划</MenuItem>
            <Divider/>
            <MenuItem name="5-4"><router-link to="/About">关于我</router-link></MenuItem>
        </Submenu>
    </Menu>
    <!-- <Menu active-name="0-0" theme="dark" width="auto" @on-select="route()">
    <Menu-group v-for="(menu,index) in menus" :title="menu.name" :key="index">
        <Menu-item v-for="(item,ins) in menu.item" :key="ins" :name="index+'-'+ins">
            <Icon :type="item.icon"></Icon>
            {{item.name}}
        </Menu-item>
    </Menu-group>
  </Menu> -->

    </div>
    <!-- <img src="./assets/logo.png"> -->
    <div class="detail-wrapper">
        <router-view/>
    </div>
    <div class="detail-close"><Footer/></div>
  </div>
</template>

<script>
import Footer from '@/components/Footer'

export default {
  name: 'App',
  data () {
    return {
        theme1: 'light'
    }
  },
  components:{
    Footer
  }
}
</script>

<style lang="stylus">
#app, html,body
    padding: 0;
    margin: 0;

#app
    width: 100%;
    height: 100%;
    position: absolute;
    left: 0;
    right: 0;
    background-image: url('./assets/img/bg.jpeg')
    background-size: cover;
    background-position: 50%;
    font: 20px microsoft yahei;
    color: #4d4d4d;
    //color: #2c3e50;
    font-smoothing: antialiased;
    font-family: 'Avenir',Helvetica,Arial,sans-serif;
    font-weight: 300;
    text-align: center;
    user-select: none;

.ivu-menu-light {
    background: none;
}


.detail {
      /* 因为是遮罩效果所以要fixed */
      position: fixed;
      top: 0;
      left: 0;
      z-index: 100;
      width: 100%;
      /*必须 */
      display: flex;
      /* 必须，规定元素的排列方向 */
      flex-direction: column;
      /* 必须占满屏 */
      height: 100%;
      /* 没有这个就不能滚动了 */
      overflow: auto;
  }

.detail-header
  padding: 0
  width: 100%;
  text-align: center;
  // background: #a3e;


.detail-wrapper {
    width: 100%;
    /* 占了百分百-flex:0的占位 */
    flex: 1;
    // background: #143541;
    // font-size: 40px;
    text-align: center;
}

.detail-close
    /* 占位用 */
    flex: 0;
    margin: 0;
    // background: #555555;
</style>
