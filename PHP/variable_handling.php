<?php
$v_int="45";

if(is_int($v_int)){
    echo "integer value";
}
else{
    echo "not a integer value";
}

echo"<br><br> empty() <br> ";
$is_val="";

if(!empty($is_val)){
    echo " no value there";
}
else{
    echo " VALUE THERE";
}
echo"<br> isset() <br> ";
$is_val="";

if(isset($is_val)){
    echo " value there";
}
else{
    echo "NO VALUE THERE";
}
echo"<br><br> variable data type conversion <br> ";
$v_str="45";
$v_in=intval($v_str);
echo gettype($v_in); echo"<br>";
echo $v_in;echo "<br>";
unset($v_in);
if(isset($v_in)){
    echo " no value there";
}
else{
    echo " VALUE THERE";
}


?>