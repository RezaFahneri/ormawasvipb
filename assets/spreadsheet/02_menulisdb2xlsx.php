<?php

require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet; 
use PhpOffice\PhpSpreadsheet\Writer\Xlsx; 

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

$column_header=["nama_ormawa","deskripsi","foto"];
$j=1;
foreach($column_header as $x_value) {
		$sheet->setCellValueByColumnAndRow($j,1,$x_value);
  		$j=$j+1;
	}


//ambil data dari DB
$kon = mysqli_connect("localhost","root","","ormawa");

$sql = "SELECT * FROM `tbl_data_ormawa`";
$data = mysqli_query($kon,$sql);

$i = 3; //baris
while($rcrd = mysqli_fetch_row($data)){
    print_r($rcrd);
    echo "<br>";
    $sheet->setCellValueByColumnAndRow(1,$i,$rcrd[1]);
    $sheet->setCellValueByColumnAndRow(2,$i,$rcrd[2]);
    $sheet->setCellValueByColumnAndRow(3,$i,$rcrd[3]);
    $i++;
}


// Write an .xlsx file  
$writer = new Xlsx($spreadsheet); 
  
// Save .xlsx file to the files directory 
$writer->save('tbl_data_ormawa_from_db.xlsx'); 


?>