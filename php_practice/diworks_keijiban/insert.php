<?php

mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=form1;host=localhost;","root","mysql");

$pdo->exec("insert into diworks_keijiban(handlename,title,comments)values
('".$_POST['handlename']."','".$_POST['title']."','".$_POST['comments']."');");

header("Location:http://localhost/diworks_keijiban/index.php");