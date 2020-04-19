
@extends('layouts.main')

@section('content')



  
            <!-- Breadcrumb -->
            <nav class="hk-breadcrumb" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light bg-transparent">
                    <li class="breadcrumb-item"><a href="#">E-Career</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add Qualification</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->

            <!-- Container -->
            <div class="container">

                <!-- Title -->
                <div class="hk-pg-header">
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="plus-square"></i></span></span>Add Qualification</h4>
                </div>
                <!-- /Title -->

                <div class="card card-profile-feed " style="padding: 30px">
                                   
                    <h5 class="hk-sec-title">Add Qualification</h5>
                            
                            <div class="row">
                                <div class="col-md-8">
                                    <input type="text" class="form-control mt-15" placeholder="Input Box">
                                </div>
                                
                                <div class="col-md-4">
                                    <button class="btn btn-primary ml-20 mt-15">&nbsp &nbsp Add Qualification &nbsp &nbsp</button>
                                </div>

                            </div>  
                </div>

                <hr>



                      <!-- Row -->
                      <div class="row">
                        <div class="col-xl-12">
                            <section class="hk-sec-wrapper">
                                <h5 class="hk-sec-title">List Of Qualification</h5>
                                
                                <div class="row">
                                    <div class="col-sm">
                                        <div class="table-wrap">
                                            <table id="datable_1" class="table table-hover w-100 display pb-30">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Name</th>
                                                        <th>Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Tiger Nixon</td>
                                                        <td>System Architect</td>
                                                        <td>Edinburgh</td>

                                                    </tr>
                                                    
                                                  
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Name</th>
                                                        <th>Date</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </section>
    
    
    
    
                          
                    
                        </div>
                    </div>
        

            </div>
            <!-- /Container -->

@endsection