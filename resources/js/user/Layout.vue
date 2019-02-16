<template>
  <div class="container">
    <div class="row justify-content-left">
      <div class="col-md-3">
        <user-sidebar-component></user-sidebar-component>
      </div>
      <div class="col-md-8">
        <div class="card card-default">
          <div class="card-header">{{ data.name }} Says:</div>

          <div class="card-body">
            <h2>{{ data.message }}</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
//import UserSidebarComponent from "./components/UserSideBarComponent.vue";

window.Vue = require("vue");

const UserSideBarComponent = Vue.component(
  "user-sidebar-component",
  require("./components/UserSideBarComponent.vue").default
);

var model = {
  name: "Yakko",
  message: "Hello Nurse!"
};
export default {
  name: "user-layout",
  props: ["model"],
  components: { usersidebarcomponent: UserSideBarComponent },
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
