<?php
/*
Leni Setiarini
203040047
https://github.com/LeniSetiarini09/pw2021_203040047
Pertemuan 3 (19 Februari 2021)
Mempelajari tentang Struktur Kendali PHP yaitu tentang Pengulangan dan Pengkondisian pada PHP
*/
?>

<?php 
// Pengulangan
// for
// while
// do.. while
// foreach : pengulangan khusus array

// for( $i = 0; $i < 5; $i++ ) {
//  echo "Hello World! <br>";
// }

// $i = 10;
// while( $i < 5 ) {
//  echo "Hello World! <br>";
// $i++;
// }
// $i = 10;
// do {
//  echo "Hello World! <br>";
// $i++;
// } while( $i < 5 );

// pengkondisian / Percabangan
// if else
// if else if else
// ternary
// switch

// $x = 2;
// if( $x == 20 ) {
//    echo "benar"
// } else if ( $x == 20 ) {
//    echo "bingo!";
// } else {
//   echo "salah";
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pertemuan 3</title>
    <style>
        .warna-baris {
            background-color: silver;
        }
    </style>
</head>
<body>
    
<table border="1" cellpadding="10" cellspacing="0">
   <?php for( $i = 1; $i <= 5; $i++) : ?> 
        <?php if( $i % 2 == 1 ) : ?>
        <tr class="warna-baris">
        <?php else : ?>
            <tr>
        <?php endif; ?>
            <?php for( $j = 1; $j <= 5; $j++ ) : ?>
                <td><?= "$i, $j"; ?></td>
            <?php endfor; ?>
        </tr>
   <?php endfor; ?>
</table>
</body>
</html>