<template>
  <div>
    <!-- Container -->
    <div class="container-fluid">
      <!-- Row -->
      <div class="row">
        <div class="col-xl-12 pa-0">
          <div class="profile-cover-wrap overlay-wrap">
            <div class="profile-cover-img" style="background-image:url('dist/img/trans-bg.jpg')"></div>
            <div class="bg-overlay bg-trans-dark-60"></div>
            <div class="container profile-cover-content py-50">
              <div class="hk-row">
                <div class="col-lg-6">
                  <div class="media align-items-center">
                    <div class="media-img-wrap d-flex">
                      <div class="avatar">
                        <img v-bind:src="user.profile_pic" alt="user" class="avatar-img rounded-circle" />
                      </div>
                    </div>
                    <div class="media-body">
                      <div
                        class="text-white text-capitalize display-6 mb-5 font-weight-400"
                      >{{user.name}}</div>
                      <div class="font-14 text-white">
                        <span class="mr-5">
                          <span class="mr-5">{{user.email}}</span>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="tab-content mt-sm-60 mt-30">
            <div class="tab-pane fade show active" role="tabpanel">
              <div class="container">
                <div class="hk-row">
                  <div class="col-lg-12">
                    <div class="card card-profile-feed" style="padding: 30px">
                      <h5 class="hk-sec-title">Details</h5>

                      <form @submit.prevent="updateProfileDetails">
                        <div class="form-group row">
                          <div class="col-md-5">
                            <input
                              type="text"
                              v-model="user.name"
                              class="form-control mt-15"
                              placeholder="Name"
                            />
                          </div>

                          <div class="col-md-7">
                            <input
                              type="text"
                              v-model="user.email"
                              class="form-control mt-15"
                              placeholder="Email"
                              readonly
                            />
                          </div>

                          <button type="submit" class="btn btn-primary ml-20 mt-20">Update</button>
                        </div>
                      </form>

                      <hr />
                      <h5 class="hk-sec-title">Password</h5>
                      <div class="row">
                        <div class="col-md-4">
                          <input type="text" class="form-control mt-15" placeholder="Current Password" />
                        </div>

                        <div class="col-md-4">
                          <input type="text" class="form-control mt-15" placeholder="New Password" />
                        </div>

                        <div class="col-md-4">
                          <input type="text" class="form-control mt-15" placeholder="Confirm Password" />
                        </div>

                        <button class="btn btn-primary ml-20 mt-20">Reset Password</button>
                      </div>

                      <hr />
                      <h5 class="hk-sec-title">Profile Picture</h5>
                      <div class="row mt-15">
                        <div class="col-md-12">
                          <div class="col-sm">
                            <input type="file" id="input-file-now" class="dropify" />
                          </div>
                        </div>
                        <br />
                        <hr />
                        <button class="btn btn-primary ml-20 mt-20">Change Profile Picture</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /Row -->
    </div>
    <!-- /Container -->
  </div>
</template>


<script>
export default {
  data() {
    return {
      user: {
        id: "",
        name: "",
        email: "",
        profile_pic: ""
      },
      edit: false
    };
  },
  created() {
    this.fetchProfile();
  },
  methods: {
    fetchProfile(page_url) {
      var token = document.cookie.split(";")[0];
      fetch("api/auth/me", {
        method: "get",
        headers: {
          "content-type": "application/json",
          Authorization: "Bearer " + token.split("=")[1]
        }
      })
        .then(res => res.json())
        .then(res => {
          this.user.id = res.data.id;
          this.user.name = res.data.name;
          this.user.email = res.data.email;
          this.user.profile_pic = res.data.profile_pic;
        })
        .catch(err => console.log(err));
    },
    updateProfileDetails() {
      var token = document.cookie.split(";")[0];
      //add
      fetch("api/updateprofile", {
        method: "put",
        body: JSON.stringify(this.user),
        headers: {
          "content-type": "application/json",
          Authorization: "Bearer " + token.split("=")[1]
        }
      })
        .then(res => res.json())
        .then(data => {
          this.name = "";
          alert("User Updated");
          this.fetchProfile();
        })
        .catch(err => console.log(err));
    }
  }
};
</script>