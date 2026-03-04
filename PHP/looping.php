<?php
for($i=0;$i<10;$i++)
    {
        echo $i."<br>";
    }
$i=0;
while($i<10)    
{
        echo $i."<br>";
$i++;
}
$i=0;
do
{
        echo $i."<br>";
        $i++;
    }while($i<3);

    $arr=array("kannan",45); //array
foreach($arr as $val)// for(let iterator of arrayname)
    {
        echo $val. "<br>";
    }
?>