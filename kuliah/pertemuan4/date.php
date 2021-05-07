<?php
/*
Leni Setiarini
203040047
https://github.com/LeniSetiarini09/pw2021_203040047
Pertemuan 4 (26 Februari 2021)
Mempelajari tentang date pada PHP
*/
?>

<?php
// Date
// Untuk menampilkan tanggal dengan format tertentu
// echo date("l, d-M-Y");

// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 Januari 1970
// echo time();
// echo date("l", time()-60*60*24*100);

// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date ("l", mktime(0,0,0,3,9,2002));


// strtotime
// echo date("l", strtotime("09 March 2002"));
?>