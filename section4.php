<!DOCTYPE html>
<html lang="en">
<head>
	<title>Zalt</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
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
	
<!--===============================================================================================-->
</head>
<?php
error_reporting(0);
include"connect.php";?>
<body>

<!------ Include the above in your HEAD tag ---------->
<span id="paste" class="alert alert-primary"></span>
<div class="container register">
	 
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>You are 30 seconds away from earning your own money!</p>
                        <input type="submit" name="" value="Login"/><br/>
                    </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-="true">Section 1</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-="false">Section 2</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="sect1-tab" data-toggle="tab" href="#sect1" role="tab" aria-controls="sect1" aria-="false">Section 3</a>
                            </li>
                            
                        </ul>

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Section 1</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                    	<form id="form1">
                                        <div class="form-group">
                                        	
	

                                            <input class="form-control" type="text" value="" name="user" placeholder="Full Name, Surname First">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="date" value="" name="dob" placeholder="Date of Birth" >
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" id="sel" value="" type="text" name="pob" placeholder="Place of Birth">
                                        </div>
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                   <input class="form-control" value="" type="number" name="nomber" placeholder="Phone Number">
                                                   
                                                </label>
                                                <label class="radio inline"> 
                                                    <input class="form-control" value="" type="text" name="roa" placeholder="Residential Address">
                                                    
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                    	
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="foccupation" placeholder="Father's Occupation" value="">
                                        </div>
                                        <div class="form-group">
                                             <input class="form-control" value="" type="text"  name="foa" placeholder="Father's Office Address">
                                        </div>
                                        <div class="form-group">
                                           <select name="religion" class="form-control">
                            <option >Religion</option>
                            <option value="Christian">Christian</option>
                            <option value="Muslim">Muslim</option>
                        </select>
                                        </div>
                                        <div class="form-group">
                                           <select name="sex" class="form-control">
                            <option >Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female" >Female</option>
                        </select>
                                        </div>
                                        <div class="form-group">
                        <input class="form-control" type="number" name="fnomber" value=" " placeholder=" Father's Phone Number">
                                        </div>
                                        <input type="button" class="btnRegister" name="new" onclick="section3()"  value="Register"/>

                                        </form>
                                       
                                    </div>
                                </div>
                            </div>



                            <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h3  class="register-heading">Section 2</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                    	<form id="form3" >
                                        <div class="form-group">
                        <input class="form-control" type="text"  id="moccupation" name="moccupation" placeholder="Mother's Occupation">
                                        </div>
                                        <div class="form-group">
                        <input class="form-control" type="text"  id="athlete"name="athlete" placeholder="Athletic Interest">
                                        </div>
                                        <div class="form-group">
                        <input class="input100" type="text" id="hobby" name="hobby" placeholder="Hobby">
                                        </div>
                                        <div class="form-group">
                        <input class="input100" type="text" id="siblings" name="siblings" placeholder="How many siblings">
                                        </div>
                                        <div class="form-group">
                        <input class="form-control" type="text"  id="moa"name="moa" value=" " placeholder="Mother's Office Address">
                                        </div>
                                        
                                        <div class="form-group">
                        <input class="form-control" type="number" id="" name="mnomber" value="" placeholder=" Mother's Phone Number">
                                        </div>
                                       



                                    </div>
                                    <div class="col-md-6">
                                    	 <div class="form-group">
                                            <select class="form-control" name="part">
                                                <option class="hidden"   disabled>Have you participated in any school or church drama ?</option>
                                                
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </div>
                                        <div class="form-group" >
                                            <select class="form-control" name="singing">
                                                <option class="hidden"   disabled>Singing?</option>
                                                
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </div>
                                    	<div class="form-group">
                                            <select class="form-control" name="excursion">
                                                <option class="hidden"   disabled>Excursion?</option>
                                                
                                               <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </div>
                                    	<div class="form-group">
                                            <select class="form-control" name="recitation">
                                                <option class="hidden"   disabled>Recitation?</option>
                                                
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </div>


                                    </div>

                                        <div class="form-group">

                        <select name="religion" class="form-control">
                            <option >Does He/She lend a helping hand in family business after school ?</option>
                            <option value="yes">Yes</option>
                                                <option value="no">No</option>
                        </select>
                                                          </div>
                                        <div class="form-group" name='help'>
                                            <select class="form-control">
                                                <option class="hidden"  disabled>Does He/She helps with daily house chores?</option>
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" name="hand">
                                                <option class="hidden"   disabled>Does He/She helps take of baby?</option>
                                                
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </div>
                                        
                                        <input type="button" class="btnRegister" name="test2" onclick="section2()" value="Register"/>
                                    </form>
                                    <span id="paste"></span>
                                    </div>
                                </div>
                               </div>


						<div class="tab-pane fade show active" id="sect1" role="tabpanel" aria-labelledby="sect1-tab">
                                <h3  class="register-heading">Section 3</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                    	<form id="form2">
                                        <div class="form-group">
										 <input class="form-control" type="text" name="hospital" value="" placeholder=" Name hospital for emergency issues">                                        
									</div>
                                        <div class="form-group">
										<textarea class="form-control" type="text" name="health" value="" placeholder="Please indicate any health issues"></textarea>                                        </div>
                                        <div class="form-group">
										<textarea class="form-control" type="text" name="behaviour" value=""placeholder="Explain your child's Behaviour"></textarea>                                        </div>
										<div class="form-group">
										<input class="form-control" type="text" name="soo" value=""placeholder="State of origin">                                        </div>
										<div class="form-group">
										<input class="form-control" type="text" name="lga" value=""  placeholder="L.G.A">                                        </div>
                                        


                                   
                                       
                                        <input type="button" onclick="section4()" class="btnRegister"  value="Register"/>
                                        <span id="paste"></span>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
             
            </div>
        </div>

























           




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
	
<!-- 	<script type="text/javascript" src="../js/ajax.js"></script>
<script type="text/javascript" src="../js/check.js"></script> -->

<script type="text/javascript">
	function section2(){
		alert('worries');
		var datum = $("#form3").serialize();
	$.ajax({
		
		url:'update.php',
		type:'POST',
		data:datum,
		success:function(response){
			$('#paste').html(response);

		},
	});
	
}
</script>
<script type="text/javascript">
	function section3(){
		alert('worries');
		var datum = $("#form1").serialize();
	$.ajax({
		
		url:'store.php',
		type:'POST',
		data:datum,
		success:function(response){
			$('#paste').html(response);

		},
	});
	
}
</script>
<script type="text/javascript">
	function section4(){
		alert('worries');
		var datum = $("#form2").serialize();
	$.ajax({
		
		url:'update2.php',
		type:'POST',
		data:datum,
		success:function(response){
			$('#paste').html(response);

		},
	});
	
}
</script>
</body>
</html>