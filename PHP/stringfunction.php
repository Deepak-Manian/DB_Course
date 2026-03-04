<?php
 echo  " array to string";
 echo  " <br>";
$arr = array('Hello','World!','Beautiful','Day!');
print_r($arr);
 echo  " <br>";
$var1= join("! ",$arr);
var_dump($var1);

echo  " <br> substr ";



echo substr("Hello world",4,3);
echo  "<br> substr_replace";

echo substr_replace("Hello","world",4);
echo  "<br>";

$str = "Hello Worled!";
//echo $str ; echo " ORGINAL <br>";
//echo "TRIM Heoreld! <br>";
echo trim($str,"Herld!");
echo  "<br> strlen ";

echo strlen("Hello world");
echo  "<br>  str_repeat";

echo str_repeat("super",13);
echo  "<br>";

$str = "Hello World";
echo  "<br> str_pad";
echo str_pad($str,15,"P");
echo  "<br> str_replace";

echo str_replace("Hello","Peter","Hello world!");
echo  "<br>";
/* ecjp array to string impolde  */
echo"  array to string impolde <br>";
$arr = array('Hello','World!','Beautiful','Day!');

 print_r($arr);
 echo  " <br>";
$var1= implode("/ ",$arr);
var_dump($var1);

 echo  " <br>";

?>