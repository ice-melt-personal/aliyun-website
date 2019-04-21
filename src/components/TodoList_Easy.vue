<template>
    <div id='todolist_easy_app'>
        <TodoListEasy></TodoListEasy>
    </div>
</template>

<script>
import TodoListEasy from './todo_easy/TodoList.vue'
export default {
    name: 'TodoList_Easy',
    components:{
        TodoListEasy
    }
}
</script>

<style lang='stylus' scoped>
#todolist_easy_app{
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

 
</style>
