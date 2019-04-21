<template>
	<div>
		todo:<input v-model="content"/>
		<button @click="handlerSubmit">submit</button>
		<ul>
			<todo-item v-for="(item,index) of data"
			:key="index" :item2="item" :index="index"
			@delete="handlerDelete">
			</todo-item>
		</ul>
	</div>
</template>

<script>
import TodoItem from './TodoItem'
export default {
	name:'todoList',
	data(){
		return {
			content:'',
			data:[]
		}
	},
	components: {
		TodoItem
	},
	methods: {
		handlerSubmit(){
			if(this.content){
				this.data.push(this.content)
				console.log(this.data)
				this.content = '';
			}
		},
		handlerDelete(index){
			console.log(index)
			this.data.splice(index,1);
		}
	}
}

</script>