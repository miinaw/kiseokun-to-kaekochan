<?php

$topImages = array('0' => 'girls2.jpg',
		   '30' => 'kaekotops1.jpg',
		   '10' => 'kaekotops2.jpg');

$bottomsImages = array('0' => 'girls3.jpg',
		       '40' => 'kaekopants1.jpg',
		       '10' => 'kaekopants2.jpg');

$shoesImages = array('0' => 'girls4.jpg',
		     '30' => 'kaekokutsu1.jpg',
		     '10' => 'kaekokutsu2.jpg');



if(isset($_POST['tops'])){
  $valueTop = $_POST['tops'];
}else{
  $valueTop = 'nothing';
}

if(isset($_POST['bottoms'])){
  $valueBottoms = $_POST['bottoms'];
}else{
  $valueBottoms = 'nothing';
}

if(isset($_POST['Shoes'])){
  $valueShoes = $_POST['Shoes'];
}else{
  $valueShoes = 'nothing';
}


?>

<!DOCTYPE html>
<html lang="ja">
  <head>
  <link rel="stylesheet" type="text/css" href="hello.css">
  <meta charset="utf-8">
  <title>kisekae</title>
  </head>
  <body>

  <br>
  <h1><center>かえこちゃん</center></h1>


  <br>
  <br>
  <br>
  <center><img src="girls1.jpg" alt="   " width="200" height="200"></center>
  <center><img src="<?php print $topImages[$valueTop] ?>" alt="top" width="200" height="200"></center>
  <center><img src="<?php print $bottomImages[$valueBottom] ?>" alt="bottoms" width="200" height="200"></center>
  <center><img src="<?php print $shoesImages[$valueShoes] ?>" alt="kutsu"  width="200" height="100"></center>

  <br>
  <br>


  <form action="kisekaetestg.php" method="post">
  <select name="tops"> 
  <option value="0">nothing</option>
  <option value="30">top1</option> 
  <option value="10">top2</option>
  </select>

  <select name="bottoms"> 
  <option value="0">nothing</option>
  <option value="40">bottoms1</option> 
  <option value="10">bottoms2</option>
  </select>

  <select name="Shoes"> 
  <option value="0">nothing</option>
  <option value="30">Shoes1</option> 
  <option value="10">shoes2</option>
  </select>


  <input type="submit" value="Look">
  <input type="submit" value="Finsh">

  </form>

  </body>
 
  </html>
