<?php
 /*
 Leni Setiarini
 203040047
 https://github.com/LeniSetiarini09/pw2021_203040047
 Pertemuan 6 (12 Maret 2021)
 Latihan 1
 Mempelajari tentang Associative Array pada PHP
 */
 ?>

 <?php
//  $mahasiswa = [
//      ["Leni Setiarini", "203040047","setiarini.leni@gmail.com", "Teknik Informatika"],
//      ["Ririn Syafira", "203040065", "ririn.safira@gmail.com", "Teknik Pangan"]
//      ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Leni Setiarini",
        "nrp" => "203040047",
        "email" =>"setiarini.leni@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Siti Komala",
        "nrp" => "203040070",
        "email" => "komala.siti@gmail.com",
        "jurusan" => "Teknik Industri",
        ]
];
// echo $mahasiswa[1]["email"];
// echo $mahasiswa[1]["jurusan"];
//echo $mahasiswa[1]["tugas"][1];

// echo $mahasiswa["jurusan"];
// echo $mahasiswa["nama"];

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

     <?php foreach ( $mahasiswa as $mhs ) : ?>
     <ul>
        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>NRP : <?= $mhs["nrp"]; ?></li>
        <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
        <li>Email : <?= $mhs["email"]; ?></li>
     </ul>
     <?php endforeach; ?>
 </body>
 </html>