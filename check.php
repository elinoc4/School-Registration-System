<?php
if (isset($_POST['submit'])) {
	$nomber = $_POST['nomber'];
	$pword = $_POST['pword'];
	$cpword = $_POST['cpword'];
	$pin = $_POST['pin'];
if (strlen($pword)<8) {
		die("Password too short");
	}
	if (empty($nomber && $pword && $cpword)) {
		die("All fields are necessary!!!");
		
	}elseif (preg_match('/[0-9]+/', $_POST['nomber'])) {
		
	
			$query = mysqli_query($con,"SELECT * FROM school_user WHERE nomber='$nomber'");
			$count=mysqli_num_rows($query);
			$query_pin = mysqli_query($con,"SELECT * FROM pin WHERE pin='$pin' AND freq ='1'");
			$count_pin=mysqli_num_rows($query_pin);
			$query_pin1 = mysqli_query($con,"SELECT * FROM pin WHERE pin='$pin'");
			$count_pin1=mysqli_num_rows($query_pin1);
			
			
			if ($count > 0) {die('Number already in use');}
			if ($count_pin1 ==0 ) {die('This pin is invalid');}
			if ($count_pin > 0 ) {die('This pin has been used');}


				}else{
		echo"Please use just Numbers";
	}
}