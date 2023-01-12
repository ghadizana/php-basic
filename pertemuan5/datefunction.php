<?php
//built in function

//function date
// l -> day name
// d -> date
// M -> Month (huruf)
// m -> month (angka)

echo date("m");
echo "<br>";

echo date("l, d M Y");
echo "<br>";

//function time
echo date("l", time()); //pake date untuk dua parameter
echo "<br>";
echo time(); //unixtimestamp, 1 jam 1970, epoch time
echo "<br>";

echo date("l", time()-60*60*24*100);
//60 -> detik
//60-> jam
//24 -> jam dalam sehari
//2 -> hari yang mau ditebak

echo date("d M Y", time()-60*60*24*100);
echo "<br>";
//mktime, inputan angka
// jam, menit, detik, bulan, tanggal, tahun
echo mktime(0,0,0,0,0,0);
echo "<br>";
echo date("l", mktime(0,0,0,8,6,2007));
echo "<br>";

//strtotime, inputan teks
echo strtotime("06 Aug 2007"); 
echo "<br>";
echo strtotime("l", strtotime("06 Aug 2007"));

?>