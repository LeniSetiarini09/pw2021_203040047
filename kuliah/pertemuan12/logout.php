<?php
/*
 Leni Setiarini
 203040047
 https://github.com/LeniSetiarini09/pw2021_203040047
 Pertemuan 12 (7 Mei 2021)
 Mempelajari mengenai login dan registrasi
 */
?>

<?php
session_start();
session_destroy();
header("Location: login.php");
exit;
