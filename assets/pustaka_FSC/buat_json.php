<?php

/*
"dataSource":{
    "chart":{
       "caption": "Monthly Revenue",
       "subCaption":"INF Mart",
       "xAxisName":"month",
       "yAxisName":"Revenues",
       "theme":"fint"
    },
    "data":[
      {"label":"Jan", "value":"100"},
      {"label":"Feb", "value":"200"},
      {"label":"Mar", "value":"150"},
      {"label":"Apr", "value":"400"}
    ]
  }
*/
 $c = array("caption"=>"Monthly Revenue",
            "subCaption"=>"INF Mart",
            "xAxisName"=>"month",
            "yAxisName"=>"Revenues",
            "theme"=>"fint");
 //print_r($c);
 //var_dump($c);

 $d = array(
    array("label"=>"Jan", "value"=>"100"),
    array("label"=>"Feb", "value"=>"200"),
    array("label"=>"Mar", "value"=>"150"),
    array("label"=>"Apr", "value"=>"400"),
    array("label"=>"Mei", "value"=>"125")
 );

 $gab = array("chart"=>$c, "data"=>$d);
 //print_r($gab);
 $j = json_encode($gab);
 echo $j; 
?>