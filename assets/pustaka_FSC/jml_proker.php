<?php

$server ="localhost";
$un = "root";
$ps = "";
$db = "ormawa";
$kon = mysqli_connect($server,$un, $ps,$db);

$hsl = mysqli_query($kon,"SELECT * FROM tbl_proker");

$d=array();
while ($rcrd = mysqli_fetch_assoc($hsl)){
   //print_r($rcrd);
   array_push($d,array("label"=>$rcrd['nama_ormawa'], "value"=>$rcrd['banyak_proker']));
}

//print_r($d);
//$jd = json_encode($d);
//echo $jd;

$c = array("caption"=>"Ormawa SV IPB",
           "subCaption"=>"Grafik Jumlah Program Kerja setiap Ormawa pada bulan Juli tahun 2021",
           "xAxisName"=>"Nama Ormawa",
           "yAxisName"=>"Jumlah Program Kerja",
           "theme"=>"fint");
 
$gab = array("chart"=>$c, "data"=>$d);
//print_r($gab);
$j = json_encode($gab);
echo $j;          

?>