<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card card-default">
          <div class="card-header">Create Account:</div>

          <div class="card-body">
            <div class="col-md-12">
              <form name="formSignup" v-on:submit.prevent='onSubmit'>
                <label class="control-label" for="name">
                  name
                  <input
                    class="form-control"
                    type="text"
                    v-model="user.name"
                    id="name"
                  >
                </label>
                <label for="email">
                  Email
                  <input class="form-control" type="text" id="email" v-model="user.email">
                </label>
                <label for="password">
                  Password
                  <input
                    class="form-control"
                    type="password"
                    id="password"
                    v-model="user.password"

                    @input="checkPassword"
                  >
                </label>
                
                <label for="password-confirm">
                  Re-enter Password
                  <input
                    class="form-control"
                    type="password"
                    id="password-confirm"
                    v-model="user.password_confirmation"
                    @input="checkPassword"
                  >
                </label>
                <div class="col-md-8 col-offset-1">
                  <button @click="addUser" id="buttonUser" disabled class="btn-success btn">Save</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "register-component",
  watch: {
    user: function() {
      alert("data changed");
      console.log(user);
    }
  },
  data: function() {
    return {
      user: {
        name: "",
        email: "",
        password: "",
        password_confirmation: ""
      }
    };
  },
  methods: {
    addUser() {
      console.log(this.user);
    },
    checkPassword() {
        //console.log(this.user);
      if (
        (this.user.password == this.user.password_confirmation) &
        (this.user.password != "")) {
        document.querySelector("#buttonUser").removeAttribute("disabled");
      }
    },
    checkForm(){

    },
    onSubmit(){
        console.log("Form Submitted:\n");
        console.log(this.user);
        //console.log(window.location);
        axios.post(window.location.href+'/register', this.user).then(res=>{
            console.log(res);
            
        });
        return true;
    }
  },
  mounted() {
    console.log("Component mounted.");
    console.log("name:" + this.user.name + " says " + this.user.email);
  }
};
</script>