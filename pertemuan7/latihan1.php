<?php
 /*
 Leni Setiarini
 203040047
 https://github.com/LeniSetiarini09/pw2021_203040047
 Pertemuan 7 (19 Maret 2021)
 Latihan 1
 Mempelajari tentang GET & POST
 */
 ?>

<?php
// Variable Scope / lingkup variable
// $x = 10;
// function tampilX() {
//  global $x;
//   echo $x;
// }
// tampilX();

// SUPERGLOBALS
// variable global milik PHP
// merupakan Array Associative
// var_dump($_SERVER);
// echo $_SERVER["SERVER_NAME"];


// $_GET
// $_GET["nama"] = "Leni Setiarini";
// $_GET["nrp"] = "203040047";

$jenisbuku = [
    [
        "judul buku" => "Bulan",
        "pengarang" => "Tere Liye",
        "penerbit" => "Gramedia Pustaka Utama(Jakarta)",
        "tebal buku" => "440 halaman",
        "buku terbit" => "16 Januari 2015",
        "gambar" => "bulan.jpg",
    ],
    [
        "judul buku" => "Milea Suara Dari Dilan",
        "pengarang" => "Pidi Baiq",
        "penerbit" => "Pastel Books",
        "tebal buku" => "360 halaman",
        "buku terbit" => "2016",
        "gambar" => "milea.jpg",
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
<h1>Daftar Nama Buku</h1>
<ul>
<?php foreach( $jenisbuku as $jb ) : ?>
    <li>
       <a href="latihan2.php?judul buku=<?= $jb["judul buku"]; ?>&pengarang=<?= $jb["pengarang"]; ?>&penerbit=<?= $jb["penerbit"]; ?>&tebal buku=<?= $jb["tebal buku"]; ?>&buku terbit=<?= $jb["buku terbit"]; ?>&gambar=<?= $jb["gambar"]; ?>"><?= $jb["judul buku"]; ?></a>
    </li>
<?php endforeach; ?>
</ul>
</body>
</html>
