<?php
/*
Leni Setiarini
203040047
https://github.com/LeniSetiarini09/pw2021_203040047
Pertemuan 4 (26 Februari 2021)
Mempelajari tentang function pada PHP
*/
?>

<?php
function salam($waktu = "Datang", $nama = "Admin") {
    return "Selamat $waktu, $nama!";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Function</title>
</head>
<body>
    <h1><?= salam("Pagi", "Leni"); ?></h1>
</body>
</html>