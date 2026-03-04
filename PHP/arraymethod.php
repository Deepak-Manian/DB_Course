<?php
$arr=array(1,"red",true);
$arr1=["red",45,false];
$arr[5]="green";
$var1=$arr[5];
echo ($var1);echo"<br>";
$arr2=$arr;
array_pop($arr2);
print_r($arr2);echo"<br>";
array_push($arr2,"er",4);
print_r($arr2);echo"<br>";
array_shift($arr2);
print_r($arr2);echo"<br>";
array_unshift($arr2,"frist","second");
echo"<br> unshift :";  print_r($arr2);echo"<br> ";

$arr5=[1,45,67,4,12,43,11];
sort($arr5);echo"<br> slice <br>";  
echo"<br> sort :";print_r($arr5);
rsort($arr5);echo"<br> slice <br>";  
echo"<br> reverse sort :";print_r($arr5);


$arr3=array_slice($arr2,3,5);
echo"<br> orginal : <br>";print_r($arr2);echo"<br>";
echo"<br> slice :";print_r($arr3);echo"<br>";

$mer_arr=array_merge($arr3,$arr);
echo"<br> merge array :";print_r($mer_arr);
 $var3=array_search("tot",$arr3);
echo($var3); 
 
$str=implode(" ,", $arr3);
echo"<br> sting to array:"; var_dump($str);

$ex_arr=explode("^",$str);
print_r($ex_arr);

$arr=[1,2,1,2,4,1,2,3,4,5];
$arr_uni=array_unique($arr);
print_r($arr_uni);
?>
