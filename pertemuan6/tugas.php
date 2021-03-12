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
        [
            "judul buku" => "Dear Nathan",
            "pengarang" => "Erisca Febriani",
            "penerbit" => "Best Media",
            "tebal buku" => "528 halaman",
            "buku terbit" => "2016",
            "gambar" => "dear nathan.jpg",
        ],
        [
            "judul buku" => "Dilan",
            "pengarang" => "Pidi Baiq",
            "penerbit" => "Pastel Books",
            "tebal buku" => "333 halaman",
            "buku terbit" => "2014",
            "gambar" => "dilan.jpg",
        ],
        [
            "judul buku" => "Hujan",
            "pengarang" => "Tere Liye",
            "penerbit" => "Gramedia Pustaka Utama",
            "tebal buku" => "320 halaman",
            "buku terbit" => "Januari 2016",
            "gambar" => "hujan.jpg",
        ],
        [
            "judul buku" => "Laskar Pelangi",
            "pengarang" => "Andrea Hirata",
            "penerbit" => "Bentang Pustaka",
            "tebal buku" => "529 halaman",
            "buku terbit" => "2005",
            "gambar" => "laskar-pelangi.jpg",
        ],
        [
            "judul buku" => "Matahari",
            "pengarang" => "Tere Liye",
            "penerbit" => "Gramedia Pustaka Utaman",
            "tebal buku" => "404 halaman",
            "buku terbit" => "Juli 2016",
            "gambar" => "matahari.jpg",
        ],
        [
            "judul buku" => "Rindu",
            "pengarang" => "Tere Liye",
            "penerbit" => "Republika Penerbit",
            "tebal buku" => "544 halaman",
            "buku terbit" => "Oktober 2014",
            "gambar" => "rindu.jpg",
        ],
        [
            "judul buku" => "Sang Pemimpi",
            "pengarang" => "Andrea Hirata",
            "penerbit" => "Bentang Pustaka",
            "tebal buku" => "292 halaman",
            "buku terbit" => "Juli 2006",
            "gambar" => "sang pemimpi.jpg",
        ],
        [
            "judul buku" => "Sepatu Tua",
            "pengarang" => "Sapardi Djoko Damono",
            "penerbit" => "Gramedia Pustaka Utama",
            "tebal buku" => "114 halaman",
            "buku terbit" => "2019",
            "gambar" => "sepatu tua.jpg",
        ],
    ];
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Macam-macam jenis buku</title>
        </head>
        <body>
            <h1>Macam-macam jenis buku</h1>
       
            <?php foreach ( $jenisbuku as $jb ) : ?>
            <ul>
               <li>
                    <img src="img/<?= $jb["gambar"]; ?>">
                </li>
               <li>Judul Buku : <?= $jb["judul buku"]; ?></li>
               <li>Pengarang : <?= $jb["pengarang"]; ?></li>
               <li>Penerbit : <?= $jb["penerbit"]; ?></li>
               <li>Tebal Buku : <?= $jb["tebal buku"]; ?></li>
               <li>Buku Terbit : <?= $jb["buku terbit"]; ?></li>
            </ul>
            <?php endforeach; ?>
        </body>
        </html>