<!DOCTYPE html>
<!-- 
Template Name: Marvin - Responsive Bootstrap 4 Admin Dashboard Template
Author: Hencework
Contact: https://hencework.ticksy.com/

License: You must have a valid license purchased only from templatemonster to legally use the template for your project.
-->
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>E-Career | Find Your Career</title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
        window.Laravel = {csrfToken: '{{ csrf_token() }}'}
    </script>

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
	
	<!-- vector map CSS -->
    <link href="vendors/vectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" type="text/css" />
	
	<link href="vendors/apexcharts/dist/apexcharts.css" rel="stylesheet" type="text/css" />
	
    <!-- Toggles CSS -->
    <link href="vendors/jquery-toggles/css/toggles.css" rel="stylesheet" type="text/css">
    <link href="vendors/jquery-toggles/css/themes/toggles-light.css" rel="stylesheet" type="text/css">

        <!-- Data Table CSS -->
        <link href="vendors/datatables.net-dt/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
        <link href="vendors/datatables.net-responsive-dt/css/responsive.dataTables.min.css" rel="stylesheet" type="text/css" />

        <!-- Bootstrap Dropzone CSS -->
    <link href="vendors/dropify/dist/css/dropify.min.css" rel="stylesheet" type="text/css"/>
    
    <!-- Bootstrap Dropzone CSS -->
    <link href="vendors/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css"/>
    
     <!-- select2 CSS -->
     <link href="vendors/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />
	


    <!-- Custom CSS -->
    <link href="dist/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- Preloader 
    <div class="preloader-it">
        <div class="loader-pendulums"></div>
    </div>
    --><!-- /Preloader -->
	
	<!-- HK Wrapper -->
	<div class="hk-wrapper hk-vertical-nav">

        <!-- Top Navbar -->
        <nav class="navbar navbar-expand-xl navbar-light fixed-top hk-navbar">
            <a id="navbar_toggle_btn" class="navbar-toggle-btn nav-link-hover" href="javascript:void(0);"><span class="feather-icon"><i data-feather="menu"></i></span></a>
            <a class="navbar-brand font-weight-700" href="dashboard1.html">
                E-Career
            </a>
            <ul class="navbar-nav hk-navbar-content">
                



          
                <li class="nav-item dropdown dropdown-authentication">
                    <a class="nav-link dropdown-toggle no-caret" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media">
                            <div class="media-img-wrap">
                                <div class="avatar">
                                    <img src="dist/img/avatar12.jpg" alt="user" class="avatar-img rounded-circle">
                                </div>
                                <span class="badge badge-success badge-indicator"></span>
                            </div>
                            <div class="media-body">
                                <span>Madelyn Shane<i class="zmdi zmdi-chevron-down"></i></span>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
                        <a class="dropdown-item" href="profile.html"><i class="dropdown-icon zmdi zmdi-account"></i><span>Profile</span></a>
                        <div class="dropdown-divider"></div>
                        
                        <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-power"></i><span>Log out</span></a>
                    </div>
                </li>
            </ul>
        </nav>
        <form role="search" class="navbar-search">
            <div class="position-relative">
                <a href="javascript:void(0);" class="navbar-search-icon"><span class="feather-icon"><i data-feather="search"></i></span></a>
                <input type="text" name="example-input1-group2" class="form-control" placeholder="Type here to Search">
                <a id="navbar_search_close" class="navbar-search-close" href="#"><span class="feather-icon"><i data-feather="x"></i></span></a>
            </div>
        </form>
        <!-- /Top Navbar -->

        <!-- Vertical Nav -->
        <nav class="hk-nav hk-nav-dark">
            <a href="javascript:void(0);" id="hk_nav_close" class="hk-nav-close"><span class="feather-icon"><i data-feather="x"></i></span></a>
            <div class="nicescroll-bar">
                <div class="navbar-nav-wrap">
                    <ul class="navbar-nav flex-column">

                        <li class="nav-item">
                            <a class="nav-link" href="dashboard" >
                                <span class="feather-icon"><i data-feather="activity"></i></span>
                                <span class="nav-link-text">Dashboard</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="users" >
                                <span class="feather-icon"><i data-feather="users"></i></span>
                                <span class="nav-link-text">Users</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="qualifications" >
                                <span class="feather-icon"><i data-feather="zap"></i></span>
                                <span class="nav-link-text">User Qualifications</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="addqualifications" >
                                <span class="feather-icon"><i data-feather="plus-square"></i></span>
                                <span class="nav-link-text">Add Qualifications</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="category" >
                                <span class="feather-icon"><i data-feather="layers"></i></span>
                                <span class="nav-link-text">Add Categories</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="profile" >
                                <span class="feather-icon"><i data-feather="user-check"></i></span>
                                <span class="nav-link-text">Profile</span>
                            </a>
                        </li>

            
 
                    </ul>

       
                  
     
                </div>
            </div>
        </nav>
        <div id="hk_nav_backdrop" class="hk-nav-backdrop"></div>
        <!-- /Vertical Nav -->

    
        <!-- /Setting Panel -->

        <!-- Main Content -->
        <div class="hk-pg-wrapper">

