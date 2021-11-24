<?php

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;

$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();

$spreadsheet = $reader->load("demo_ormawa.xlsx");


$d=$spreadsheet->getSheet(0)->toArray();
//print_r($d);
//echo count($d);
//print_r($d[0][0])
foreach ($d as $k){
    //print_r($k);
    echo $k[0].'--'.$k[1].'--'.'<br>';
}

$x = $spreadsheet->getSheetNames();
print_r($x);
?>