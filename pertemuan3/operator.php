<?php
 //pertemuan 3 - latihan PHP
 //operator

 //operator aritmatika
 // +, -, *, /, %

 //  $a = 10;
 //  $b = 20;

 //  $total = $a % $b;
 //  echo $total;

 //operator assignment
//  $speed ="83";
//  $speed /= 10;
//  echo $speed;

//operator relation. kalau hasil benar: 1; " "
$a = 6;
$b = 2;

//menggunakan operator lebih besar
$c = $a > $b;
echo "$a > $b : $c <br>";

//menggunakan operator lebih kecil
$c = $a < $b;
echo "$a < $b : $c <br>";

//menggunakan operator lebih kecil
$c = $a == $b;
echo "$a == $b : $c <br>";

//menggunakan operator tidak sama dengan
$c = $a != $b;
echo "$a != $b : $c <br>";

//menggunakan operator lebih besar sama dengan
$c = $a >= $b;
echo "$a >= $b : $c <br>";

//menggunakan operator lebih kecil sama dengan
$c = $a <= $b;
echo "$a <= $b : $c <br>";


//logic operator
// &&, ||, !

$x = 10;
var_dump($x > 20 || $x %2 ==0);
var_dump($x >=! 20);

?>