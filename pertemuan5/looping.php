<?php //for, jalanin dulu baru periksa
for ($i=0; $i<5; $i++){ //inisialisasi, kondisi/terminasi, increment/decrement
    echo "baris ke-$i<br>";
}
?>

<?php //while, periksa kondisi baru jalan
$x = 1;
while ($x <= 5) {
    echo "The number is $x <br>";
    $x++;
}
?>

<?php
$x = 0;
while ($x <= 100) {
    echo "The number is $x <br>";
    $x+= 10;
}
?>

<?php //do while, jalan dulu baru periksa
$x = 1;
do {
    echo "The number is: $x <br>"; $x++;
} while ($x <= 5);
?>

<?php
$colors = ["red", "green", "blue", "yellow"];

foreach ($colors as $value) {
    echo "$value <br>";
}
?>

<?php
$age = array(
    "Peter"=>"35",
    "Ben"=>"37",
    "Joe"=>"43");

    foreach ($age as $x => $val) {
        echo "$x = $val<br>";
    }

?>