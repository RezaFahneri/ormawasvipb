<?php
//koneksi ke database
$host = "localhost";
$user = "root";
$pass = "";
$dbnm = "ormawa";
 
$conn = mysqli_connect($host, $user, $pass,$dbnm);

//akhir koneksi
 
#ambil data di tabel dan masukkan ke array
$query = "SELECT NIM,nama,username,password,prodi,data_ormawa,status FROM tbl_anggota_ormawa ORDER BY NIM";
$sql = mysqli_query ($conn,$query);
$data = array();
while ($row = mysqli_fetch_assoc($sql)) {
	array_push($data, $row);
}
 
#setting judul laporan dan header tabel
$judul = "DATA ANGGOTA ORMAWA";
$header = array(
		array("label"=>"NIM", "length"=>20, "align"=>"C"),
		array("label"=>"Nama", "length"=>40, "align"=>"C"),
		array("label"=>"Username", "length"=>20, "align"=>"C"),
		array("label"=>"Password", "length"=>70, "align"=>"C"),
		array("label"=>"Prodi", "length"=>40, "align"=>"C"),
		array("label"=>"Data Ormawa", "length"=>60, "align"=>"C"),
		array("label"=>"Status", "length"=>20, "align"=>"C")
	);
 
#sertakan library FPDF dan bentuk objek
require_once('fpdf182/fpdf.php');
$pdf = new FPDF('L','mm','A4');
$pdf->AddPage();
 
#tampilkan judul laporan
$pdf->SetFont('Arial','B','16');
$pdf->Cell(0,20, $judul, '0', 1, 'C');
 
#buat header tabel
$pdf->SetFont('Arial','','10');
$pdf->SetFillColor(255,0,0);
$pdf->SetTextColor(255);
$pdf->SetDrawColor(128,0,0);
foreach ($header as $kolom) {
	$pdf->Cell($kolom['length'], 5, $kolom['label'], 1, '0', $kolom['align'], true);
}
$pdf->Ln();
 
#tampilkan data tabelnya
$pdf->SetFillColor(224,235,255);
$pdf->SetTextColor(0);
$pdf->SetFont('Arial','','8');
$fill=false;
//print_r($data);
foreach ($data as $baris) {
	//print_r($baris);
	//echo "<br>";
	$i = 0;
	foreach ($baris as $cell) {
		$pdf->Cell($header[$i]['length'], 5, $cell, 1, '0', $kolom['align'], $fill);
		$i++;
	}
	$fill = !$fill;
	$pdf->Ln();
}
 
#output file PDF
$pdf->Output('');
?>