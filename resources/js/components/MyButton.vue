<template>
   <button type="submiit" class="my-button" v-text="text" ></button>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
     
        props: [
            'text'
         ]
        
    }
</script>
<style>
    .my-button{
        background-color:yellow;
    }
    

    
</style>
