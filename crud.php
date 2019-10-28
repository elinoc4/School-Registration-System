<?php

include"admin_header.php";

if (!isset($_SESSION['admin'])) {
    header("Location:admin_login.php");
}?>

	<?php

	require_once "script/pdocrud.php";
	if (isset($_GET['id'])) {
		# code...
	
error_reporting(0);

	
	$id = $_GET['id'];
$pdocrud = new PDOCrud();
$pdocrud->setQuery("select * from school where id='$id'");                
echo $pdocrud->render("SQL");
//$pdocrud = new PDOCrud();//create object of PDOCrud Class
//$pdocrud->crudTableCol(array("user","nomber"));
//$pdocrud->setQuery("select * from school where id='$id'");
//echo $pdocrud->render("SQL");
}
if (isset($_GET['check'])) {
require_once "script/pdocrud.php";
$pdocrud = new PDOCrud();
$pdocrud->colRename("user","Full Name");
$pdocrud->colRename("sex","Gender");
$pdocrud->colRename("dob","Date of Birth");
$pdocrud->colRename("pob","Place of Birth");
$pdocrud->colRename("foccupation","Father's Occupation");
$pdocrud->colRename("foa","Fathers Office Address");
$pdocrud->colRename("moa","Mothers Office Address");
$pdocrud->colRename("fnomber","Fathers Contact");
$pdocrud->colRename("mnomber","Mothers Contact");
$pdocrud->colRename("moccupation","Mother's Occupation");
$pdocrud->colRename("soo","State of Origin");
$pdocrud->colRename("help","Helps at Home");
$pdocrud->colRename("hand","Supportss Business");
$pdocrud->colRename("roa","Residential Office Address");

$pdocrud->crudTableCol(array("user","sex","dob","pob","roa","nomber","religion","foccupation","foa","fnomber","mnomber","moa","singing","excursion","recitation","athlete","hobby","siblings","help","hand","drama","moccupation","health","behaviour","soo","lga","hospital","prev_sch","prev_class","class"));
echo $pdocrud->dbTable("school")->render();
}


if (isset($_GET['pin'])) {
	$pdocrud = new PDOCrud();
             
echo $pdocrud->dbTable("pin")->render();
}
include"footer.php";
?>
