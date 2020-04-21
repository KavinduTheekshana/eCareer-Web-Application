
@extends('layouts.main')

@section('content')



  
            <!-- Breadcrumb -->
            <nav class="hk-breadcrumb" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light bg-transparent">
                    <li class="breadcrumb-item"><a href="#">E-Career</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Users</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->

            <!-- Container -->
            <div class="container">

                <!-- Title -->
                <div class="hk-pg-header">
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="users"></i></span></span>Users</h4>
                </div>
                <!-- /Title -->

                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                       
                            <div id="app">
                                <user></user>
                            </div>
                        




                      
                
                    </div>
                </div>
                <!-- /Row -->

            </div>
            <!-- /Container -->

@endsection