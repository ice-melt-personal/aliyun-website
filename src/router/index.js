import Vue from 'vue'
import Router from 'vue-router'
import Home from '@/components/Home'
import Blog from '@/components/Blog'
import TodoList from '@/components/TodoList'
import TodoList_Easy from '@/components/TodoList_Easy'
import Comment from '@/components/Comment'
import About from '@/components/About'


Vue.use(Router)

export default new Router({
  routes: [{
      path: '/Home',
      name: 'Home',
      component: Home
    },{
      path: '/Blog',
      name: 'Blog',
      component: Blog
    },{
      path: '/TodoList',
      name: 'TodoList',
      component: TodoList
    },{
      path: '/TodoList_Easy',
      name: 'TodoList_Easy',
      component: TodoList_Easy
    },{
      path: '/Comment',
      name: 'Comment',
      component: Comment
    },{
      path: '/About',
      name: 'About',
      component: About
    },{
      path:'*',
      redirect:'/Home'/** 默认进入Home首页 */
    }
  ]
})
