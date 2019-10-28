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
    <title>User Login</title>
    <link href="dist/img/logo.jpeg" rel="icon" type="text/css">
    <meta name="description" content="Basic Foundation School Registration Portal" />

    <!-- Favicon -->
    

    <!-- Custom CSS -->
    <link href="dist/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    
   
	<!-- HK Wrapper -->
	<div class="hk-wrapper">

        <!-- Main Content -->
        <div class="hk-pg-wrapper hk-auth-wrapper">
            <header class="d-flex justify-content-between align-items-center">
                <a class="d-flex auth-brand align-items-center" href="#">
                <img class="brand-img d-inline-block mr-5" src="dist/img/logo.jpeg" alt="brand" style="width: 30px;height: 30px;border-radius: 50%;" /><span class="text-white font-23">Basic Foundation</span>
                </a>
                
            </header>
            <div class="container-fluid">
                <div class="row">
                   <div class="col-xl-5 pa-0">
                        <div id="owl_demo_1" class="owl-carousel dots-on-item owl-theme">
                            <div class="fadeOut item auth-cover-img overlay-wrap" style="background-image:url(dist/img/bg2.jpeg);">
                                <div class="auth-cover-info py-xl-0 pt-100 pb-50">
                                    <div class="auth-cover-content text-center w-xxl-75 w-sm-90 w-xs-100">
                                        <h1 class="display-4 text-white mb-20">Equiping the child for tomorow</h1>
                                        <p class="text-white">School of excelence and high value</p>
                                    </div>
                                </div>
                                <div class="bg-overlay bg-trans-dark-50"></div>
                            </div>
                            <div class="fadeOut item auth-cover-img overlay-wrap" style="background-image:url(dist/img/bg.jpg);">
                                <div class="auth-cover-info py-xl-0 pt-100 pb-50">
                                    <div class="auth-cover-content text-center w-xxl-75 w-sm-90 w-xs-100">
                                        <h1 class="display-4 text-white mb-20">Imbibing good morales</h1>
                                        <p class="text-white">Giving education for furture advancement</p>
                                    </div>
                                </div>
                                <div class="bg-overlay bg-trans-dark-50"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 pa-0">
                        <div class="auth-form-wrap py-xl-0 py-50">
                            <div class="auth-form w-xxl-55 w-xl-75 w-sm-90 w-xs-100">
                                <form  action="process.php" method="post">
                                    <h1 class="display-4 mb-10">Welcome Back</h1>
                                    <p class="mb-30"></p>
                                    <div class="form-group">
                                        <input class="form-control" type="number" name="nomber" placeholder="Number">
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input class="form-control" name="pword" placeholder="Password" type="password">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><span class="feather-icon"><i data-feather="eye-off"></i></span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-25">
                                        <input class="custom-control-input" id="same-address" type="checkbox" checked>
                                        <label class="custom-control-label font-14" for="same-address">Keep me logged in</label>
                                    </div>
                                    <button class="btn btn-warning btn-block" name="submit" type="submit">Login</button>
                                    <p class="font-14 text-center mt-15">Having trouble logging in?</p>
                                    <div class="option-sep"><p id="paste" class="alert alert-primary"></p></div>
                                    
                                    
                                    <p class="text-center">Do have an account yet? <a href="final_register.php">Sign Up</a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Main Content -->

    </div>
	<!-- /HK Wrapper -->

    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script  src="vendors/jquery/dist/ajax.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Slimscroll JavaScript -->
    <script src="dist/js/jquery.slimscroll.js"></script>

    <!-- Fancy Dropdown JS -->
    <script src="dist/js/dropdown-bootstrap-extended.js"></script>

    <!-- Owl JavaScript -->
    <script src="vendors/owl.carousel/dist/owl.carousel.min.js"></script>

    <!-- FeatherIcons JavaScript -->
    <script src="dist/js/feather.min.js"></script>

    <!-- Init JavaScript -->
    <script src="dist/js/init.js"></script>
    <script src="dist/js/login-data.js"></script>
</body>

</html>