
<!--  Study Case 1: list siswa 10 programmer dan lahir -->
<?php 
function listSiswa($namaLengkap, $tahunLahir){
    echo "Siswi ini bernama $namaLengkap dan lahir pada tahun $tahunLahir <br>";
}

listSiswa("Amelia Cahyani", "2007");
listSiswa("Asiah", "2007");
listSiswa("Beby Azzura", "2006");
listSiswa("Fildza Nazhifa", "2007");
listSiswa("Firasya Alya Kamila", "2007");
listSiswa("Ghadiza Naura Aliya", "2007");
listSiswa("Hanun Hafizhoh ", "2007");
listSiswa("Nabilla Ramadhani", "2007");
listSiswa("Syahidah Nur Hilma Adilah", "2006");
listSiswa("Syiffa Noriza Nafasyah", "2007");
listSiswa("Tiara Candy Syaqila", "2007");
listSiswa("Zaskia Zun Nurain", "2006");
?>

<!-- Study case 2: Gaji: kotor, tunjangan, setelah pajak -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
*/
</body>
</html> -->

<?php
function pesan($salam, $nama) {
    echo "$salam. <br>";
    echo "Perkenalkan, nama saya $nama <br>";
}

pesan("Hai", "Ghadiza", "\n");

$salam = "Selamat Siang";
$nama = "Ghadiza Naura Aliya";
pesan ($salam, $nama);


function hitungUmur($thn_lahir){
    $umur = date('Y') - $thn_lahir;
    return $umur;
}

//cara panggil
echo "Umur saya adalah ". hitungUmur(2007)." tahun <br>"
?>

<?php
function biodata($nama, $jekel, $tahun_lahir)
{
    echo "Nama: ". $nama. "<br>";
    echo "Jenis Kelamin: ". $jekel. "<br>";
    // panggil fungsi lain
    echo "Umur: ". hitungUmur($tahun_lahir)." tahun <br>";
}

//panggil function
biodata("Ghadiza Naura Aliya", "Perempuan", 2007);
?>