@yield('content')


   <!-- Footer -->
   <div class="hk-footer-wrap container">
    <footer class="footer">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <p>Powerd by<a href="www.creatxsoftware.com" class="text-dark" target="_blank">E-Career</a> © 2020</p>
            </div>
            <div class="col-md-6 col-sm-12">
                <p class="d-inline-block">Follow us</p>
                <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-facebook"></i></span></a>
                <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-twitter"></i></span></a>
                <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-google-plus"></i></span></a>
            </div>
        </div>
    </footer>
</div>
<!-- /Footer -->
</div>
<!-- /Main Content -->

</div>
<!-- /HK Wrapper -->

<!-- jQuery -->
<script src="vendors/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="vendors/popper.js/dist/umd/popper.min.js"></script>
<script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Slimscroll JavaScript -->
<script src="dist/js/jquery.slimscroll.js"></script>

<!-- Fancy Dropdown JS -->
<script src="dist/js/dropdown-bootstrap-extended.js"></script>

<!-- FeatherIcons JavaScript -->
<script src="dist/js/feather.min.js"></script>

<!-- Toggles JavaScript -->
<script src="vendors/jquery-toggles/toggles.min.js"></script>
<script src="dist/js/toggle-data.js"></script>

<!-- Counter Animation JavaScript -->
<script src="vendors/waypoints/lib/jquery.waypoints.min.js"></script>
<script src="vendors/jquery.counterup/jquery.counterup.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="vendors/raphael/raphael.min.js"></script>
<script src="vendors/morris.js/morris.min.js"></script>

<!-- EChartJS JavaScript -->
<script src="vendors/echarts/dist/echarts-en.min.js"></script>

<!-- Sparkline JavaScript -->
<script src="vendors/jquery.sparkline/dist/jquery.sparkline.min.js"></script>

<!-- Vector Maps JavaScript -->
<script src="vendors/vectormap/jquery-jvectormap-2.0.3.min.js"></script>
<script src="vendors/vectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="dist/js/vectormap-data.js"></script>


<!-- Owl JavaScript -->
<script src="vendors/owl.carousel/dist/owl.carousel.min.js"></script>


<!-- Init JavaScript -->
<script src="dist/js/init.js"></script>
<script src="dist/js/dashboard-data.js"></script>

<!-- Dropify JavaScript -->
<script src="vendors/dropify/dist/js/dropify.min.js"></script>

<!-- Dropzone JavaScript -->
<script src="vendors/dropzone/dist/dropzone.js"></script>

<!-- Form Flie Upload Data JavaScript -->
<script src="dist/js/form-file-upload-data.js"></script>

  <!-- Select2 JavaScript -->
  <script src="vendors/select2/dist/js/select2.full.min.js"></script>
  <script src="dist/js/select2-data.js"></script>

    <!-- Data Table JavaScript -->
    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="vendors/datatables.net-dt/js/dataTables.dataTables.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="dist/js/dataTables-data.js"></script>

    <script src="{{asset('js/app.js')}}"></script>


</body>

</html>