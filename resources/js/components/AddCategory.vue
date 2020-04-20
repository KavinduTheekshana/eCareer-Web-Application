<template>
  <div>
    <div class="card card-profile-feed" style="padding: 30px">
      <h5 class="hk-sec-title">Add Categories</h5>

      <form @submit.prevent="addCategory" action>
        <div class="form-group row">
          <div class="col-sm-5">
               <!-- <input
              type="text"
              class="form-control mt-15"
              placeholder="Category Name"
              v-model="category.qualification_id"
            /> -->
            <select class="form-control mt-15" v-model="category.qualification_id">
              <option
                v-for="qualification in qualifications"
                v-bind:key="qualification.id"
                v-bind:value="qualification.id"
              >{{qualification.name}}</option>
            </select>
          </div>

          <div class="col-sm-4">
            <input
              type="text"
              class="form-control mt-15"
              placeholder="Category Name"
              v-model="category.name"
            />
          </div>

          <div class="col-sm-3">
            <button type="submit" class="btn btn-primary ml-20 mt-15">Add Category</button>
          </div>
        </div>
      </form>
    </div>

    <hr />
    <section class="hk-sec-wrapper">
      <h5 class="hk-sec-title">Categories Table</h5>
      <div class="row">
        <div class="col-sm">
          <div class="table-wrap">
            <div class="table-responsive">
              <table class="table table-striped mb-0">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Qualification ID</th>
                    <th>Qualification name</th>
                    <th>Category</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="categorie in categories" v-bind:key="categorie.id">
                    <td>{{categorie.id}}</td>
                    <td>{{categorie.qualification_id}}</td>
                    <td>{{categorie.qualification}}</td>
                    <td>{{categorie.name}}</td>
                    <td>
                      <a
                        @click="editCategorie(categorie)"
                        href="#"
                        class="mr-25"
                        data-toggle="tooltip"
                        data-original-title="Edit"
                      >
                        <i class="icon-pencil"></i>
                      </a>
                      <a
                        @click="deleteCategorie(categorie.id)"
                        href="#"
                        data-toggle="tooltip"
                        data-original-title="Close"
                      >
                        <i class="icon-trash txt-danger"></i>
                      </a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>

            <nav
              class="pagination-wrap justify-content-end mt-15"
              aria-label="Page navigation example"
            >
              <ul class="pagination">
                <li v-bind:class="[{disabled:!pagination.prev_page_url}]" class="page-item">
                  <a
                    class="page-link"
                    href="#"
                    @click="fetchCategory(pagination.prev_page_url)"
                  >Previous</a>
                </li>

                <li class="page-item disabled">
                  <a
                    class="page-link text-dark"
                    href="#"
                  >Page {{pagination.current_page}} of {{pagination.last_page}}</a>
                </li>

                <li v-bind:class="[{disabled:!pagination.next_page_url}]" class="page-item">
                  <a
                    class="page-link"
                    href="#"
                    @click="fetchCategory(pagination.next_page_url)"
                  >Next</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
export default {
  data() {
    return {
      qualifications: [],
      qualification: {
        id: "",
        name: ""
      },
      pagination: {},
      categories: [],
      category: {
        id: "",
        qualification_id: "",
        name: ""
      },
      category_id: "",
      edit: false
    };
  },
  created() {
    this.fetchQualifications();
    this.fetchCategory();
  },
  methods: {
    fetchQualifications(page_url) {
      let vm = this;
      page_url = page_url || "api/allqualifications";
      fetch(page_url)
        .then(res => res.json())
        .then(res => {
          this.qualifications = res.data;
        })
        .catch(err => console.log(err));
    },
    fetchCategory(page_url) {
      let vm = this;
      page_url = page_url || "api/categories";
      fetch(page_url)
        .then(res => res.json())
        .then(res => {
          this.categories = res.data;
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
    deleteCategorie(id) {
      if (confirm("Are You Sure?")) {
        fetch(`api/category/${id}`, {
          method: "delete"
        })
          .then(res => res.json())
          .then(data => {
            alert("Category Removed");
            this.fetchCategory();
          })
          .catch(err => console.log(err));
      }
    },
    addCategory() {
      if (this.edit === false) {
        //add
        fetch("api/category", {
          method: "post",
          body: JSON.stringify(this.category),
          headers: {
            "content-type": "application/json"
          }
        })
          .then(res => res.json())
          .then(data => {
            this.category.name = "";
            this.category.qualification_id = "";
            alert("Category Added");
            this.fetchCategory();
          })
          .catch(err => console.log(err));
      } else {
        //edit
        etch("api/category", {
          method: "put",
          body: JSON.stringify(this.category),
          headers: {
            "content-type": "application/json"
          }
        })
          .then(res => res.json())
          .then(data => {
            this.category.name = "";
            this.category.qualification_id = "";
            alert("Category Updated");
            this.fetchCategory();
          })
          .catch(err => console.log(err));
      }
    },
    editCategorie(category) {
      this.edit = true;
      this.category.id = category.id;
      this.category.category_id = category.id;
      this.category.qualification_id = category.qualification_id;
      this.category.name = category.name;
    }
  }
};
</script>