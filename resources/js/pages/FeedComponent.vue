<template>
<div class="container">
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card card-default">
            <div class="card-header"></div>
                <div class="card-body">
                    <usercard-component  v-for="user in this.data.users" v-bind:user="user" v-bind:key="user.id"></usercard-component>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
    var model = {
        users: [],
        message: "This is your feed!"
    }
    export default {
        name: 'feed-component',
        props: ['model'],
        data: function(){
            return {
                data: model
            }
        },
        mounted() {
              console.log(window.location);
            axios.get(window.location.origin+'/users/all').then(
          res=>{
              console.log(res.data);
              this.data.users = res.data;
          });
            console.log('Component mounted.')
            console.log(this.data.users.length + " says " + this.data.message)
            
        }
    }
</script>
