<!DOCTYPE html>

<html lang="ja">

   <head>
   <link rel="stylesheet" type="text/css" href="hello.css">
   <title>
   結果発表
   </title>
   <meta charset="utf-8">
   </head>

   <body>

<?php
   error_reporting(E_ALL & ~E_NOTICE);
?>

   <h1></h1>
<?php
 
   @$con = pg_connect("host=kite.cs.miyazaki-u.ac.jp
		    dbname=endb1555 user=enuser1555
		    password=enpass1555");


$getpoint = 0;

$sql = "select tops,bottoms,shoes from score where id = " . $_POST["id"];

@$result = pg_query($con,$sql);

for($i = 0;$i < 3;$i++){
  $getpoint = $getpoint + pg_fetch_result($result,0,$i);
}

$top = pg_fetch_result($result,0,0);
$bottom = pg_fetch_result($result,0,1);
$shoes = pg_fetch_result($result,0,2);
print "TOPS:$top";
print "<br>";
print "BOTTOMS:$bottom";
print "<br>";
print "SHOES:$shoes";
print "<br>";
print "TOTAL:$getpoint";


if($getpoint == 0){
  print "<p><img src=\"aaa.gif\" usemap=\"#batu\" alt=\"batu\"></p>";
  print  "<map name=\"kisekae\">";

  print   "</map>";
  print  "<form action=\"http://133.54.224.240/penshu4_2015/67140380/kisekae/kisekae1.php\" method=\"post\">";
  print  "<input type=\"submit\" value=\"CONTINEW\">";

	
}else{
  print "<p><img src=\"ic4g-1_r.jpg\"usemap=\"#maru\" alt=\"maru\"></p>";
}

print "</form>";
print "<map name=\"maru\">";
print "</map>";
print "<form action=\"kisekae5.php\" method=\"post\">";
print   "<input type=\"submit\" value=\"NEXT\">";

pg_close($con);


?>     
</body>

</html>