<template>
<div>
    
<router-link tag="button" class="btn btn-primary" to="/feed">feed</router-link>
<router-link tag="button" class="btn btn-primary" to="/home">Home</router-link>
<router-link tag="button" class="btn btn-primary" to="/profile">Profile</router-link>

</div>
</template>

<script>
    var model = {
        name: "Yakko",
        message: "Hello Nurse!"
    }
    export default {
        name: 'nav-component',
        props: ['model'],
        data: function(){
            return {
                data: model
            }
        },
        mounted() {
            console.log('Component mounted.')
            //console.log(this.data.name + " says " + this.data.message)
            
        }
    }
</script>