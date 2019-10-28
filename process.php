<?php
session_start();
error_reporting(0);
include"connect.php";
  if (isset($_POST['submit'])) {
  $nomber=$_POST['nomber'];
  $pword=$_POST['pword'];
  

 
   
      $query = mysqli_query($con,"SELECT * FROM school_user WHERE nomber='$nomber'");
    //   $query = mysqli_query($con,"SELECT pword FROM school_user WHERE nomber='$nomber'");
    // $hashhed = $query->execute();
     while ($row = mysqli_fetch_assoc($query)) {
  $hashed = $row['pword'];
}
  
      
      if (password_verify($pword,$hashed)) {
     
      $query = mysqli_query($con,"SELECT * FROM school_user WHERE nomber='$nomber' AND pword='$hashed'");
     while ($row = mysqli_fetch_assoc($query)) {
  $id = $row['id'];
}
    $_SESSION['id']=$id;
    $_SESSION['nomber']=$nomber;
        echo "WELCOME BACK!!!";
       
      }else{
        echo "Wrong Login credentials";
 }                
}

if (isset($_POST['admin'])) {
  $nomber=$_POST['nomber'];
  $pword=$_POST['pword'];
  

 
   
      $query = mysqli_query($con,"SELECT * FROM admin WHERE nomber='$nomber'");
    //   $query = mysqli_query($con,"SELECT pword FROM school_user WHERE nomber='$nomber'");
    // $hashhed = $query->execute();
     while ($row = mysqli_fetch_assoc($query)) {
  $hashed = $row['pword'];
}
  
      
      if (password_verify($pword,$hashed)) {
     
      $query = mysqli_query($con,"SELECT * FROM admin WHERE nomber='$nomber' AND pword='$hashed'");
     while ($row = mysqli_fetch_assoc($query)) {
  $id = $row['id'];
}
    $_SESSION['admin']=$id;
    $_SESSION['nomber']=$nomber;
        echo "WELCOME BACK!!!";
       
      }else{
        echo "Wrong Login credentials";
 }                
}


      if (isset($_POST['check'])) {
  $pword=$_POST['check'];

if ($pword=='asdf') {
  $_SESSION['pass']=$pword;
  echo"correct"; 
}
}
 if (isset($_POST['de'])) {
  $id=$_POST['de'];

$query = mysqli_query($con,"DELETE FROM tut WHERE id='$id'");
if ($query) {
  echo"Deleted";
}
}
 if (isset($_POST['edit'])) {
  $id=$_POST['edit'];

if ($pword=='asdf') {
  $_SESSION['pass']=$pword;
  echo"correct";
}
}
 