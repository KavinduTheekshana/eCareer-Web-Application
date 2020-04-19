
@extends('layouts.main')

@section('content')

            
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
											<div class="media-img-wrap  d-flex">
												<div class="avatar">
													<img src="dist/img/avatar12.jpg" alt="user" class="avatar-img rounded-circle">
												</div>
											</div>
											<div class="media-body">
												<div class="text-white text-capitalize display-6 mb-5 font-weight-400">kavindu Theekshana</div>
												<div class="font-14 text-white"><span class="mr-5"><span class="mr-5">kavindutheekshana@gmail.com</span></span></div>
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


											<div class="card card-profile-feed " style="padding: 30px">
                                   
                                                <h5 class="hk-sec-title">Details</h5>
														
                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <input type="text" class="form-control mt-15" placeholder="Input Box">
                                                            </div>
                                                            
                                                            <div class="col-md-7">
                                                                <input type="text" class="form-control mt-15" placeholder="Input Box">
                                                            </div>

                                                            <button class="btn btn-primary ml-20 mt-20">&nbsp &nbsp Update &nbsp &nbsp</button>
                                                        </div>

                                                        <hr>
                                                        <h5 class="hk-sec-title">Password</h5>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control mt-15" placeholder="Input Box">
                                                            </div>
                                                            
                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control mt-15" placeholder="Input Box">
                                                            </div>

                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control mt-15" placeholder="Input Box">
                                                            </div>

                                                            <button class="btn btn-primary ml-20 mt-20">&nbsp &nbsp Reset Password &nbsp &nbsp</button>
                                                        </div>

                                                        <hr>
                                                        <h5 class="hk-sec-title">Profile Picture</h5>
                                                        <div class="row mt-15">
                                                            <div class="col-md-12">

                                                                <div class="col-sm">
                                                                    <input type="file" id="input-file-now" class="dropify" />
                                                                </div>
                                                        
                                                            </div>
                                                            <br>
                                                            <hr>
                                                            <button class="btn btn-primary ml-20 mt-20">&nbsp &nbsp Change Profile Picture &nbsp &nbsp</button>
                                                            
                                                

                                                            
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

            @endsection