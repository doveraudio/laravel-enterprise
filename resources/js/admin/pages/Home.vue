<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
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
  name: "Admin",
  message: "Home!"
};
export default {
  name: "home",
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
