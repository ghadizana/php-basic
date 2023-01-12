<?php
$nilai = 88;
echo "Ghadiza Naura Aliya - X Programmer";
echo "<br>";

echo "Nilai anda: $nilai";

echo "<br>";
if ($nilai >"90") {
    echo "Grade: A+";
} elseif ($nilai >80) {
    echo "Grade: A";
} elseif ($nilai >70) {
    echo "Grade: B+";
} elseif ($nilai >60) {
    echo "Grade: B";
} elseif ($nilai >50) {
    echo "Grade: C+";
} elseif ($nilai >40) {
    echo "Grade: C";
} elseif ($nilai >30) {
    echo "Grade: D";
} elseif ($nilai >20) {
    echo "Grade: E";
} else {
    echo "Grade: F";
}

?>