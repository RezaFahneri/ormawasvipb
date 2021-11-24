<?php
//koneksi ke database
$host = "localhost";
$user = "root";
$pass = "";
$dbnm = "ormawa";
 
$conn = mysqli_connect($host, $user, $pass,$dbnm);

//akhir koneksi
 
#ambil data di tabel dan masukkan ke array
$query = "SELECT NIK,NIP,nama_lengkap,username,password FROM tbl_pembina_ormawa ORDER BY nama_lengkap";
$sql = mysqli_query ($conn,$query);
$data = array();
while ($row = mysqli_fetch_assoc($sql)) {
	array_push($data, $row);
}
 
#setting judul laporan dan header tabel
$judul = "DATA PEMBINA ORMAWA";
$header = array(
		array("label"=>"NIK", "length"=>30, "align"=>"C"),
		array("label"=>"NIP", "length"=>30, "align"=>"C"),
		array("label"=>"Nama Lengkap", "length"=>40, "align"=>"C"),
		array("label"=>"Username", "length"=>25, "align"=>"C"),
		array("label"=>"Password", "length"=>70, "align"=>"C")
	);
 
#sertakan library FPDF dan bentuk objek
require_once('fpdf182/fpdf.php');
$pdf = new FPDF('P','mm','A4');
$pdf->AddPage();
 
#tampilkan judul laporan
$pdf->SetFont('Arial','B','16');
$pdf->Cell(0,20, $judul, '0', 1, 'C');
 
#buat header tabel
$pdf->SetFont('Arial','','10');
$pdf->SetFillColor(0,129,0);
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