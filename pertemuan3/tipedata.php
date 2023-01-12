<?php 
  // Tipe Data
  $var1 = 5; //integer
  $var2 = 7.5; // float/ double
  $var3 = "We Learn PHP"; //string

  var_dump($var1); 
  var_dump($var3);

  // Tipe data Boolean
  $benar = true;
  if($benar){
    echo "anda benar ";
  }
  var_dump($benar);

  Array
  $siswa=("zaksia", "fildza", "ghadiza", "beby", "tiara");
  print_r($siswa);
  echo "$siswa[1]";
  $siswa=["zaksia", "fildza", "ghadiza", "beby", "tiara"];
  var_dump($siswa);

// tipe data khusus 
 $f = NULL;
 echo "$f";
?>