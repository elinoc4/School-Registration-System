<?php
session_start();
error_reporting(0);
if (isset($_SESSION['id'])) {
	unset($_SESSION['id']);
	header("Location:final_login.php");
}else{
unset($_SESSION['admin']);



header("Location:admin_login.php");

}

?>