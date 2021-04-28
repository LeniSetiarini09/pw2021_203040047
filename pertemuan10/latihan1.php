<?php
// koneksi ke DB & Pilih Database
$conn = mysqli_connect('localhost', 'root', '', 'pw_203040047');

// Query isi tabel judul buku
$result = mysqli_query($conn, "SELECT * FROM judulbuku");

// ubah data ke dalam array
// $row = mysqli_fetch_row($result); // array numerik
// $row = mysqli_fetch_assoc($result); // array associative
//  $row = mysqli_fetch_array($result); // keduanya
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}

// tampung ke variable judul buku
$judulbuku = $rows;
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Judul Buku</title>
</head>

<body>
  <h3>Daftar Judul Buku</h3>
  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>gambar</th>
      <th>judul buku</th>
      <th>pengarang</th>
      <th>penerbit</th>
      <th>tebal buku</th>
      <th>buku terbit</th>
      <th>aksi</th>
    </tr>

    <?php foreach ($judulbuku as $jb) : ?>
      <td>1</td>
      <td><img src="img/<?= $jb['gambar']; ?>" width="60"></td>
      <td><?= $jb['judul buku']; ?></td>
      <td><?= $jb['pengarang']; ?></td>
      <td><?= $jb['penerbit']; ?></td>
      <td><?= $jb['tebal buku']; ?></td>
      <td><?= $jb['buku terbit']; ?></td>
      <td>
        <a href="">ubah</a> | <a href="">hapus</a>
      </td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>