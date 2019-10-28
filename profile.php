<?php session_start();?>
   <!DOCTYPE html>
<!-- 
Template Name: Deepor - Responsive Bootstrap 4 Admin Dashboard Template
Author: Hencework

License: You must have a valid license purchased only from templatemonster to legally use the template for your project.
-->
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Deepor I Profile</title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

    <!-- Favicon -->
    

    <!-- Toggles CSS -->
    <link href="vendors/jquery-toggles/css/toggles.css" rel="stylesheet" type="text/css">
    <link href="vendors/jquery-toggles/css/themes/toggles-light.css" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="dist/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    
    
	<!-- HK Wrapper -->
	<div class="hk-wrapper hk-vertical-nav">

        <!-- Top Navbar -->
        <nav class="navbar navbar-expand-xl navbar-light fixed-top hk-navbar">
            <a id="navbar_toggle_btn" class="navbar-toggle-btn nav-link-hover" href="javascript:void(0);"><i class="ion ion-ios-menu"></i></a>
            <a class="navbar-brand" href="dashboard1.html">
                <img class="brand-img d-inline-block mr-5" src="dist/img/logo.png" alt="brand" />Basic Foundation
            </a>
            
        </nav>
        Mitsoku

        <!-- /Top Navbar -->

        <!-- Vertical Nav -->
        <nav class="hk-nav hk-nav-light">
           
            <div class="nicescroll-bar">
                <div class="navbar-nav-wrap">
                    <ul class="navbar-nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#dash_drp">
                                <i class="ion ion-ios-keypad"></i>
                                <span class="nav-link-text">Dashboard</span>
                            </a>
                            <ul id="dash_drp" class="nav flex-column collapse collapse-level-1">
                                <li class="nav-item">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="final.php">Home</a>
                                        </li>
                                        <!-- <li class="nav-item">
                                            <a class="nav-link" href="dashboard2.html">Project</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="dashboard3.html">Statistics</a>
                                        </li> -->
                                    </ul>
                                </li>
                            </ul>
                        </li>
                       
                    </ul>
                </div>
            </div>
        </nav>
        <div id="hk_nav_backdrop" class="hk-nav-backdrop"></div>
        <!-- /Vertical Nav -->

        <!-- Setting Panel -->
        <div class="hk-settings-panel">
            
            <img class="d-none" src="dist/img/logo-light.png" alt="brand" />
            <img class="d-none" src="dist/img/logo-dark.png" alt="brand" />
        </div>
        <!-- /Setting Panel -->

        <!-- Main Content -->
        <div class="hk-pg-wrapper px-0">
			<!-- Container -->
            <div class="container-fluid">
                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12 pa-0">
                        <div class="profile-cover-wrap overlay-wrap">
                            <div class="profile-cover-img" style="background-image:url('dist/img/bg1.jpg')"></div>
							<div class="bg-overlay bg-trans-dark-60"></div>
							<div class="container profile-cover-content py-50">
								<div class="hk-row"> 
									<div class="col-lg-6">
										<div class="media align-items-center">
											<div class="media-img-wrap  d-flex">
												<div class="avatar">
                                                    <?php

$use = $_GET['name'];
include"connect.php";
    $query= mysqli_query($con,"SELECT * FROM school LEFT JOIN school_img ON school.user=school_img.user AND school.user = '$use'");
    while ($row = mysqli_fetch_assoc($query)) { $name= $row['user'];$img= $row['img'];?>
       
													<?php echo  '<img src="data:image/jpeg;base64,'.base64_encode($row["img"]).'" style="width:70px;height:50px;padding:0px;margin:0px;border-radius:20%">' ;?>
												</div>
											</div>
											<div class="media-body">
												<div class="text-white text-capitalize display-6 mb-5 font-weight-400"><?php echo $name; }?></div>
												<div class="font-14 text-white"><span class="mr-5"><span class="font-weight-500 pr-5">124</span><span class="mr-5">Followers</span></span><span><span class="font-weight-500 pr-5">45</span><span>Following</span></span></div>
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
										<div class="col-lg-8">
											<div class="card card-profile-feed">
                                                <div class="card-header card-header-action">
													<div class="media align-items-center">
														<div class="media-img-wrap d-flex mr-10">
															
														</div>
														
													</div>
													
												</div>
												
												
                                            </div>
											

<!--sdgdsfhsghgfghdgfshfdgddgsfadfsdfsdfsdf---->										

									</div>
								</div>
							</div>
						</div>	
					</div>
                </div>
                <!-- /Row -->
            </div>
            <!-- /Container -->

            <!-- Footer -->
            <div class="hk-footer-wrap container">
                <footer class="footer">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <p>Pampered by<a href="#" class="text-dark" >Hencework</a> © 2019</p>
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
	
	<!-- twitter JavaScript -->
    <script src="dist/js/twitterFetcher.js"></script>
    <script src="dist/js/widgets-data.js"></script>
	
	<!-- Owl JavaScript -->
    <script src="vendors/owl.carousel/dist/owl.carousel.min.js"></script>

    <!-- Owl Init JavaScript -->
    <script src="dist/js/owl-data.js"></script>
	
    <!-- Toggles JavaScript -->
    <script src="vendors/jquery-toggles/toggles.min.js"></script>
    <script src="dist/js/toggle-data.js"></script>

    <!-- Init JavaScript -->
    <script src="dist/js/init.js"></script>

</body>

</html>