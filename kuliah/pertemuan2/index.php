<?php
/*
Leni Setiarini
203040047
https://github.com/LeniSetiarini09/pw2021_203040047
Pertemuan 2 (12 Februari 2021)
Mempelajari mengenal sintaks PHP Dasar
*/
// ini adalah komentar
// ini juga komentar

// Standar Output
// echo, print
// var_dump

// echo "Leni Setiarini"
// Penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

// variabel dan Tipe Data
// variabel
// tidak boleh diawali dengan angka, tapi boleh mengandung angka
// $nama = "Leni Setiarini";
// echo 'Halo, nama saya $nama';

// operator
// aritmatika
// + - * / %
// $x = 10;
// $y = 20;
// echo $x * $y;

// penggabung string / contatenation / concat
// . 
// $nama_depan = "Leni";
// $nama_belakang = "Setiarini";
// echo $nama_depan ." " . $nama_belakang;

// assignment
// =, +=, -=, *=, /=, %=, .=
// $x = 1;
// $x -= 5;
// echo $x;
// $nama = "Leni";
// $nama .= " ";
// $nama .= "Setiarini";
// echo $nama;

// perbandingan
// <, >, <=, >=, ==, !=
// var_dump(1 == "1");

// identitas
// ===, !==
// var_dump(1 === "1");

// logika
// &&, ||, !
$x = 30;
// var_dump($x < 20 && $x % 2 == 0);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <tittle>Belajar PHP</title>
</head>
<body>
    <h1>Halo, Selamat Datang <?php echo "Leni"; ?></h1>
</body>
<html>