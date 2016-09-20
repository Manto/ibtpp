<?php
define('FPDF_FONTPATH','includes/font/');
require('includes/fpdf.php');

$db = mysql_connect("localhost", "infantbo", "big506");
mysql_select_db("ibrcc_abstract");

if (!isset($_REQUEST["id"]) || $_REQUEST["id"] == "") exit;

$sql = "SELECT * FROM abstracts WHERE abstract_id = '" . $_REQUEST["id"] . "'";
	
$result = mysql_query($sql);
if(!$result) {
	exit;
}

if ( isset($_REQUEST["pdf"]) && $_REQUEST["pdf"] ) {
	$row = mysql_fetch_array($result);
	$pdf=new FPDF('P','pt','A4');
	$pdf->AddPage();
	
	// Title
	$pdf->SetFont('Times','B',12);
	$pdf->Cell(0,13,$row["title"],0,1,'C');

	// Authors
	$pdf->SetFont('Times','',12);
	$pdf->Cell(0,13,$row["author"],0,1,'C');

	// Affiliation
	$pdf->SetFont('Times','',12);
	$pdf->Cell(0,13,$row["affiliation"],0,1,'C');

	$pdf->Ln();

	// ABSTRACT
	$pdf->SetFont('Times','B',12);
	$pdf->Cell(0,13,'ABSTRACT',0,1,'C');

	$pdf->SetFont('Times','',12);
	
	$paragraphs = explode("\n",$row["abstract"]);
	//$pdf->MultiCell(0,13,$row["abstract"]);
	
	foreach( $paragraphs as $key => $value) {
		if ( $value != "")
			$pdf->MultiCell(0,13,"           ".$value,0,1);
	}

	$pdf->Output( $_REQUEST["id"].'.pdf','I');
}
else {
	echo <<<EOT
	
EOT;
}
?>