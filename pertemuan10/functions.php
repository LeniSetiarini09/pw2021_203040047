<?php
/*
 Leni Setiarini
 203040047
 https://github.com/LeniSetiarini09/pw2021_203040047
 Pertemuan 10 (23 April 2021)
 Latihan 1
 Mempelajari mengenai koneksi database dan insert data
 */
?>


<?php

function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'pw_203040047');
}

function query($query)
{
  $conn = koneksi();

  $result = mysqli_query($conn, $query);

  // jika hasilnya hanya 1 data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function tambah($data)
{
  $conn = koneksi();

  $nama = htmlspecialchars($data['nama']);
  $nrp = htmlspecialchars($data['nrp']);
  $email = htmlspecialchars($data['nama']);
  $jurusan = htmlspecialchars($data['jurusan']);
  $gambar = htmlspecialchars($data['gambar']);


  $query = "INSERT INTO
              mahasiswa
              VALUES
              (null, '$nama', '$nrp', '$email', '$jurusan', '$gambar');
              ";
  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}
