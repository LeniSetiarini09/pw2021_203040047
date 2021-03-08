<?php
 /*
 Leni Setiarini
 203040047
 https://github.com/LeniSetiarini09/pw2021_203040047
 Pertemuan 5 (5 Maret 2021)
 Latihan 3
 Mempelajari tentang array pada PHP
 */
 ?>

 <?php
$mahasiswa = [
    ["Leni Setiarini", "203040047", "Teknik Informatika", "setiarini.leni@gmail.com"],
    ["Ririn Safira", "203040065", "Teknik Industri", "safira.ririn@gmail.com"],
    ["Siti Mala", "203040068", "Teknik Industri", "mala.siti@gmail.com"]
];

 ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>

    <h1>Daftar Mahasiswa</h1>

<?php foreach( $mahasiswa as $mhs ) : ?>

<ul>
    <!-- <li>Leni Setiarini</li>
    <li>203040047</li>
    <li>Teknik Informatika</li>
    <li>setiarini.leni@gmail.com</li> -->

    <li>Nama : <?= $mhs[0]; ?></li>
    <li>NRP : <?= $mhs[1]; ?></li>
    <li>Jurusan : <?= $mhs[2]; ?></li>
    <li>Email : <?= $mhs[3]; ?></li>
</ul>  
<?php endforeach; ?>
</body>
</html>