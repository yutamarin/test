<?php
$country=array("アジア"=>"日本",
              "アメリカ"=>"アメリカ",
              "欧州"=>"フランス"
              );
echo $country["アジア"];
echo "<br>";
echo "<br>";

$country1=array(
             array("日本","タイ"),
             array("アメリカ","ブラジル"),
             array("フランス","ロシア"),
        );
echo $country1[2][1];
echo "<br>";
echo "<br>";

$asia=array("日本","タイ");
$america=array("アメリカ","ブラジル");

$country2=array($asia,$america);
echo $country2[0][0];
echo "<br>";
echo "<br>";

$country3=array(
    "アジア"=>array("東アジア"=>"日本","東南アジア"=>"タイ"),
    "アメリカ"=>array("北米"=>"アメリカ","南米"=>"ブラジル"),
    "欧州"=>array("西欧"=>"フランス","東欧"=>"ロシア"),
);
echo $country3["アメリカ"]["南米"];

?>