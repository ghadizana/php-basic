<?php
//Pre-increment, tambah dulu baru tampil
echo "<h3>Preincrement</h3>";
$a = 0;
$i = 1;
$a = ++$i;
echo "a = ". $a. "<br>";
echo "i = ". $i. "<br>";

echo "<br>";

//Post-incerement, tampil dulu baru tambah
echo "<h3>Post-increment</h3>";
$a = 0;
$i = 1;
$a = $i++;
echo "a = ". $a. "<br>";
echo "i = ". $i. "<br>";
echo "a = ". $a. "<br>";

?>