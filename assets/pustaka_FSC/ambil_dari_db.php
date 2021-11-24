<?php

 $server ="localhost";
 $un = "root";
 $ps = "";
 $db = "evieta";
 $kon = mysqli_connect($server,$un, $ps,$db);

 $hsl = mysqli_query($kon,"SELECT * FROM month_revenue");

 $d=array();
 while ($rcrd = mysqli_fetch_assoc($hsl)){
    //print_r($rcrd);
    array_push($d,array("label"=>$rcrd['bulan'], "value"=>$rcrd['revenue']));
 }

 //print_r($d);
 //$jd = json_encode($d);
 //echo $jd;

 $c = array("caption"=>"Monthly Revenue",
            "subCaption"=>"INF Mart",
            "xAxisName"=>"month",
            "yAxisName"=>"Revenues",
            "theme"=>"fint");
  
$gab = array("chart"=>$c, "data"=>$d);
//print_r($gab);
$j = json_encode($gab);
echo $j;          

?>