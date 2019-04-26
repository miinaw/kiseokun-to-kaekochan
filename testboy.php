<!DOCTYPE html>
<html lang="ja">
<head>
<link rel="stylesheet" type="text/css" href="hello.css">
<meta charset="utf-8">
<title>kisekae</title>
</head>
<body>
<h1><center>きせおくん</center></h1>
<br>
<br>
<br>
<br>
<center><img src="boy1.jpg" alt="きせお" width="200" height="200"></center>
<center><img src="boy2.jpg" alt="top" width="200" height="200"></center>
<center><img src="boy3.jpg" alt="bottoms" width="200" height="200"></center>
<center><img src="boy4.jpg" alt="kutsu"  width="125" height="90"></center>

<?php
   $topImages = array('nothing' => 'nothing.jpg',
'top1' => 'kiseotops1.jpg',
                   'top2' => 'kiseotops2.jpg');

if(isset($_POST['top'])){
  $valueTop = $_POST['top'];
}else{
  $valueTop = 'nothing';
}
print $_POST['top'];
?>


<img src='<?php print $topImages[$valueTop] ?>'>
<form action="testboy.php" method="post">
  <select name="top"> 
  <option>nothing</option>
   <option>top1</option> 
   <option>top2</option>

  </select>





<?php
   $bottomsImages = array('nothing' => 'nothing.jpg',
                   'bottoms1' => 'kiseopants1.jpg',
                   'bottoms2' => 'kiseopants2.jpg');

if(isset($_POST['bottoms'])){
  $valueBottoms = $_POST['bottoms'];
}else{
  $valueBottoms = 'nothing';
}
print $_POST['bottoms'];
?>
<img src='<?php print $bottomsImages[$valueBottoms] ?>'>
  <select name="bottoms"> 
  <option>nothing</option>
   <option>bottoms1</option> 
   <option>bottoms2</option>
 </select>



<?php
   $kutsuImages = array('nothing' => 'nothing.jpg',
'kutsu1' => 'kiseokutsu1.jpg',
                   'kutsu2' => 'kiseokutsu2.jpg');

if(isset($_POST['kutsu'])){
  $valueKutsu = $_POST['kutsu'];
}else{
  $valueKutsu = 'nothing';
}
print $_POST['kutsu'];
?>
<img src='<?php print $kutsuImages[$valueKutsu] ?>'>
<form action="testboy.php" method="post">
  <select name="kutsu"> 
  <option>nothing</option>
   <option>kutsu1</option> 
   <option>kutsu2</option>

 


  </select>


 <input type="submit" value="Look!!!!">

</form>
<form action="http://133.54.224.240/penshu4_2015/67140380/kisekae/kisekae4.php" method="post">
<input type="submit" value="Finish!!!!">


</body>


 
</html>

