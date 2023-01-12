<!-- <?php
// Pertemuan 2: Latihan PHP
// Sintaks PHP

// Standar Output
// echo, print
// print-r
// var_dumb

//echo
echo "Ghadiza Naura";
echo "Ghadiza", "Naura", "Aliya<br>"; //it's for array
echo "Ini" . "teks" . "dibuat" . "terpisah<br>"; //concat

print
print "Ghadiza Naura Aliya<br>";

//print-r (menampilkan data, tapi tidak bisa lebih dari satu parameternya)
$nama_siswa = array("Amel", "Asiah", "Beby", "Firasya");
print_r($nama_siswa);

//var-dumb (menampilkan tipe data)
var_dump("Ghadiza Naura Aliya"); //string is for data text

// Penulisan Sintaks di PHP
// 1. Di dalam html
// 2. HTML di dalam php
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan PHP</title>
</head>
<body>

<!-- PHP di dalam html -->
    <h1>Halo, Welcome <?php echo "Ghadiza Naura Aliya"; ?> </h1>
    <p><?php echo "Ini adalah paragraf"; ?></p>

<!-- HTML di dalam PHP -->
<?php 
 echo "<h1> Welcome Ghadiza Naura Aliya</h1>"
 ?>
</body>
</html>