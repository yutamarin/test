<?php

for($i=1; $i<=10; $i++){
    if($i%2==0){
    echo $i."<br>";}
}

for($a=1; $a<=3; $a++){
    echo "■外側のfor文".$a."回目<br>";
for($b=1; $b<=3; $b++){
    echo "内側のfor文".$b."回目<br>";
 }
}
echo "<br>";
echo "<br>";


for($c=1; $c<=3; $c++){
    echo "■外側のfor文".$c."回目<br>";
}
for($d=1; $d<=3; $d++){
    echo "内側のfor文".$d."回目<br>";
}

?>