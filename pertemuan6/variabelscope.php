<?php

//variabel lokal
$x = 10; //inisialisasi, deklarasi
//echo $x;
echo "<br>";
function tampilx(){
    global $x; //panggil variabel dari luar pake global
    echo $x;
}
tampilx();

var_dump($_SERVER); //dd
?>