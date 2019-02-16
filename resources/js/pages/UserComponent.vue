<template>
<div class="container">
<user-nav>
</user-nav>
<br>
<hr>
<br>
<router-view class="view">
</router-view> 
</div>
</template>

<script>
    var model = {
        name: "Yakko",
        message: "Hello Nurse!"
    }
    export default {
        name: 'user-component',
        props: ['model'],
        data: function(){
            return {
                data: model
            }
        },
        mounted() {
            console.log('Component mounted.')
            console.log(this.data.name + " says " + this.data.message)
            
        }
    }
</script>
