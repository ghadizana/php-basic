<?php
// make array (Create)
$months = ["January", "February", "March", "April", "Mei","August","September","October",];

//show array (read)
//var_dump, print_r
var_dump($months);
echo "<br>";
print_r($months);
echo "<br>";

//show 1 element
echo $months[3];
echo "<br>";

//element in to array (upadte)
echo "sebelum ditambah";
var_dump($months);

echo "setelah ditambah";
$months[] = "Novemeber";
var_dump($months);
echo "<br>";

//dellete elemtn array\uns
unset($day[0]);
var_dump($day);

//

?>
