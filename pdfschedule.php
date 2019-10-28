<?php
	# code...
if (isset($_GET['id'])) {
	# code...

require_once("connect1.php");
require('fpdf.php');
$id = $_GET['id'];
$header = $con->query("SELECT * FROM school WHERE id = '$id'");


class PDF extends FPDF {

	function Header(){

		$this->SetFont('Arial','B',15);
		$this->Cell(20,10,'',0,1);
		$this->image('img/head.jpg',0,0,210,65);
		
		$this->Ln();
		$this->Ln();
		$this->Ln();
		$this->Ln();
		
		
		
		
	}
	function Footer(){
		$this->SetFont('Times','U',9);
		$this->Cell(210,20,'EXAM SCHEDULE PRINTOUT',0,1,'C');
		
	}
}
$pdf = new PDF();
$pdf->AddPage('P','A4');
$pdf->SetTextColor(0,0,255);
$pdf->SetFont('Arial','',11);

$pdf->SetLeftMargin(5);

	

while($row = $header->fetch()){
	$image = 'img/'.$row['img'];
	$pdf->Cell(40,15,$pdf->Image($image,160,75,30),0,1);
	$pdf->Cell(30,15,'Name:',0);
	$pdf->Cell(70,15,$row['user'],0,1);
	$pdf->Cell(30,15,'Gender:',0);	
	$pdf->Cell(30,15,$row['sex'],0,1);
	$pdf->Cell(30,15,'Class:',0);
	$pdf->Cell(40,15,$row['class'],0,1);
	$pdf->Cell(30,15,'Number:',0);
	$pdf->Cell(20,15,$row['nomber'],0,1);
	$pdf->Ln();
	$pdf->Ln();
	
}
$pdf->Cell(150,8,'Subjects:',0);
$pdf->Cell(70,8,'ITEMS TO COME WITH:',0,1);
$pdf->Cell(150,8,'English',0);
$pdf->Cell(70,8,'Pen',0,1);
$pdf->Cell(150,8,'Mathematics',0);
$pdf->Cell(70,8,'Pencil',0,1);
$pdf->Cell(150,8,'Quantitative Reasoning',0);
$pdf->Cell(70,8,'Eraser',0,1);
$pdf->Cell(150,8,' Verbal Reasoning',0);
$pdf->Cell(70,8,'Shapner',0,2);
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(70,5,'Exam Venue : 1-3 Obigbo road GRA, Aba Abia state',0,1);
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(150,8,'This slip is not an admission letter',0,1);
$pdf->Cell(150,8,'Exam must not be taken on proxy',0,1);
$pdf->Cell(150,8,'We offer admission to ONLY qualified Candidates',0,1);
$pdf->Ln();

$pdf->Output();
}