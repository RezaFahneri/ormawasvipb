<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;

$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();

$spreadsheet = $reader->load("data_ormawa.xlsx");
$data=$spreadsheet->getSheet(0)->toArray();

//print_r($data);

$kon = mysqli_connect("localhost","root","","ormawa");


$N = count($data);
for($i=1; $i<$N; $i++){
    //echo $data[$i][0];

    echo $s ="INSERT INTO `tbl_data_ormawa` (`id_ormawa`, `nama_ormawa`, `deskripsi`, `foto`) 
             VALUES 
             (NULL, '".$data[$i][0]."', '".$data[$i][1]."', '".$data[$i][2]."')";
    echo "<br>";    
    mysqli_query($kon,$s);
}

?>