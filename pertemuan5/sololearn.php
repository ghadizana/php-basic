<?php
session_start();

$_SESSION['color'] = "red";
$_SESSION['name'] = "John";
?>
<?php
$num = 18; 
$num--;
echo $num;
?>

<?php 
$array[0] = "the mall";
$array[1] = "David";
$array[2] = "brother";
$array[3] = "the store";
$array[4] = "Rob";
echo "$array[1] went to $array[3]";
?>

<?php
$x = 6;
if ($x ==  10) {
      echo "A";
}
elseif ($x > 7 && $x < 10) {
       echo "B";
}
elseif ($x == 20) {
       echo "C";
}
else {
       echo "D";
}
?>

<?php
function func($arg)  {
    $result = 0;
    for($i=0; $i<$arg; $i++) {
      $result = $result + $i;
    }
    return $result;
  }
  echo func(5);
?>

<?php
function myFunction($a, $b) {
    echo $a * $b;
}
?>


