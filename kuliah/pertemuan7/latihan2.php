<?php
 /*
 Leni Setiarini
 203040047
 https://github.com/LeniSetiarini09/pw2021_203040047
 Pertemuan 7 (19 Maret 2021)
 Latihan 2
 Mempelajari tentang GET & POST
 */
 ?>

<?php
// cek apakah tidak ada data di $_GET
if( !isset($_GET["judul_buku"]) || 
    !isset($_GET["pengarang"]) ||
    !isset($_GET["penerbit"]) ||
    !isset($_GET["tebal_buku"]) ||
    !isset($_GET["buku_terbit"]) ||
    !isset($_GET["gambar"])) {
    // redirect
    header("Location: latihan1.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Nama Buku</title>
</head>
<body>
    <ul> 
        <li><img src="img/<?= $_GET["gambar"]; ?>"></li>
        <li><?= $_GET["judul_buku"]; ?></li>
        <li><?= $_GET["pengarang"]; ?></li>
        <li><?= $_GET["penerbit"]; ?></li> 
        <li><?= $_GET["tebal_buku"]; ?></li>
        <li><?= $_GET["buku_terbit"]; ?></li>
    </ul>
<a href="latihan1.php">Kembali ke Daftar Nama Buku</a>
</body>
</html>