<?php
include'connect.php';
session_start();
if (isset($_POST['moa'])) {
	$moccupation = $_POST['moccupation'];
	
	$mnomber = $_POST['mnomber'];
	$moa = $_POST['moa'];
	$part = $_POST['part'];
	$singing = $_POST['singing'];
	$excursion = $_POST['excursion'];
	$recitation = $_POST['recitation'];
	$athlete = $_POST['athlete'];
	$hobby = $_POST['hobby'];
	$siblings = $_POST['siblings'];
	$help = $_POST['help'];
	$hand = $_POST['hand'];
	$lga = $_POST['lga'];
	$drama = $_POST['drama'];
	$use=$_SESSION['user'];
	$update = "UPDATE school SET mnomber=?, moa='',part='',singing='',excursion='',recitation='',athlete='',$hobby='$hobby', siblings='$siblings',help='$help',hand='$hand',lga='$lga',drama='$drama' WHERE user= $use";
	$updated=$con->prepare($update);
	$updated->execute([$mnomber,$moa,$part,$singing,$excursion,$recitation,$athlete,,,,,,,,,,,]);
}
?>
	

	
	


// 	part,moccupation,mnomber,moa,singing,recitation,excursion
// 	'$part','$moccupation','$mnomber','$moa''$singing','$recitation','$excursion
// }
// if(isset($_POST['lga'])){
// 	lga,athlete,siblings,hobby,help,hand,drama,
// 	,'$lga','$athlete','$hobby','$siblings','$help','$hand','$drama''
// }
