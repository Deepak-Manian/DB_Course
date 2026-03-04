<?php
if(true){
    echo"true";echo "<br>";
}

$i=40;
if($i>50){
    echo"greater";echo "<br>";
}
else{
    echo "lesser";echo "<br>";
}
$j=50;
if($j<50){
    echo"lesser 50";echo "<br>";
}
elseif($j>50){
    echo"greater than 50";echo "<br>";
}
else{
    echo "equal";echo "<br>";
}
for($i=1;$i<5;$i++){
 
 switch($i){
    case 1:
        echo "ONE";echo "<br>";
        break;
    case 2:
        echo "Two";echo "<br>";
          break;
    default:
    echo "default";echo "<br>";
 }
 break;
}
echo"hello"; 
?>