<?php

$name[0]="田中";
$name[1]="高橋";
$name[2]="斎藤";

echo $name[0];
echo "<br>";
echo "<br>";

$name=array("田中","高橋","斎藤");
echo $name[0];
echo "<br>";
echo "<br>";

$z=array("x","y","z");
echo $z[1];
echo "<br>";
echo "<br>";

$abc=array(1,5,10);
echo $abc[1];
echo "<br>";
echo "<br>";

$xyz=array("山田",10,7);
echo $xyz[1];
echo "<br>";
echo "<br>";

$name=array("田中","高橋","斎藤");
$name[]="佐藤";
echo $name[3];
echo "<br>";
echo "<br>";

$name1=array("田中","高橋","斎藤");
$name1[0]="加藤";
unset($name1[1]);
echo $name1[0];
    
?>