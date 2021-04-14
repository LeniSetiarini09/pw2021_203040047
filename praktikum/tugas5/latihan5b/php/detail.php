<?php
// Leni Setiarini
// 203040047
// Jumat 10.00 - 11.00
?>


<?php
// Mengecek apakah ada id yang dikirimkan
// jika tidak maka akan dikembalikan ke halaman index.php
if (!isset($_GET['id'])) {
    header("location:../index.php");
    exit;
}
require ('functions.php');

// Mengambil id dari url
$id = $_GET['id'];

// melakukan query dengan parameter id yang diambil dari url
$mp = query("SELECT * FROM make_up WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Metro 4 -->
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-all.min.css">
  </head>
  <body>
    <div class="container">
        <div class="gambar">
            <img src="../assets/img/<?= $mp["Picture"]; ?>" alt="">
        </div>
        <div class="keterangan">
            <p><?= $mp["Name"]; ?></p>
            <p><?= $mp["Brand"]; ?></p>
            <p><?= $mp["Benefits"]; ?></p>
            <p><?= $mp["Price"]; ?></p>
        </div>

    <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>
        
    <!-- Metro 4 -->
    <script src="https://cdn.metroui.org.ua/v4/js/metro.min.js"></script>
  </body>
</html>