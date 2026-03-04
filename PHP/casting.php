<?php
$num=45;
$flo=56.76;
$bol=true;
$nu=NULL;
//var_dump($num); //int
$fname="raj";

/* string type casting */
/* $num=(string) $num;
var_dump($num);// string
 */
/* int type casting */
$str="45"; //int(45) float(45)
$str1="45 67";// int(45) float(45)
$str2="23hi";// int(23) float(23)
$str5="hi 23";//int(0) float(0)
$str3="str";// int(0) float(0)
$flo=45.6;
$bool=false;// int(0) float(0)
$f=NULL; //int(0) float(0)
/* 
var_dump($str);
$str=(int) $str; 

var_dump($str);

var_dump($str1);
$str1=(int) $str1;

var_dump($str1); // int value 45


var_dump($str2);
$str2=(int) $str2;

var_dump($str2);

var_dump($str5);
$str5=(int) $str5;

var_dump($str5);


var_dump($str3);
$str3=(int) $str3;

var_dump($str3);
*/
var_dump($flo);
$flo=(int) $flo;

var_dump($flo);

var_dump($bool);
$bool=(int) $bool;

var_dump($bool);
var_dump($f);
$f=(int) $f;

var_dump($f);

$flo=(bool) $flo;
echo "<br>";
var_dump($flo);//return true unless 0,NULL,false or empty 

$fname =(array) $fname;
var_dump($fname);
echo "<br>";
print_r($fname);
?>