<?php  

$db_host = "localhost"; 
// Place the username for the MySQL database here 
$db_username = "root";  
// Place the password for the MySQL database here 
$db_pass = "";  
// Place the name for the MySQL database here 
$db_name = "thesis"; 

// Run the actual connection here  
//$con=mysqli_connect("$db_host","$db_username","$db_pass") or die ("could not connect to mysql");
//mysqli_select_db($con,"$db_name") or die ("no database");              

try{
$con = new PDO("mysql:host=localhost;dbname=thesis","root","");
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
	echo $e->getMessage();
	die();
}
