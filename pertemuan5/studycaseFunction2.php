<!-- Study case 2: Jumlah gaji pegawai berikut dengan nama karyawan dan bonus -->
<?php
   function gajiPegawai($namaKaryawan, $gaji, $bonus){
    if ($bonus == 0){
        return $gaji;
    } else {
        return $gaji + $bonus;
    }
   }

   $gaji1 = gajiPegawai("Siti Ratnasari", 3000000, 0);
   $gaji2 = gajiPegawai("Dewi Purnamasari", 4500000, 150000);
   $gaji3 = gajiPegawai("Rania Hapsah", 6000000, 200000);

   echo "Gaji Karyawan: ". $gaji1. "<br>";
   echo "Gaji Karyawan: ". $gaji2. "<br>";
   echo "Gaji Karyawan: ". $gaji3. "<br>";

?>

