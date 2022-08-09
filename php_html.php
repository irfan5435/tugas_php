<!DOCTYPE html>
<html lang="en">
<head>
    <title>loop while</title>
</head>

<body>
 <?php
  for($i= 2 ; $i <= 98; $i+=2){
    echo $i." ";
  }
  ?>
  <p>tampilan perulangan bilangan genap dari 100 - 0</p>
  <?php 
  $i =100;
  while($i >= 0 ){
    echo "$i";
    echo "<br/>";
    $i-=2;
}
?> </p>
<p>tampilan bilangan yang mempunyai bilangan 8 </p>
<?php
  for ($i=8; $i <= 100; $i=$i+10){
    echo $i;
    echo"<br />";
  }
  ?></p>

</body>
</html>