<?php
$fname="Ramya";
$lname='Chandra';
$degree=`IT`;
echo($fname."<br>"); //concat
echo($lname);
echo($degree);
printf("this is ".$fname."hello");
$age=36;
$price=67.56;
$bool=true;

$arr=array("Ramya",45)//heterogeneous
print_r($arr);
$col=89;
class per{$col=68;
function p(){
   echo($col);
}}
$obj=new per();
$obj.p();
var_dump($age);
?>




<!-- ask sir
echo(typeof($var)); -->

<!-- print_r-array print
printf-

object- associative array -->
<!-- printf("%c",$fname); -->
 <!-- data single type-homo 
 multiple data  type-hetero array -->

 <?php
$fname='ra\'jan';
$lname='kumar ';

?>
<h1><?php echo $lname ?> </h1> 

<?php
$fname='ra\'jan';
$lname='kumar ';
$degree="BSC";
echo($fname."\n" );
echo($lname);
echo($degree);

$age=45; //int
$price=67.54;// float(double) 
$bool=true; //boolean
$e=NULL;
$arr=array("kannan",45); //array
print_r($arr);
echo"<input type='text' />";


var_dump($age);
var_dump($lname);
var_dump($price);
var_dump($bool);
 class Per{
//   public $col="68";
  /*   public function printthis()
    {
       return "hai".$col;
    } */
}
$obj= new per();

var_dump($obj);
//$obj.printthis();
 /* 
printf("this is ".$fname."hello") */
?>

<!-- casting -change a datatype -->