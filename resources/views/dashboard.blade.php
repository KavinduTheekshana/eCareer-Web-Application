@extends('layouts.main')

@section('content')

<div class="container mt-xl-50 mt-sm-30 mt-15">
    <!-- Title -->
    <div class="hk-pg-header align-items-top">
        <div>
            <h2 class="hk-pg-title font-weight-600 mb-10">Admin Dashboard</h2>

        </div>

    </div>
    <!-- /Title -->

    <!-- Row -->
    <div class="row">
        <div class="col-xl-12">
            <div class="hk-row">
                <div class="col-lg-12">

                    <div class="hk-row">

                        <div class="col-sm-3">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mb-5">
                                        <div>
                                            <span class="d-block font-15 text-dark font-weight-500">Students</span>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="d-block display-5 text-dark mb-5">{{$student}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-3">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mb-5">
                                        <div>
                                            <span class="d-block font-15 text-dark font-weight-500">Industry</span>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="d-block display-5 text-dark mb-5">{{$industry}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-3">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mb-5">
                                        <div>
                                            <span
                                                class="d-block font-15 text-dark font-weight-500">Qualifications</span>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="d-block display-5 text-dark mb-5">{{$qualifications}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-3">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mb-5">
                                        <div>
                                            <span class="d-block font-15 text-dark font-weight-500">Categories</span>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="d-block display-5 text-dark mb-5">{{$categories}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>

                    <div class="card card-refresh">
                        <div class="refresh-container">
                            <div class="loader-pendulums"></div>
                        </div>
                        <div class="card-header card-header-action">
                            <h6>Latest Users</h6>
                            <div class="d-flex align-items-center card-action-wrap">

                            </div>
                        </div>
                        <div class="card-body">


                            <div class="table-wrap">
                                <div class="table-responsive">
                                    <table class="table table-secondary table-bordered mb-0">
                                        <thead class="thead-secondary">
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>NIC</th>
                                                <th>Type</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($users as $user)
                                            <tr>
                                                <th scope="row">{{$user->id}}</th>
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>{{$user->phone}}</td>
                                                <td>{{$user->nic}}</td>
                                                <td>
                                                    @if($user->user_type == '1')
                                                    <span class="badge badge-info">Student</span>
                                                    @else
                                                    <span class="badge badge-warning">Industry</span> 
                                                    @endif
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
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

@endsection