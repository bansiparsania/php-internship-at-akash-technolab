<?php

//assosiative array
//key value
//method 1
$a[0]="10";
$a['b']="bansi";
$a['php']="php developer";
$a[100]="haundrad";
$a[4]="four";
 
//method 2
$a=array(
    0 => 10,
    "b" => "bansi",
    "php" => "php developer",
    100=>"haundrad",
    4=>"four"
 );

//print array
echo "b for ".$a['b'];

foreach ($a as $value){
    echo "<br>value is $value";
}

foreach ($a as $key => $value){
    echo "<br> key is <b><u>$key</u></b> and value is <b><u>$value</u></b>";
}

//3 inbuilt functions 
echo "<pre>";
print_r($a);
echo "</pre>";

echo "<pre>";
var_dump($a);
echo "</pre>";
