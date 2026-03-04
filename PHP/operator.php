<?php
$i=5;
$j=4;
echo($i**$j);echo "<br> assignment Operator <br>";
/* 
assignment Operator */
$i+=$j;
echo($i);echo "<br>";
$i-=$j;
echo($i);echo "<br>";
$i*=$j;
echo($i);echo "<br>";
$i/=$j;
echo($i);echo "<br>";

$i%=$j;
echo($i);echo "<br> Comparition Operator  <br>";
/* 
Comparition Operator */
$i=45;
$j="45";

if($i===$j){ //!= <> < > <= >=

echo($i."is equal");echo "<br>";

}

if($i!==$j){

echo($i."is TYPE NOT equal");echo "<br>";

}
else{
echo($i." datatype different");echo "<br>";

}

$a=45;
$b=45;
if($a!=$b){//<>

echo($a."is not equal".$b);echo "<br>";

}
echo $a<=>$b;echo "<br> incremet/decrement Operator <br>";
/* 
incremet/decrement Operator */
$var=45;
$var2="45";
echo $var--; echo "<br> logical operators <br>";
//echo $var;

/* logical operators */

if(($var<=$var2) && ($var==45)){ //&& and 

echo($var."is  equal");echo "<br>";

}
if(($var<=$var2) or ($var==45)){ // || 

echo($var."is  equal");echo "<br>";
}
if(($var==$var2)){
    echo($var."is  equal");echo "<br>";
}

if(($var==$var2) or ($var<=45)){ // || 

echo($var."is  equal");echo "<br> ternary if and NUll <br>";
}

/* ternary if and NUll*/
$var4=($var===$var2) ? "is  true" : "is  false";
echo($var4); echo "<br>";

$bn=null;
$res= $bn ?? 1;// if null value return 1
$res=($bn>0) ? $bn : 1; // if value 0 return 1 
var_dump($res);

$re=45/$res;
echo($re);
?>