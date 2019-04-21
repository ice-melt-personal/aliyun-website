<template>
    <div id='footer'>
        <span>Writtrn by {{author}}</span> <br/>
        <span>Create Time : 2019-3-28</span>
    </div>
</template>


<script>
export default {
    //el:'#footer',
    data(){
        return {
            author:'ice-melt'
        }
    }
}
</script>

<style lang="stylus" scoped>
    #footer{
        margin-top 40px
        text-align center
        color #bfbfbf
        font-size 15px
        text-shadow 0 1px 0 #708496
    }
</style>
