<?php

// 1 count()
$a=array('php','c','c++',4,79);
echo count($a);

//2 array_count_values()
$a=array("php","c","c++",4,79);
$newa= array_count_values($a);

foreach ($a as $key => $value) {
    echo "<br/>$key - <strong>$value</strong>";
 }

//3 array sum()
 $a=array(1,2,3,4,5);
 echo "<br/>".array_sum($a);

//4 array_product()
$a=array(1,2,3,4,5);
echo "<br/>".array_product($a);
 
//5 array_reverse()
$a=array(1,2,3,4,5);
$reva=array_reverse($a);
echo "<br/>";
print_r($reva);

//6 in_array()
$a=array(1,'php',3,4,5);
$temp= in_array('php',$a);
echo "<br/>".$temp;

//7 array_rand()
$a=array(1,'php',3,4,5);
$indexofarray=array_rand($a);
echo "<br/>";
echo $a[$indexofarray];

//8 array_unique()
$a=array(1,'php',3,4,5);
echo "<br/>";
print_r(array_unique($a));

//9 array_merge()
$a1=array(1,'php',3,4,5);
$a2=array('c','php','c++','java','python');
$newarr=array_merge($a1,$a2);
echo "<br/>";
print_r($newarr);

//10 range()
$arr=range("11","20");
foreach ($arr as $key => $value) {
    echo "<br/> $key - $value ";
 }
 
//11 sort()
echo "<br/>";
$b=array(70,8,45,76,34,65,53);
sort($b);
print_r($b);
 
//12 rsort()
echo "<br/>";
$b=array(70,8,45,76,34,65,53);
rsort($b);
print_r($b);
 
// 13 asort() 
echo "<br/>";
$b=array(70,8,45,76,34,65,53);
asort($b);
print_r($b);
 
//14 ksort()
$arr=array("banana"=>"yellow","apple"=>"red","mango"=>"green");
ksort($arr);
foreach ($arr as $key => $value) {
    echo "<br/>$key => $value";
}
 
//15 shuffle()
$myarray=array("football","baseball","hockey","tennis");
shuffle($myarray);
foreach ($myarray as $key => $value) {
    echo "<br/> $value";
}
        
//16 array_combine()
$arr1=array("banana","apple","mango");
$arr2=array("yellow","red","green");
$newvar= array_combine($arr1, $arr2);
echo "<br/>";
print_r($newvar);
 
//17 end()
$myarr=array('c','c++','android','java','php');
echo "<br/>";
echo end($myarr);
 
//18 compact()
$name="bansi";
$subject="php"; 
$arr=compact("name","subject");
echo "<br/>";
print_r($arr);
 
//19 array_flip()
$arr=array("a"=>"apple","b"=>"banana");
$fliparray= array_flip($arr); 
echo "<br/>";
print_r($fliparray);
 
//20 array_push()
$a=array("c","c++");
array_push($a,"java","php");
echo "<br/>";
print_r($a); 
 
//21 explode()
$mystring="i love php language"; 
$arr= explode(" " ,$mystring); 
echo "<br/>";
print_r($arr);

//22 implode()
$mystring="i love php language"; 
$arr= implode(" " ,$arr); 
echo "<br/>";
echo $mystring;
