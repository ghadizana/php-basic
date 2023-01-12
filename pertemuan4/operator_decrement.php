<?php
//Pre-decrement, tambah dulu baru tampil
echo "<h3>Pre-decrement</h3>";
$a = 0;
$i = 1;
$a = --$i;
echo "a = ". $a. "<br>";
echo "i = ". $i. "<br>";

echo "<br>";

//Post-decrement, tampil dulu baru tambah
echo "<h3>Post-decrement</h3>";
$a = 0;
$i = 1;
$a = $i--;
echo "a = ". $a. "<br>";
echo "i = ". $i. "<br>";

?>