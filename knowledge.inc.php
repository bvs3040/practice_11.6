<?php
$x = $_POST["firstVariable"];
$y = $_POST["secondVariable"];
echo "$x+$y= " . $x+$y;
?><br>

<?php
echo "'$x'+'$y'= " . "$x","$y";
?><br>

<?php
echo '($y=$y*$x)=($y*=$x)= ' . $y*=$x;
?><br>



<?php
$a = 'Мои знания на';
$b = 100;
$c = '%'; 
?>

<?php
  $price = &$x;

  if($price >= 15 && $price <= 20)
      $d = "$price - это число находится между 15 и 20";
      else $d= "$price - это число не из интервала 15-20"
?><br>


