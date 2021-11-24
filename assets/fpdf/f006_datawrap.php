<?php
require('fpdf182/fpdf.php');

$pdf = new FPDF();

$pdf->AddPage();
$pdf->SetFont('Arial','',16);
$pdf->Cell(20,7,'Hi1',1);
$pdf->Cell(20,7,'Hi2',1);
$pdf->Cell(20,7,'Hi3',1);

$pdf->Ln();

$pdf->Cell(20,7,'Hi4',1);
$pdf->MultiCell(20,7,'Hi5(xtra)',1);
$pdf->Cell(20,7,'Hi5',1);

$pdf->Output();
?>
