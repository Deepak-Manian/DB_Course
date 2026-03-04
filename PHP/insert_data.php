<?php 
$fname=$_REQUEST["first_name"];
$sname=$_REQUEST["second_name"];
$pass_word=$_REQUEST["pwd"];
$email=$_REQUEST["Email"];
$mobile_no=$_REQUEST["mobile_number"];

$image_name= $_FILES["pro_image"]["name"];  // pro_image=["name"=>cat1.jpg,type, size,error, tmp_name]
$ima_size=$_FILES["pro_image"]["size"];
$ima_type=$_FILES["pro_image"]["type"];
$temp_folder=$_FILES["pro_image"]["tmp_name"];

echo($image_name); echo"<br>";
echo($ima_size);echo"<br>";
echo($ima_type);echo"<br>";
echo($temp_folder);echo"<br>";echo"<br>";
echo($fname);echo"<br>";echo"<br>";
echo($sname);echo"<br>";
echo($pass_word);echo"<br>";
echo($email);echo"<br>";
echo($mobile_no);echo"<br>";
$destination_folder="img/";
if(move_uploaded_file($temp_folder,$destination_folder.$image_name)){
    echo"done";

}

?>