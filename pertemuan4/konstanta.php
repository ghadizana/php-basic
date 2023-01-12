<?php
echo "Menhitung Volume Bola \n";
echo "------------------------ \n";

// Menggunakan const
const PI = 3.14;
echo "Masukkan Jari-jari bola : ";
$r = fgets(STDIN);
$volume = PI * $r * $r;
echo "rumus Volume bola adalah ". $volume. "\n";


?>