<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Example 2 -->
    <?php
    $day = 4;
    if ($day == 1){
        echo "Hari ke-1: adalah hari ahad";
    } elseif ($day ==2) {
        echo "Hari ke-2: adalah hari senin";
    } elseif ($day ==3) {
        echo "Hari ke-3: adalah hari selasa";
    } elseif ($day ==4) {
        echo "Hari ke-4: adalah hari rabu";
    } elseif ($day ==5) {
        echo "Hari ke-5: adalah hari kamis";
    } elseif ($day ==6) {
        echo "Hari ke-6: adalah hari jum'at";
    } elseif ($day ==7) {
        echo "Hari ke-7: adalah hari sabtu";
    } else {
        echo "Tidak ada hari yang sesuai";
    }
    ?>
<br>


    <?php
    $t = date ("H");

    if ($t < "10") {
        echo "Have a good morning!";
    } elseif ($t < "20") {
        echo "Have a good day!";
    } else {
        echo "Have a good night!";
    }
    ?>
</body>
</html>