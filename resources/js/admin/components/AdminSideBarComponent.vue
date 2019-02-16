<template>
  <ul class="nav flex-column">
    <li class="nav-item">
      <router-link to="/home" class="nav-link active">Home</router-link>
      <router-link to="/users" class="nav-link active">Users</router-link>
    </li>
  </ul>
</template>

<script>
var model = {
  name: "Admin",
  message: "SideBar!"
};
export default {
  name: "admin-sidebar-component",
  props: ["model"],
  data: function() {
    return {
      data: model
    };
  },
  mounted() {
    console.log("Component mounted.");
    console.log(this.data.name + " says " + this.data.message);
    console.log();
  }
};
</script>
