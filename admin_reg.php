<!DOCTYPE html>

<html>
<head>
  <title>| Signup</title>
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<link href="css/signin.css" rel="stylesheet">
<link href="css<!DOCTYPE html>
<html lang="en">
<head>
	<title>Zalt</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<div class="container-fluid" >
  <div class="row" >
    <div class="col-md-12" style="border: 0px;padding: 0px;margin-bottom:0px;">
  <?php include"../nav.php";?>
</div>

	<div class="limiter" style="border: 0px;padding-top: 0px;margin-top:0px;">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50" style=" width: 600px;">
				<span class="login100-form-title p-b-41">
					Account Signup
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" action="admin_register.php" method="post">

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="number" name="nomber" placeholder="Number">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pword" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" id="sel" type="password" name="cpword" placeholder="Confirm Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>
					 <p id="sel" class="alert alert-primary" style="display: none;"></p>

					
					
					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn" name="submit" type="submit">
							Signup
						</button>
						
						
					</div>
					<p class="alert alert-primary" style="display: none;"  id="paste"></p>

				</form>
				
							<span class="text-white">Registered already?<a class="text-primary" href="final_login.php"> Login</a></span>

			</div>
		</div>

	</div>

	


	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<script type="text/javascript" src="js/ajax.js"></script>
<script type="text/javascript" src="../js/check.js"></script>

<!-- <script type="text/javascript">
	function proc(){
	var les = prompt('ENTER YOUR PASSWORD');
			
			$.ajax(
		{

			url:'final_reg.php',
			type:"POST",
		    data:{check:les},
		    success:function(response){
		   if (response ='correct') {
		   	window.location.href='final.php'
		   }

}


});
}

</script> -->
</body>
</html>