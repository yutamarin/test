<?php

$a=array("[A]"=>"赤",
        "[B]"=>"青",
        "[C]"=>"緑");
foreach($a as $key=>$value){
    echo $key.$value;
}
echo "<br>";
echo "<br>";

$food=array(
"vegetable"=>array("carrot"=>"にんじん",
                  "tomato"=>"トマト",
                  "onion"=>"たまねぎ"),
"fruit"=>array("apple"=>"りんご",
              "orange"=>"オレンジ",
              "grape"=>"ぶどう"));
foreach($food as $groupkey=>$namekey){
    echo "■".$groupkey."<br>";
    foreach($namekey as $eigoname=>$nihonname){
        echo $eigoname.":".$nihonname."<br>";
    }
    echo "<br>";
}
echo "<br>";
echo "<br>";

$b=array("d","c","b","a");
asort($b);
foreach($b as $key=>$value){
    echo $value."<br>";
}

?>