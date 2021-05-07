<?php
/*
 Leni Setiarini
 203040047
 https://github.com/LeniSetiarini09/pw2021_203040047
 Pertemuan 10 (30 April 2021)
 Mempelajari mengenai delete, update dan searching data
 */
?>

<?php
require 'functions.php';

// jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

// mengambil id dari url
$id = $_GET['id'];

if (hapus($id) > 0) {
  echo "<script>
          alert('data berhasil dihapus');
          document.location.href = 'index.php';
        </script>";
} else {
  echo "data gagal ditambahkan!";
}
