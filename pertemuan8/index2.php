<?php
//koneksi database
//host, username admin, password, nama database

$conn = mysqli_connect("localhost", "root", "", "cruddb"); //wajib ada

//query menampilkan data
//ada dua parameter
$result = mysqli_query($conn, "SELECT * FROM siswi"); //wajib ada
//var_dump($result);

//cara ambil data siswa dari object result ada 4 (fetch data)
//1. mysqli_fetch_row() menampilkan dalam bentuk index
//2. mysqli_fetch_assoc() menampilkan dalam bentuk asosiatif
//3. mysqli_fetch_array() mneampilkan array
// $si = mysqli_fetch_row($result);
// var_dump($si[2]);
$si = mysqli_fetch_assoc($result); //wajib ada
// var_dump($si);

// $si = mysqli_fetch_array($result);
// var_dump($si[2]);
// var_dump($si);

//my_sqli_fetch_object() menampilkan dalam bentuk objek
// $si = mysqli_fetch_object($result);
// var_dump($si -> nama);

//menampilkan seluruh data, menggunakan looping (while)
// while ($si = mysqli_fetch_assoc($result)) {
//     var_dump($si);
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data siswi</title>
</head>
<body>
    <h1>Data siswi</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>ID</th>
            <th>Nama</th>
            <th>NIS</th>
            <th>Email</th>
            <th>Jurusan</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>
        
        <?php $i = 1?>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>

        <tr>
             <td><= $i ?></td>
             <td><?= $row["id"] ?></td>
             <td><?= $row["nama"] ?></td>
             <td><?= $row["nis"] ?></td>
             <td><?= $row["email"] ?></td>
             <td><?= $row["jurusan"] ?></td>
             <td><img src="img/<?= $row["gambar"] ?>" width= 50></td>
             <td>
                <a href="">Ubah</a> | 
                <a href="">Hapus</a>
             </td>
        </tr>
        <?php $i++ ?>
        <?php endwhile ?>



</table>
</body>
</html>