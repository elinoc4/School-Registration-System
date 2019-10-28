<?php
session_start();
error_reporting(0);

include'connect.php';
if (isset($_POST['user'])) {
	$user = $_POST['user'];
	$sex=$_POST['sex'];
	$dob = $_POST['dob'];
	$pob = $_POST['pob'];
	$nomber = $_POST['nomber'];
	$religion = $_POST['religion'];
	$foccupation = $_POST['foccupation'];
	$foa = $_POST['foa'];
	$fnomber = $_POST['fnomber'];
	$roa = $_POST['roa'];
	$user_id=$_SESSION['id'];
$query = mysqli_query($con,"SELECT * FROM school WHERE user_id='$user_id' AND user !=''");
$count = mysqli_num_rows($query);
$row=mysqli_fetch_assoc($query);
if ($count > 0) {
	die('Please move to section 2 you have an existing registration with Name=>'.$row['user']);
}

if (!empty($user && $sex && $dob&& $pob&& $nomber&& $religion&& $foccupation&& $foa&& $fnomber&& $roa&& $roa)) {
	$qwery = "INSERT INTO school (user,sex,dob,pob,roa,nomber,religion,foccupation,foa,fnomber,user_id) VALUES ('$user','$sex','$dob','$pob','$roa','$nomber','$religion','$foccupation','$foa','$fnomber','$user_id')";
	$insert=mysqli_query($con,$qwery);
	// $insert->execute();
	if ($insert) {
		$_SESSION['user']=$user;
		echo 'Section 1 was succesfully Inserted';
		
	}else{
		echo'Nothing found';
	
}
		
		
	}else{
	
	die("All fields are necessary for this section!!!");}

	}else{
	echo "you just hit this link with anj incorrect request";
}
?>