<?php
session_start();
include"connect.php";
$health=$_POST['health'];
$behaviour=$_POST['behaviour'];
$soo=$_POST['soo'];
$use=$_SESSION['user'];
$lga=$_POST['lga'];
$hospital=$_POST['hospital'];

	$use = $_SESSION['user'];
if (isset($_POST['health'])) {
	$update = "UPDATE school SET health='$health',behaviour='$behaviour',soo='$soo',lga='$lga',hospital='$hospital' WHERE user= '$use'";
	$ready=mysqli_query($con,$update);
	// $ready=$updated2->execute();
	if($ready){
		echo'Section 3 was Saved';
	}
}


?>