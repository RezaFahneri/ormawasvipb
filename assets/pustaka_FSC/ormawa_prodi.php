<?php

 $server ="localhost";
 $un = "root";
 $ps = "";
 $db = "evieta";
 $kon = mysqli_connect($server,$un, $ps,$db);

 $hsl = mysqli_query($kon,"SELECT * FROM ormawa_prodi");

 $d=array();
 while ($rcrd = mysqli_fetch_assoc($hsl)){
    //print_r($rcrd);
    array_push($d,array("label"=>$rcrd['prodi'], "value"=>$rcrd['jumlah_mhs']));
 }

 //print_r($d);
 //$jd = json_encode($d);
 //echo $jd;

 $c = array("caption"=>"Ormawa Jaya Selalu",
            "subCaption"=>"Jumlah Anggota Per Prodi",
            "xAxisName"=>"Prodi",
            "yAxisName"=>"Jumlah Mahasiswa",
            "theme"=>"fint");
  
$gab = array("chart"=>$c, "data"=>$d);
//print_r($gab);
$j = json_encode($gab);
echo $j;          

?>