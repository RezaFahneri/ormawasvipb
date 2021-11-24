<?php

require 'spreadsheet/vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet; 
use PhpOffice\PhpSpreadsheet\Writer\Xlsx; 

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

$column_header=["Nama Ormawa","Sejarah","Visi Misi","Sekretariat","Kontak"];
$j=1;
foreach($column_header as $x_value) {
		$sheet->setCellValueByColumnAndRow($j,1,$x_value);
  		$j=$j+1;
	}


//ambil data dari DB
$kon = mysqli_connect("localhost","root","","ormawa");

$sql = "SELECT * FROM `tbl_profil`";
$data = mysqli_query($kon,$sql);

$i = 2; //baris
while($rcrd = mysqli_fetch_row($data)){
    // print_r($rcrd);
    // echo "<br>";
    $sheet->setCellValueByColumnAndRow(1,$i,$rcrd[1]);
    $sheet->setCellValueByColumnAndRow(2,$i,$rcrd[2]);
    $sheet->setCellValueByColumnAndRow(3,$i,$rcrd[3]);
    $sheet->setCellValueByColumnAndRow(4,$i,$rcrd[4]);
    $sheet->setCellValueByColumnAndRow(5,$i,$rcrd[5]);
    $i++;
}


// Write an .xlsx file  
$writer = new Xlsx($spreadsheet); 
  
// Save .xlsx file to the files directory 
$writer->save('tbl_profil.xlsx'); 


?>