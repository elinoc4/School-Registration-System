<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("Location:final_login.php");
}
$id = $_SESSION['id'];
include"connect.php";
    $query_sch = mysqli_query($con,"SELECT * FROM school WHERE user_id = '$id' && status = '1'");
    // $query_sch->execute();
    $count = mysqli_num_rows($query_sch);
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
    <title>User Dashboard</title>
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
                <li class="nav-item">
                    <a id="navbar_search_btn" class="nav-link nav-link-hover" href="javascript:void(0);"><i class="ion ion-ios-search"></i></a>
                </li>
                <li class="nav-item">
                    <a id="settings_toggle_btn" class="nav-link nav-link-hover" href="javascript:void(0);"><i class="ion ion-ios-settings"></i></a>
                </li>
                
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
                                <span><i class="zmdi zmdi-chevron-down"></i></span>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
                          
                        
                        <a class="dropdown-item" href="logout.php"><i class="dropdown-icon zmdi zmdi-power"></i><span>Log out</span></a>
                    </div>
                </li>
            </ul>
        </nav>
        <form role="search" class="navbar-search">
            <div class="position-relative">
                <a href="javascript:void(0);" class="navbar-search-icon"><i class="ion ion-ios-search"></i></a>
                <input type="text" name="example-input1-group2" class="form-control" placeholder="Type here to Search">
                <a id="navbar_search_close" class="navbar-search-close" href="#"><i class="ion ion-ios-close"></i></a>
            </div>
        </form>
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
                                <span class="nav-link-text">Print Schedule</span>
                            </a>
                            <ul id="dash_drp" class="nav flex-column collapse collapse-level-1">
                                <li class="nav-item">
                                    <ul class="nav flex-column">
                                       
                                        <?php while ($row = mysqli_fetch_assoc($query_sch)) {
                        
                                            echo '<li class="nav-item"><a href="pdfschedule.php?id='.$row["id"].'" target="_blank">'.$row["user"].'</a>
                                            
                                        </li>'; } ?>
                                      
                                        
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        
                    </ul>
                     <!-- <ul class="navbar-nav flex-column">
                        <li class="nav-item active">
                            <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#dash_drp1">
                                <i class="ion ion-ios-keypad"></i>
                                <span class="nav-link-text">Children/Child Profile</span>
                            </a>
                            <ul id="dash_drp1" class="nav flex-column collapse collapse-level-1">
                                <li class="nav-item">
                                    <ul class="nav flex-column">
                                        
                                        
                                        
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        
                    </ul> -->
                   
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
                        <!---DCDFGKJFDJGILHIUHGIUHITRGILFHKJGDFLJKGLJKDFGKJFHLGJKHFKJLDHGJKLDHFKLJGHDFJKHGJKFHKJGHKFHGKJLFDG---->
                       <!--  <div class="hk-row">
							<div class="col-lg-3 col-md-6">
								<div class="card card-sm">
									<div class="card-body">
										<div class="d-flex justify-content-between mb-5">
											<div>
												<span class="d-block font-15 text-dark font-weight-500">Users</span>
											</div>
											<div>
												<span class="text-success font-14 font-weight-500">+10%</span>
											</div>
										</div>
										<div class="text-center">
											<span class="d-block display-4 text-dark mb-5">36.1K</span>
											<small class="d-block">172,458 Target Users</small>
										</div>
									</div>
								</div>
							
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="card card-sm">
									<div class="card-body">
										<div class="d-flex justify-content-between mb-5">
											<div>
												<span class="d-block font-15 text-dark font-weight-500">Campaign Leads</span>
											</div>
											<div>
												<span class="text-success font-14 font-weight-500">+12.5%</span>
											</div>
										</div>
										<div class="text-center">
											<span class="d-block display-4 text-dark mb-5"><span class="counter-anim">168,856</span></span>
											<small class="d-block">472,458 Targeted</small>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="card card-sm">
									<div class="card-body">
										<div class="d-flex justify-content-between mb-5">
											<div>
												<span class="d-block font-15 text-dark font-weight-500">New Contacts</span>
											</div>
											<div>
												<span class="text-warning font-14 font-weight-500">-2.8%</span>
											</div>
										</div>
										<div class="text-center">
											<span class="d-block display-4 text-dark mb-5">73</span>
											<small class="d-block">100 Targeted</small>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="card card-sm">
									<div class="card-body">
										<div class="d-flex justify-content-between mb-5">
											<div>
												<span class="d-block font-15 text-dark font-weight-500">Win/Loss Ratio</span>
											</div>
											<div>
												<span class="text-danger font-14 font-weight-500">-75%</span>
											</div>
										</div>
										<div class="text-center">
											<span class="d-block display-4 text-dark mb-5">48:65</span>
											<small class="d-block">42:32 Targeted</small>
										</div>
									</div>
								</div>
							</div>							
						</div> -->
						<div class="hk-row">
							<div class="col-lg-12">
						

