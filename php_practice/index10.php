<?php

function totalPrice($fruitprice,$tax=1.08,$haiso=350){
    return($fruitprice*$tax)+$haiso;
}

$mikan=totalPrice(300);
echo $mikan."<br>";
$ringo=totalPrice(450);
echo $ringo."<br>";
$ichigo=totalPrice(550);
echo $ichigo."<br>";
$nashi=totalPrice(350);
echo $nashi;
echo "<br>";
echo "<br>";

function shikaku($tate,$yoko){
    $xyz=$tate*$yoko;
    return $xyz;
}

echo shikaku(3,5);
echo "<br>";
echo shikaku(5,10);
echo "<br>";
echo shikaku(7,3);

?>