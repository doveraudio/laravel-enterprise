<template>
  <ul class="nav flex-column">
    <li class="nav-item">
      <router-link :to="{ name:'user-home'}" class="nav-link active">Home</router-link>
    </li>
  </ul>
</template>

<script>
var model = {
  name: "User",
  message: "SideBar!"
};
export default {
  name: "user-sidebar-component",
  props: ["model"],
  data: function() {
    return {
      data: model
    };
  },
  mounted() {
    console.log("Component mounted.");
    console.log(this.data.name + " says " + this.data.message);
  }
};
</script>
