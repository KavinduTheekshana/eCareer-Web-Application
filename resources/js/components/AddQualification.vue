<template>
<div>
    <div class="card card-profile-feed " style="padding: 30px">
                                   
                    <h5 class="hk-sec-title">Add Qualification</h5>
                            
                       
                                <form @submit.prevent="addQualification" action="">

                                    <div class="form-group row">
                                        
                                            <div class="col-sm-8">
                                               <input type="text" class="form-control mt-15" placeholder="Qualification Name" v-model="qualification.name">
                                            </div>
                                            <div class="col-sm-4">
                                                <button type="submit" class="btn btn-primary ml-20 mt-15">Add Qualification</button>
                                            </div>
                                        </div>


                                <!-- <div class="col-md-8">
                                    <div class="form-group">
                                    <input type="text" class="form-control mt-15" placeholder="Qualification Name" v-model="qualification.name">
                                </div>
                                </div> -->
                                
                                <!-- <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary ml-20 mt-15">Add Qualification</button>
                                </div> -->
                            </form>
                           
                </div> 


<hr>
         <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title">Qualification Table</h5>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="table-wrap">
                                        <div class="table-responsive">
                                            <table class="table table-striped mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Qualification</th>
                                                        <th>Date</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr v-for="qualification in qualifications" v-bind:key="qualification.id">
                                                        <td>{{qualification.id}}</td>
                                                        <td>{{qualification.name}}</td>
                                                        
                                                        <td>May 15, 2015</td>
                                                        <td>
                                                            <a @click="editQualification(qualification)" href="#" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="icon-pencil"></i> </a>
                                                            <a @click="deleteQualification(qualification.id)"  href="#" data-toggle="tooltip" data-original-title="Close"> <i class="icon-trash txt-danger"></i> </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <nav class="pagination-wrap justify-content-end mt-15" aria-label="Page navigation example">
                                        <ul class="pagination">
                                            <li v-bind:class="[{disabled:!pagination.prev_page_url}]" class="page-item"><a class="page-link" href="#"
                                            @click="fetchQualifications(pagination.prev_page_url)">Previous</a></li>
                                            
                                            <li class="page-item disabled"><a class="page-link text-dark" href="#">
            Page {{pagination.current_page}} of {{pagination.last_page}}</a></li>

                                            <li v-bind:class="[{disabled:!pagination.next_page_url}]"  class="page-item"><a class="page-link" href="#"
                                            @click="fetchQualifications(pagination.next_page_url)">Next</a></li>
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
        name: "",
      },
      qualification_id: "",
      pagination: {},
      edit: false
    };
  },
  created() {
    this.fetchQualifications();
  },
  methods: {
      fetchQualifications(page_url) {
        let vm = this;
        page_url = page_url || 'api/qualifications'
      fetch(page_url)
        .then(res => res.json())
        .then(res => {
          this.qualifications = res.data;
          vm.makePagination(res.meta,res.links);
        })
        .catch(err=>console.log(err));
    },
    makePagination(meta,links){
        let pagination = {
            current_page: meta.current_page,
            last_page: meta.last_page,
            next_page_url: links.next,
            prev_page_url: links.prev
        }
        this.pagination = pagination
    },
    deleteQualification(id){
        if(confirm('Are You Sure?')){
            fetch(`api/qualification/${id}`,{
                method:'delete'
            })
            .then(res => res.json())
            .then(data => {
                alert('Qualification Removed');
                this.fetchQualifications();
            })
            .catch(err =>console.log(err))
        }
    },
     addQualification(){
        if (this.edit === false) {
            //add
            fetch('api/qualification',{
                method:'post',
                body:JSON.stringify(this.qualification),
                headers:{
                    'content-type':'application/json'
                }
            })
            .then(res => res.json())
            .then(data => {
                this.qualification.name='';
                alert('Qualification Added');
                this.fetchQualifications();
            })
            .catch(err =>console.log(err));
        }else{
            //edit
            fetch('api/qualification',{
                method:'put',
                body:JSON.stringify(this.qualification),
                headers:{
                    'content-type':'application/json'
                }
            })
            .then(res => res.json())
            .then(data => {
                this.qualification.name='';
                alert('Qualification Updated');
                this.fetchQualifications();
            })
            .catch(err =>console.log(err));

        }
    },
    editQualification(qualification){
        this.edit = true;
        this.qualification.id = qualification.id;
        this.qualification.qualification_id = qualification.id;
        this.qualification.name = qualification.name;
    }
  }
};
</script>