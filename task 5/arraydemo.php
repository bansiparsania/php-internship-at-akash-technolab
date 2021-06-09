<?php

//numericl array
//method 1
$a[0]=10;
$a[1]=20;
$a[2]=78;
$a[3]="c";
$a[4]="4";

//method 2
$a[]=10;
$a[]=20;
$a[]=78;
$a[]="c";
$a[]="4";

//method 3
//always use
$a=array(10,20,78,"c","4");
//print array value
echo $a[3];

//print whole array
for($i=0;$i<count($a);$i++){
    echo "<br/>".$a[$i];
}

//3 inbuilt functions 
echo "<pre>";
print_r($a);
echo "</pre>";

echo "<pre>";
var_dump($a);
echo "</pre>";
