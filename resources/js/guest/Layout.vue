<template>
  <div class="container">
    <div class="row justify-content-left">
      <div class="col-md-3">
        <admin-sidebar-component></admin-sidebar-component>
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
var model = {
  name: "Yakko",
  message: "Hello Nurse!"
};
export default {
  name: "guest-layout",
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
