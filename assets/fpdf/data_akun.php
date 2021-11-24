<?php
//koneksi ke database
$host = "localhost";
$user = "root";
$pass = "";
$dbnm = "ormawa";
 
$conn = mysqli_connect($host, $user, $pass,$dbnm);

//akhir koneksi
 
#ambil data di tabel dan masukkan ke array
$query = "SELECT nama,username,foto,status,email FROM tbl_login ORDER BY status";
$sql = mysqli_query ($conn,$query);
$data = array();
while ($row = mysqli_fetch_assoc($sql)) {
	array_push($data, $row);
}
 
#setting judul laporan dan header tabel
$header = array(
	array("label"=>"Nama", "length"=>50, "align"=>"C"),
	array("label"=>"Username", "length"=>30, "align"=>"C"),
	array("label"=>"Foto", "length"=>25, "align"=>"C"),
	array("label"=>"Status", "length"=>25, "align"=>"C"),
	array("label"=>"email", "length"=>55, "align"=>"C")
);
 
#sertakan library FPDF dan bentuk objek
require_once('fpdf182/fpdf.php');
$pdf = new FPDF('P','mm','A4');
$pdf->AddPage();
$pdf->Image('gambar/logoipb2.png',10,10,-300);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(190,7,'Sistem Informasi Ormawa SV IPB',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'Data Akun Pengguna',0,1,'C');
$pdf->Cell(10,7,'',0,1);
 
#tampilkan judul laporan
$pdf->SetFont('Arial','B','16');
 
#buat header tabel
$pdf->SetFont('Arial','','10');
$pdf->SetFillColor(0,0,0);
$pdf->SetTextColor(255);
$pdf->SetDrawColor(0,0,0);
foreach ($header as $kolom) {
	$pdf->Cell($kolom['length'], 5, $kolom['label'], 1, '0', $kolom['align'], true);
}
$pdf->Ln();
 
#tampilkan data tabelnya
$pdf->SetFillColor(255,255,255);
$pdf->SetTextColor(0);
$pdf->SetFont('Arial','','8');
$fill=false;
//print_r($data);
foreach ($data as $baris) {
	//print_r($baris);
	//echo "<br>";
	$i = 0;
	foreach ($baris as $cell) {
		$pdf->Cell($header[$i]['length'], 4, $cell, 1, '0', $kolom['align'], $fill);
		$i++;
	}
	$fill = !$fill;
	$pdf->Ln();
}
 
#output file PDF
$pdf->Output('');
?>