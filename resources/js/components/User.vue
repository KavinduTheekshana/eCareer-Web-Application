<template>
  <section class="hk-sec-wrapper">
    <h5 class="hk-sec-title">List Of Users</h5>

    <div class="row">
      <div class="col-sm">
        <div class="table-wrap">
          <table id="datable_1" class="table table-hover w-100 display pb-30">
            <thead>
              <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>NIC</th>
                <th>Type</th>
                <th>status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="user in users" v-bind:key="user.id">
                <td>{{user.name}}</td>
                <td>{{user.phone}}</td>
                <td>{{user.nic}}</td>
                <td>
                  <div v-if="user.user_type === 2">
                    <span class="badge badge-md badge-success">Industry</span>
                  </div>
                  <div v-if="user.user_type === 1">
                    <a>
                      <span class="badge badge-md badge-danger">Student</span>
                    </a>
                  </div>
                </td>
                <td>
                  <div v-if="user.status">
                    <span class="badge badge-md badge-primary">Active</span>
                  </div>
                  <div v-else>
                    <a>
                      <span class="badge badge-md badge-warning">Diactivate</span>
                    </a>
                  </div>
                </td>
                <td>
                  <a v-if="user.status"
                    @click="editQualification(qualification)"
                    href="#"
                    class="mr-25"
                    data-toggle="tooltip"
                    data-original-title="Edit"
                  >
                    <i class="icon-check"></i>
                  </a>

                  <a v-else
                    @click="editQualification(qualification)"
                    href="#"
                    class="mr-25"
                    data-toggle="tooltip"
                    data-original-title="Edit"
                  >
                    <i class="icon-close"></i>
                  </a>

                   <a
                    @click="editQualification(qualification)"
                    href="#"
                    class="mr-25"
                    data-toggle="tooltip"
                    data-original-title="Edit"
                  >
                    <i class="icon-trash txt-danger"></i>
                  </a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <nav class="pagination-wrap justify-content-end mt-15" aria-label="Page navigation example">
          <ul class="pagination">
            <li v-bind:class="[{disabled:!pagination.prev_page_url}]" class="page-item">
              <a
                class="page-link"
                href="#"
                @click="fetchNormalUser(pagination.prev_page_url)"
              >Previous</a>
            </li>

            <li class="page-item disabled">
              <a
                class="page-link text-dark"
                href="#"
              >Page {{pagination.current_page}} of {{pagination.last_page}}</a>
            </li>

            <li v-bind:class="[{disabled:!pagination.next_page_url}]" class="page-item">
              <a class="page-link" href="#" @click="fetchNormalUser(pagination.next_page_url)">Next</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </section>
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
        nic: "",
        phone: "",
        university: "",
        student_id: "",
        company: "",
        user_type: "",
        status: "",
        profile_pic: ""
      },
      user_id: "",
      pagination: {},
      edit: false
    };
  },
  created() {
    this.fetchNormalUser();
  },
  methods: {
    fetchNormalUser(page_url) {
      // alert(document.cookie.split(";")[0])
      let vm = this;
      page_url = page_url || "api/users";
      fetch(page_url)
        .then(res => res.json())
        .then(res => {
          this.users = res.data;
          vm.makePagination(res.meta, res.links);
        })
        .catch(err => console.log(err));
    },
    makePagination(meta, links) {
      let pagination = {
        current_page: meta.current_page,
        last_page: meta.last_page,
        next_page_url: links.next,
        prev_page_url: links.prev
      };
      this.pagination = pagination;
    },
    useractive(id) {
      var token = document.cookie.split(";")[0];
      if (confirm("Are You Sure?")) {
        fetch(`api/qualification/${id}`, {
          method: "delete",
          body: JSON.stringify(this.qualification),
          headers: {
            "content-type": "application/json",
            Authorization: "Bearer "+token.split('=')[1]
          }
        })
          .then(res => res.json())
          .then(data => {
            alert("Qualification Removed");
            this.fetchQualifications();
          })
          .catch(err => console.log(err));
      }
    }


  }
};
</script>