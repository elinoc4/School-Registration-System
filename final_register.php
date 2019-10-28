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
    <title>Basic Foundation Signup</title>
    <meta name="description" content="Basic Foundation School Registration Portal" />
<link href="dist/img/logo.jpeg" rel="icon" type="text/css">
    <!-- Favicon -->
    

    <!-- Custom CSS -->
    <link href="dist/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    
    
	<!-- HK Wrapper -->
	<div class="hk-wrapper">

        <!-- Main Content -->
        <div class="hk-pg-wrapper hk-auth-wrapper">
            <header class="d-flex justify-content-between">
                <a class="d-flex auth-brand align-items-center" href="#">
                    <img class="brand-img d-inline-block mr-5" src="dist/img/logo.jpeg" style="width: 30px;height: 30px; border-radius: 50%" alt="brand" /><span class="text-white font-23">Basic Foundation</span>
                </a>
                
            </header>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-5 pa-0">
                        <div class="auth-cover-img overlay-wrap" style="background-image:url(dist/img/bg.jpg);">
                            <div class="auth-cover-info py-xl-0 pt-100 pb-50">
                                <div class="auth-cover-content w-xxl-75 w-sm-90 w-100">
                                    <h1 class="display-4 text-white mb-20">Imbibing good morales</h1>
                                    <p class="text-white">Giving education for furture advancement.</p>
                                   
                                </div>
                            </div>
                            <div class="bg-overlay bg-trans-dark-50"></div>
                        </div>
                    </div>
                    <div class="col-xl-7 pa-0">
                        <div class="auth-form-wrap py-xl-0 py-50">
                            <div class="auth-form w-xxl-55 w-xl-75 w-sm-90 w-100">
                                <form action="final_reg.php" method="post" >
                                    <h1 class="display-4 mb-10">Sign up</h1>
                                    <p class="mb-30">Create your account to enroll your child</p>
                                    
                                    <div class="form-group">
                                        <input class="form-control" name="nomber" onkeyup="()" placeholder="Number" type="number" id="nommber">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" name="pin" onkeyup="()" placeholder="Enter Pin" type="password" id="pin" min="6">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" name="pword" onkeyup="()" placeholder="Password" type="password" id="pword" min="6">
                                    </div>
                                    <div class="form-group">
                                        <div class="form-group">
                                            <input class="form-control" name="cpword" onkeyup="()" placeholder="Confirm Password" type="password" id="cpword" min="6">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><span class="feather-icon"><i data-feather="eye-off"></i></span></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="custom-control custom-checkbox mb-25">
                                        <input class="custom-control-input" id="same-address" type="checkbox" checked>
                                        <label class="custom-control-label font-14" for="same-address">I have read and agree to the <a href=""><u>term and conditions</u></a></label>
                                    </div>
                                    <button class="btn btn-warning" name="submit" type="submit">Register</button>
                                    
                                    
                                    <p class="text-center">Already have an account? <a href="final_login.php">Log In</a></p>
                                    <p class="text-center" class="alert alert-primary" id="paste"></p>
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
    <script src="vendors/jquery/dist/ajax.js"></script>
    <script type="text/javascript" src="vendors/jquery/dist/ajax.js"></script>
    <script type="text/javascript" src="vendors/jquery/dist/check.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Slimscroll JavaScript -->
<!--     <script src="dist/js/jquery.slimscroll.js"></script>
 -->
    <!-- Fancy Dropdown JS -->
<!--     <script src="dist/js/dropdown-bootstrap-extended.js"></script>
 -->
    <!-- FeatherIcons JavaScript -->
<!--     <script src="dist/js/feather.min.js"></script>
 -->
<!--     Init JavaScript
 -->    <!-- <script src="dist/js/init.js"></script> -->

</body>
<script type="text/javascript">
    function proc(){
    
            
            $.ajax(
        {

            url:'check.php',
            type:"POST",
            data:{check:les},
            success:function(response){
           if (response ='correct') {
            window.location.href='final.php'
           }

}


});
}

</script>
</html>