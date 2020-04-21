<template>
  <form @submit.prevent="submitRegisterDetails">
    <h1 class="display-4 mb-10">Sign up for Student</h1>
    <p class="mb-30">Create your account and start your free trial today</p>
    <div class="form-group">
      <input class="form-control" v-model="user.name" placeholder="Name" type="text" />
    </div>

    <div class="form-group">
      <input class="form-control" v-model="user.email" placeholder="Email" type="email" />
    </div>

    <div class="form-row">
      <div class="col-md-6 form-group">
        <input class="form-control" v-model="user.phone" placeholder="Phone" value type="tel" />
      </div>
      <div class="col-md-6 form-group">
        <input class="form-control" v-model="user.nic" placeholder="NIC" value type="text" />
      </div>
    </div>
    <div class="form-group">
      <input class="form-control" v-model="user.university" placeholder="University" type="text" />
    </div>
    <div class="form-group">
      <input class="form-control" v-model="user.student_id" placeholder="Student ID" type="text" />
    </div>
    <div class="form-group">
      <input class="form-control" v-model="user.password" placeholder="Password" type="password" />
    </div>
    <button class="btn btn-primary btn-block" type="submit">Register</button>
    <div class="option-sep">or</div>

    <p class="text-center">
      Already have an account?
      <a href="login">Sign In</a>
      Register as 
      <a href="industry">Industry</a> 
    </p>
  </form>
</template>


<script>
export default {
  data() {
    return {
      users: [],
      user: {
        id: "",
        name: "",
        email: "",
        phone: "",
        nic: "",
        university: "",
        student_id: "",
        password: ""
      },
      edit: false
    };
  },

  methods: {
    submitRegisterDetails() {
      //add
      fetch("api/auth/register", {
        method: "post",
        body: JSON.stringify(this.user),
        headers: {
          "content-type": "application/json"
        }
      })
        .then(res => res.json())
        .then(res => {
          this.user.id = res.data.id;
        })
        .catch(err => console.log(err));
        if (this.user.id != null) {
           alert("Register Sucessfull");
           window.location.href = 'login'; 
        }else{
            alert("Error");
        }

    }
  }
};
</script>