<template>
    <div id="todo-app">
        <div id="cover">

        </div>
        <Header></Header>
        <Todo></Todo>
        <Footer></Footer>
    </div>
</template>


<script>
import Header from './todo/header.vue'
import Footer from './todo/footer.vue'
import Todo from './todo/todo.vue'
export default {
    name: 'TodoList',
    components:{
        Header,
        Todo,
        Footer
    }
}
</script>

<style lang="stylus" scoped>
#cover{
    position absolute
    left 0
    right 0
    top 0
    bottom 0
    z-index -1
}
</style>

