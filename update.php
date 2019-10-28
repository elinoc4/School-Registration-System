<?php
session_start();
include'connect.php';
error_reporting(0);
if (isset($_POST['moa'])) {
	$moccupation = $_POST['moccupation'];
	$user_nomber=$_SESSION['nomber'];
	$mnomber = $_POST['mnomber'];
	$moa = $_POST['moa'];
	
	$singing = $_POST['singing'];
	$excursion = $_POST['excursion'];
	$recitation = $_POST['recitation'];
	$athlete = $_POST['athlete'];
	$hobby = $_POST['hobby'];
	$siblings = $_POST['siblings'];
	$help = $_POST['help'];
	$hand = $_POST['hand'];
	
	$drama = $_POST['drama'];
	$use=$_SESSION['user'];
	$update = "UPDATE school SET mnomber='$mnomber', moa='$moa',singing='$singing',excursion='$excursion',recitation='$recitation',athlete='$athlete',hobby='$hobby', siblings='$siblings',help='$help',hand='$hand',drama='$drama', moccupation='$moccupation' WHERE user= '$use'";
	$ready=mysqli_query($con,$update);
	// $ready=$updated->execute();
	if($ready){
		echo'Section 2 was Saved';
	}
}

	?>