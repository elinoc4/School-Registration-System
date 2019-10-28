<?php
session_start();
if(!isset($_SESSION['admin'])){
    header('Location:admin_login.php');
}
include"connect.php";
$query = mysqli_query($con,"SELECT * FROM school WHERE   user !='' AND status = '1'");
$query_inactive = mysqli_query($con,"SELECT * FROM school WHERE   user !='' AND status = ''");
$active_count = mysqli_num_rows($query);;
$inactive_count = mysqli_num_rows($query_inactive);
?>

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
    <title>Admin Dashboard</title>
    <link href="dist/img/logo.jpeg" rel="icon" type="text/css">
    <meta name="description" content="Basic Foundation School Registration Portal" />

    <!-- Favicon -->
	
	<!-- vector map CSS -->
    <link href="vendors/vectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" type="text/css" />

    <!-- Toggles CSS -->
    <link href="vendors/jquery-toggles/css/toggles.css" rel="stylesheet" type="text/css">
    <link href="vendors/jquery-toggles/css/themes/toggles-light.css" rel="stylesheet" type="text/css">
	
	<!-- Toastr CSS -->
    <link href="vendors/jquery-toast-plugin/dist/jquery.toast.min.css" rel="stylesheet" type="text/css">

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
            <ul class="navbar-nav hk-navbar-content">
               
                <li class="nav-item dropdown dropdown-authentication">
                    <a class="nav-link dropdown-toggle no-caret" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media">
                            <div class="media-img-wrap">
                                <div class="avatar">
                                    <img src="dist/img/avatar10.jpg" alt="user" class="avatar-img rounded-circle">
                                </div>
                                <span class="badge badge-success badge-indicator"></span>
                            </div>
                            <div class="media-body">
                                <span>Administrator<i class="zmdi zmdi-chevron-down"></i></span>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
                        
                        <a class="dropdown-item" href="logout.php"><i class="dropdown-icon zmdi zmdi-power"></i><span>Log out</span></a>
                    </div>
                </li>
            </ul>
        </nav>
        
        <!-- /Top Navbar -->

        <!-- Vertical Nav -->
        <nav class="hk-nav hk-nav-light">
            <a href="javascript:void(0);" id="hk_nav_close" class="hk-nav-close"><span class="feather-icon"><i data-feather="x"></i></span></a>
            <div class="nicescroll-bar">
                <div class="navbar-nav-wrap">
                    <ul class="navbar-nav flex-column">
                        <li class="nav-item active">
                            <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#dash_drp">
                                <i class="ion ion-ios-keypad"></i>
                                <span class="nav-link-text">Dashboard</span>
                            </a>
                            <ul id="dash_drp" class="nav flex-column collapse collapse-level-1">
                                <li class="nav-item">
                                    <ul class="nav flex-column">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="crud.php?check=all">Update Student List</a>
                                        </li>
                                         <li class="nav-item">
                                            <a class="nav-link" href="school_admin.php">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="school_sms.php">Send Message</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="crud.php?pin=pin">View Pin</a>
                                        </li>
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
        
        <!-- /Setting Panel -->

        <!-- Main Content -->
        <div class="hk-pg-wrapper">
			<!-- Container -->
            <div class="container-fluid mt-xl-50 mt-sm-30 mt-15">
                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hk-row">
							<div class="col-lg-3 col-md-6">
								<div class="card card-sm">
									<div class="card-body">
										<div class="d-flex justify-content-between mb-5">
											<div>
												<span class="d-block font-15 text-dark font-weight-500">Registered Student</span>
											</div>
											<div>
												<span class="text-success font-14 font-weight-500"></span>
											</div>
										</div>
										<div class="text-center">
											<span class="d-block display-4 text-dark mb-5"><?php echo $active_count;?></span>
											<small class="d-block"></small>
										</div>
									</div>
								</div>
							
							</div>
							
							
											
						</div>
						<div class="hk-row">
							<div class="col-lg-12">
						

