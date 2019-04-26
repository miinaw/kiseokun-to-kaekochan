<!DOCTYPE html>

<html lang="ja">

<head>
<link rel="stylesheet" type="text/css" href="hello.css">
<title>きせかえ</title>
<meta charset="utf-8">
</head>

<body>
<h1>きせかえゲーム！</h1>
<h2>せつめい</h2>
<h3>
たいへん！たいせつなバックをなくしちゃったよ！
<p></p>
かわいくかっこよくコーディネートしてバックを探しにいこう！
<p></p>
まずは女の子か男の子かをえらんでね！</h3>

<center><p><img src="images/名称未設定.png" usemap="#kisekae"
	alt="きせかえ"></p></center>
<map name="kisekae">
<area shape="circle" coords="200,200,100" href="http://133.54.224.240/penshu4_2015/67140380/kisekae/kisekaetestg.php" alt="tail">
<area shape="circle" coords="400,200,100" href="http://133.54.224.240/penshu4_2015/67140380/kisekae/testboy.php" alt="mouse">

</map>

<?php
@$con = pg_connect("host=kite.cs.miyazaki-u.ac.jp
		    dbname=endb1555 user=enuser1555
		    password=enpass1555");

   if($con == false){
   print("DATABASE CONNECTION ERROR\n");
   exit;
   }

pg_query("delete from point;");

?>

</body>

</html>
