<template>
	<li style="cursor:pointer" @click="handlerClick"><b>{{item2}}</b></li>
</template>

<script>
export default {
	name:'todoItem',
	props:['item2','index'],
	methods:{handlerClick(){
		this.$emit('delete',this.index)
	}}
}
</script>