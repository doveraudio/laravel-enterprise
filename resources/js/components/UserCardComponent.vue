<template>
  
     <div class="col-md-3">
                        <div class="card card-default" >
                            <div class="card-header">User Properties</div>
                            <div class="card-body">           
                                <div is="user-card" v-for="(value,key,index) in this.user" :key="index">
                                    <strong>{{ key }}:</strong>
                                    <span class="control-label"> {{ value }}</span> 
                                </div>
                            </div>
                        </div>
                    </div>
   
</template>

<script>
export default {
  name: "usercard-component",
  props:
  ['user'],
  mounted() {
    console.log("Component mounted.");
    console.log(this.user)
  }
};
</script>