<?php
if(true){
    echo "true";
}
echo"hello";
?>
/*null*/
$bn=null;
$res= $bn ?? 1;// if null value return 1
$res=($bn>0) ? $bn : 1; // if value 0 return 1 
var_dump($res);