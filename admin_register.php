<?php
session_start();
include"connect.php";
error_reporting(E_ALL);
$msg='';
if (isset($_POST['submit'])) {
	$nomber = $_POST['nomber'];
	$pword = $_POST['pword'];
	$cpword = $_POST['cpword'];
if (strlen($pword)<8) {
		die("Password too short");
	}
	if (empty($nomber && $pword && $cpword)) {
		die("All fields are necessary!!!");
		
	}elseif (preg_match('/[0-9]+/', $_POST['nomber'])) {
		
	
			$query = mysqli_query($con,"SELECT * FROM admin WHERE nomber='$nomber'");
			$count=mysqli_num_rows($query);;
			
			
			if ($count > 0) {die('Number already in use');}
		
			if ($pword!== $cpword) {
		
				die("PASSWORD DON'T MATCH");

			}$pword1=password_hash($pword,PASSWORD_BCRYPT);
			$query="INSERT INTO admin (nomber,pword)VALUES('$nomber', '$pword1')";
				$insert= mysqli_query($con,$query);
				// $registered=$insert->execute();
				if ($registered) {
					$check = mysqli_query($con,"SELECT id FROM school_user WHERE nomber='$nomber'");
while ($row = mysqli_fetch_assoc($check)) {
	$id = $row['id'];
}
    					$_SESSION['admin']=$id;

					echo'correct';
					
				}
	
	}else{
		echo"Please use just Numbers";
	}
}
?>
