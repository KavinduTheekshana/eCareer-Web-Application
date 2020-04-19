
@extends('layouts.main')

@section('content')

<div class="container mt-xl-50 mt-sm-30 mt-15">
    <!-- Title -->
    <div class="hk-pg-header align-items-top">
        <div>
            <h2 class="hk-pg-title font-weight-600 mb-10">Data Analytics Dashboard</h2>
            <p>Questions about onboarding lead data? <a href="#">Learn more.</a></p>
        </div>
        <div class="d-flex">
            <button class="btn btn-sm btn-outline-light btn-wth-icon icon-wthot-bg mr-15 mb-15"><span class="icon-label"><i class="fa fa-envelope-o"></i> </span><span class="btn-text">Email </span></button>
            <button class="btn btn-sm btn-outline-light btn-wth-icon icon-wthot-bg mr-15 mb-15"><span class="icon-label"><i class="fa fa-print"></i> </span><span class="btn-text">Print </span></button>
            <button class="btn btn-sm btn-outline-primary btn-wth-icon icon-wthot-bg mb-15"><span class="icon-label"><i class="fa fa-download"></i> </span><span class="btn-text">Export </span></button>
        </div>
    </div>
    <!-- /Title -->

    <!-- Row -->
    <div class="row">
        <div class="col-xl-12">
            <div class="hk-row">
                <div class="col-lg-7">
                    
                    <div class="hk-row">							
                        <div class="col-sm-6">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mb-5">
                                        <div>
                                            <span class="d-block font-15 text-dark font-weight-500">Visits</span>
                                        </div>
                                        <div>
                                            <span class="badge badge-primary  badge-sm">+10%</span>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="d-block display-5 text-dark mb-5">76.5K</span>
                                        <small class="d-block">172,458 Target Users</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mb-5">
                                        <div>
                                            <span class="d-block font-15 text-dark font-weight-500">Users</span>
                                        </div>
                                        <div>
                                            <span class="badge badge-danger   badge-sm">+10%</span>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="d-block display-5 text-dark mb-5">68M</span>
                                        <small class="d-block">90M Targeted</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mb-5">
                                        <div>
                                            <span class="d-block font-15 text-dark font-weight-500">Tickets</span>
                                        </div>
                                        <div>
                                            <span class="badge badge-primary  badge-sm">-1.5%</span>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="d-block display-5 text-dark mb-5">73</span>
                                        <small class="d-block">100 Regular</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mb-5">
                                        <div>
                                            <span class="d-block font-15 text-dark font-weight-500">Earnings</span>
                                        </div>
                                        <div>
                                            <span class="badge badge-warning  badge-sm">+60%</span>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="d-block display-5 text-dark mb-5">$89M</span>
                                        <small class="d-block">$100M Targeted</small>
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
                            <h6>user statistics</h6>
                            <div class="d-flex align-items-center card-action-wrap">
                                <a href="#" class="inline-block refresh mr-15">
                                    <i class="ion ion-md-radio-button-off"></i>
                                </a>
                                <div class="inline-block dropdown">
                                    <a class="dropdown-toggle no-caret" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="ion ion-md-more"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="hk-legend-wrap mb-20">
                                <div class="hk-legend">
                                    <span class="d-10 bg-purple rounded-circle d-inline-block"></span><span>Desktop</span>
                                </div>
                                <div class="hk-legend">
                                    <span class="d-10 bg-grey-light-2 rounded-circle d-inline-block"></span><span>Mobile</span>
                                </div>
                            </div>
                            <div id="e_chart_4" style="height:300px;"></div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header card-header-action">
                            <h6>Country Stats</h6>
                            <div class="d-flex align-items-center card-action-wrap">
                                <a href="#" class="inline-block refresh mr-15">
                                    <i class="ion ion-md-arrow-down"></i>
                                </a>
                                <a href="#" class="inline-block full-screen">
                                    <i class="ion ion-md-expand"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body pa-0">
                            <div class="pa-20">
                                <div id="world_map_marker_1" style="height: 360px"></div>
                            </div>
                            <div class="table-wrap">
                                <div class="table-responsive">
                                    <table class="table table-sm table-striped table-hover mb-0">
                                        <thead>
                                            <tr>
                                                <th class="w-25">Country</th>
                                                <th>Sessions</th>
                                                <th>Goals</th>
                                                <th>Goals Rate</th>
                                                <th>Bounce Rate</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Canada</td>
                                                <td>55,555</td>
                                                <td>210</td>
                                                <td>2.46%</td>
                                                <td>0.26%</td>
                                            </tr>
                                            <tr>
                                                <td>India</td>
                                                <td>24,152</td>
                                                <td>135</td>
                                                <td>0.58%</td>
                                                <td>0.43%</td>
                                            </tr>
                                            <tr>
                                                <td>UK</td>
                                                <td>15,640</td>
                                                <td>324</td>
                                                <td>5.15%</td>
                                                <td>2.47%</td>
                                            </tr>
                                            <tr>
                                                <td>Botswana</td>
                                                <td>12,148</td>
                                                <td>854</td>
                                                <td>4.19%</td>
                                                <td>0.1%</td>
                                            </tr>
                                            <tr>
                                                <td>UAE</td>
                                                <td>11,258</td>
                                                <td>453</td>
                                                <td>8.15%</td>
                                                <td>0.14%</td>
                                            </tr>
                                            <tr>
                                                <td>Australia</td>
                                                <td>10,786</td>
                                                <td>376</td>
                                                <td>5.48%</td>
                                                <td>0.45%</td>
                                            </tr>
                                            <tr>
                                                <td>Phillipines</td>
                                                <td>9,485</td>
                                                <td>63</td>
                                                <td>3.51%</td>
                                                <td>0.9%</td>
                                            </tr>
                                            <tr>
                                                <td>Srilanka</td>
                                                <td>1,485</td>
                                                <td>63</td>
                                                <td>3.51%</td>
                                                <td>0.9%</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="card">
                        <div class="card-header card-header-action">
                            <h6>Visit by Traffic Types</h6>
                            <div class="d-flex align-items-center card-action-wrap">
                                <div class="inline-block dropdown">
                                    <a class="dropdown-toggle no-caret" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="ion ion-ios-more"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="e_chart_3" style="height:250px;"></div>
                            <div class="hk-legend-wrap mt-20">
                                <div class="hk-legend">
                                    <span class="d-10 bg-purple rounded-circle d-inline-block"></span><span>18-24</span>
                                </div>
                                <div class="hk-legend">
                                    <span class="d-10 bg-grey-light-1 rounded-circle d-inline-block"></span><span>25-34</span>
                                </div>
                                <div class="hk-legend">
                                    <span class="d-10 bg-grey-light-2  rounded-circle d-inline-block"></span><span>35-44</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="hk-legend-wrap mb-10">
                                <div class="hk-legend">
                                    <span class="d-10 bg-purple rounded-circle d-inline-block"></span><span>Today</span>
                                </div>
                                <div class="hk-legend">
                                    <span class="d-10 bg-grey-light-1  rounded-circle d-inline-block"></span><span>Yesterday</span>
                                </div>
                            </div>
                            <div id="e_chart_1" class="echart" style="height:200px;"></div>
                            <div class="row mt-20">
                                <div class="col-4">
                                    <span class="d-block text-capitalize mb-5">Previous</span>
                                    <span class="d-block font-weight-600 font-13">79.82</span>
                                </div>
                                <div class="col-4">
                                    <span class="d-block text-capitalize mb-5">% Change</span>
                                    <span class="d-block font-weight-600 font-13">+14.29</span>
                                </div>
                                <div class="col-4">
                                    <span class="d-block text-capitalize mb-5">Trend</span>
                                    <span class="block">
                                        <i class="zmdi zmdi-trending-down text-danger font-20"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="card">
                        <div class="card-header card-header-action">
                            <h6>Recent Activity</h6>
                            <div class="d-flex align-items-center card-action-wrap">
                                <div class="inline-block dropdown">
                                    <a class="dropdown-toggle no-caret" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="ion ion-ios-more"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="user-activity user-activity-sm">
                                <div class="media">
                                    <div class="media-img-wrap">
                                        <div class="avatar avatar-xs">
                                            <img src="dist/img/avatar2.jpg" alt="user" class="avatar-img rounded-circle">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            <span class="d-block mb-5"><span class="font-weight-500 text-dark text-capitalize">Laura Thompson</span><span class="pl-5">joined josh groben team.</span></span>
                                            <span class="d-block font-13">3 hours ago</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-img-wrap">
                                        <div class="avatar avatar-xs">
                                            <img src="dist/img/avatar3.jpg" alt="user" class="avatar-img rounded-circle">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            <span class="d-block mb-5"><span class="font-weight-500 text-dark text-capitalize">Meayme Fletcher</span><span class="pl-5">liked photos</span></span>
                                            <span class="d-block font-13 mb-10">6 hours ago</span>
                                        </div>
                                        <div class="d-flex">
                                            <a href="#" class="w-75p mr-10"><img class="card-img-top rounded" src="dist/img/gallery/mock7.jpg" alt="Card image cap"></a>
                                            <a href="#" class="w-75p mr-10"><img class="card-img-top rounded" src="dist/img/gallery/mock11.jpg" alt="Card image cap"></a>
                                            <a href="#" class="w-75p mr-10"><img class="card-img-top rounded" src="dist/img/gallery/mock12.jpg" alt="Card image cap"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-img-wrap">
                                        <div class="avatar avatar-xs">
                                            <span class="avatar-text avatar-text-info rounded-circle">
                                                    <span class="initial-wrap"><span>B</span></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            <span class="d-block mb-5"><span class="font-weight-500 text-dark text-capitalize">Billy Flowers</span><span class="pl-5">Until recently, the prevailing view assumed lorem ipsum was born as a nonsense text.</span></span>
                                            <span class="d-block font-13">3 days ago</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-img-wrap">
                                        <div class="avatar avatar-xs">
                                            <img src="dist/img/avatar4.jpg" alt="user" class="avatar-img rounded-circle">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            <span class="d-block mb-5"><span class="font-weight-500 text-dark text-capitalize">Morgan Freeman</span><span class="pl-5">joined josh groben team.</span></span>
                                            <span class="d-block font-13">3 hours ago</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-img-wrap">
                                        <div class="avatar avatar-xs">
                                            <span class="avatar-text avatar-text-success rounded-circle">
                                                    <span class="initial-wrap"><span>M</span></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            <span class="d-block mb-5"><span class="font-weight-500 text-dark text-capitalize">Meayme Fletcher</span><span class="pl-5">liked photos</span></span>
                                            <span class="d-block font-13 mb-10">6 hours ago</span>
                                        </div>
                                        <div class="d-flex">
                                            <a href="#" class="w-75p mr-10"><img class="card-img-top rounded" src="dist/img/gallery/mock1.jpg" alt="Card image cap"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-img-wrap">
                                        <div class="avatar avatar-xs">
                                            <img src="dist/img/avatar6.jpg" alt="user" class="avatar-img rounded-circle">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            <span class="d-block mb-5"><span class="font-weight-500 text-dark text-capitalize">Evie Ono</span><span class="pl-5">joined josh groben team.</span></span>
                                            <span class="d-block font-13">3 hours ago</span>
                                        </div>
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

@endsection