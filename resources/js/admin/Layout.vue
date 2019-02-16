<template>
  <div class="container">
    <div class="row justify-content-left">
      <div class="col-md-3">
        <admin-sidebar></admin-sidebar>
      </div>
      <div class="col-md-9">
        <router-view></router-view>
        <admin-home></admin-home>
        <admin-users></admin-users>
      </div>
    </div>
  </div>
</template>

<script>
//import AdminSidebarComponent from "./components/AdminSideBarComponent.vue";
//import AdminHome from "./pages/home.vue";
var model = {
  name: "Yakko",
  message: "Hello Nurse!"
};
export default {
  name: "admin-layout",
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
