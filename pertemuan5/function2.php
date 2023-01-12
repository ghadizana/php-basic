<?php
function hitungHarga($nama_produk, $harga, $diskon=0){
    if ($diskon == 0){
        return $harga;
    } else {
        return $harga - ($harga * ($diskon/100));
    }
}

$harga1 = hitungHarga("kaos", 250000);
$harga2 = hitungHarga("kemeja", 500000, 20);
$harga3 = hitungHarga("jaket", 700000, 30);

echo "Harga kaos: ". $harga1. "<br>";
echo "Harga kemeja: ". $harga2. "<br>";
echo "Harga jaket: ". $harga3. "<br>";
?>