<?php
session_start();
include"connect1.php";

	$prev_sch=$_POST['prev_sch'];
	$prev_class=$_POST['prev_class'];
	$class=$_POST['class'];
	
	$cname=basename($_FILES['img']['name']);
	$imgcheck=pathinfo($cname,PATHINFO_EXTENSION);
	if ($imgcheck != "jpg" && $imgcheck != "png" && $imgcheck != "jpeg"
	
&& $imgcheck != "gif") {
	
		
	
	
		echo "All fields are neccessary";
	}else{
		$use=$_SESSION['user'];
		
	$newname = "img/$use.jpg";
	$newnameb = "img/".$use."b.jpg";
	$newnamep = "img/".$use."p.jpg";
	$img = $use.".jpg";
	$bcert = $use."b.jpg";
	$prev_class = $use."p.jpg";
	
$update = "UPDATE school SET status='1',prev_sch='$prev_sch', prev_class='$prev_class', class='$class', img = '$img', bcert = '$bcert', prev_result = '$prev_class'  WHERE user= '$use'";
	$updated2=$con->query($update);
	
	$upload=move_uploaded_file( $_FILES['img']['tmp_name'], "$newname");
	$uploadb=move_uploaded_file( $_FILES['bcert']['tmp_name'], "$newnameb");
	$uploadp=move_uploaded_file( $_FILES['prev_result']['tmp_name'], "$newnamep");
	
// 		$query = $con->query("INSERT INTO school_img (user,img,bcert,prev_result)VALUES( '$use','$prev_class')");
		header("Location:final.php");
		echo'Bio data uploaded Successfully';
		
	
}
