<!-- Study case 3: Menghitung Bangun Datar -->
<?php

function luas_layangLayang($diagonal1, $diagonal2){
    $hasil = ($diagonal1 * $diagonal2) * 2;
    echo "Luas layang-layang dengan panjang diagonal $diagonal1 dan $diagonal2 adalah $hasil cm^2<br>";
}
function luas_segitiga($alas, $tinggi){
    $hasil = ($alas * $tinggi) /2;
    echo "Luas segitiga dengan alas $alas dan tinggi $tinggi adalah $hasil cm^2 <br>";
}
function luas_persegi_panjang($panjang, $lebar)
{
    $hasil = $panjang * $lebar;
    echo "Luas persegi panjang dengan panjang= $panjang dan lebar $lebar adalah $hasil cm^2";
}
luas_layangLayang(10,20);
luas_segitiga(50,80);
luas_persegi_panjang(5,10);
?>


