<?php

require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet; 
use PhpOffice\PhpSpreadsheet\Writer\Xlsx; 

//ini andaikan adalah datanya
$data_from_db=array();
$data_from_db[0]=array("NIM"=>"J3C119102","Nama"=>"Reza Fahneri","Ormawa"=>"Dewan Perwakilan Mahasiswa");
$data_from_db[1]=array("NIM"=>"J3C219158","Nama"=>"Muhamad Luthfi HM","Ormawa"=>"Badan Eksekutif Mahasiswa");
$data_from_db[2]=array("NIM"=>"J3C119123","Nama"=>"Yesika Rodearni","Ormawa"=>"MICRO IT");
print_r($data_from_db);

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();



//set value for indi cell
//$row=$data_from_db[$i];

//writing cell index start at 1 not 0
$column_header=["NIM","Nama","Ormawa"];
$j=1;
foreach($column_header as $x_value) {
		$sheet->setCellValueByColumnAndRow($j,1,$x_value);
  		$j=$j+1;
	}



    for($i=0;$i<count($data_from_db);$i++)
    {
    
    //set value for indi cell
    $row=$data_from_db[$i];
    
    $j=1;
    
        foreach($row as $x => $x_value) {
            $sheet->setCellValueByColumnAndRow($j,$i+2,$x_value);
              $j=$j+1;
        }
    
    }




// Write an .xlsx file  
$writer = new Xlsx($spreadsheet); 
  
// Save .xlsx file to the files directory 
$writer->save('demo_ormawa.xlsx'); 

?>