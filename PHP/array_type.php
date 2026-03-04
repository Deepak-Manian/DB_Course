<?php
echo"<br> numeric(index) array: <br>";
$arr=array(1,"red",true);
$arr1=["red",45,false];
$arr[5]="green";
$var1=$arr[5];
echo $arr[5];
//echo "<br> array value 5 :".$arr[5];echo"<br>";
/* obj={
    fname:"raj",
    age:32
}
json={
    "fname"="raj",
    "age"=32
}
 */
echo"<br> multi dimentional  array: <br>";
$multi_arr=[
[1,2,3],
[4,5,6]
];
echo $multi_arr[0][1];

echo"<br> associative   array: <br>";

$ac_arr = [
    "a" => "Apple",
    "b" => "Banana",
    "c" => "Mango"
];
echo $ac_arr["b"];
echo"<br> multi dimentional associative   array: <br>";

$macc_arr = [
    "a" => "Apple",
    "b" => "Banana",
    "c" =>["d"=> "Mango","e"=>"orange"]
];
$macc_arr = [
    "a" => "Apple",
    "b" => "Banana",
    "c" =>["d"=> "Mango","e"=>["f"=>"orange"]]
];

echo $macc_arr["c"]["e"]["f"];
$macc_arr = [
    "a" => "Apple",
    "b" => "Banana",
    "c" =>["d"=> "Mango","e"=>["orange"]]
    echo $macc_arr["c"]["e"][0];
];
echo $macc_arr["c"]["e"]["f"];
$macc_arr = [
    "a" => "Apple",
    "b" => "Banana",
    "c" =>["d"=>["f"=>["Apple","Mango","orange"]]]
    echo $macc_arr["c"]["d"]["f"][0];
];

echo $macc_arr["c"]["f"];

echo $macc_arr["c"]["e"]; echo"<br> mixed <br> ";

$macc_arr = [
    "a" => "Apple",
    "b" => "Banana",
    "c" =>["d", "Mango","e","orange"]
];

echo $macc_arr["c"][1];
/* $key = array_search("Mango", $arrb);

echo $key;
 */

?>
<script> 
    str="er ty ty ui"
    arr=str.split("")
    console.log(arr);
arr5=[1,45,67,4,12,43,11];

arr6=arr5.sort();
console.log(arr6)
    </script>