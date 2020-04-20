<template>

            <form @submit.prevent="submitLoginDetails">
                <h1 class="display-4 mb-10">Welcome Back :)</h1>
                <p class="mb-30">Sign in to your account and enjoy unlimited perks.</p>
                <div class="form-group">
                    <input class="form-control" v-model="login.email" placeholder="Email" type="email">
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <input class="form-control" v-model="login.password" placeholder="Password" type="password">
                        <div class="input-group-append">
                            <span class="input-group-text"><span class="feather-icon"><i data-feather="eye-off"></i></span></span>
                        </div>
                    </div>
                </div>
                <div class="custom-control custom-checkbox mb-25">
                    <input class="custom-control-input" id="same-address" type="checkbox" checked>
                    <label class="custom-control-label font-14" for="same-address">Keep me logged in</label>
                </div>
                <button class="btn btn-primary btn-block" type="submit">Login</button>
                <p class="font-14 text-center mt-15">Having trouble logging in?</p>
                <div class="option-sep">or</div>
         
                <p class="text-center">Do have an account yet? <a href="#">Sign Up</a></p>
            </form>



</template>


<script>
export default {
  data() {
    return {
      logins: [],
      login: {
        email: "",
        password: "",
        token: ""
      },
      qualification_id: "",
      edit: false
    };
  },

  methods: {

    submitLoginDetails() {

        //add
        fetch("api/auth/signin", {
          method: "post",
          body: JSON.stringify(this.login),
          headers: {
            "content-type": "application/json"
          }
        })
          .then(res => res.json())
          .then(res => {
          this.login.token = res.token;
          document.cookie =res.token;
        })
        .catch(err => console.log(err));

        if (this.login.token != null) {
           window.location.href = 'dashboard'; 
        }
    },
  }
};
</script>