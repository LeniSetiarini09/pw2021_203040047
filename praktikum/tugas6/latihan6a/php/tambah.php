<?php
// Leni Setiarini
// 203040047
// Jumat 10.00 - 11.00
?>

<?php
require 'functions.php';

if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                    alert('Data Berhasil ditambahkan!');
                    document.location.href = 'admin.php';
                </script>";
    } else {
        echo "<script>
                    alert('Data Gagal ditambahkan!');
                    document.location.href = 'admin.php';
                </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make Up</title>
</head>
<body>
<h3>Form Tambah Data MakeUp</h3>
<form action="" method="post">
    <ul>
        <li>
            <label for="name">Name :</label><br>
            <input type="text" name="name" id="name" required><br><br>
        </li>
        <li>
            <label for="brand">Brand:</label><br>
            <input type="text" name="brand" id="brand" required><br><br>
        </li>
        <li>
            <label for="benefits">Benefits:</label><br>
            <input type="text" name="benefits" id="benefits" required><br><br>
        </li>
        <li>
            <label for="price">Price:</label><br>
            <input type="text" name="price" id="price" required><br><br>
        </li>
        <li>
            <label for="brand">Brand :</label><br>
            <select name="brand" id="brand" required>
                <option value="">-------------- Pilih Brand ---------------</option>
                <option value="Wardah">Wardah</option>
                <option value="Mustika Ratu">Mustika Ratu</option>
                <option value="Loreal">Loreal</option>
            </select>
        </li>
        <li>
            <br>
            <button type="submit" name="tambah">Tambah Data!</button>
            <button type="submit">
                <a href="index.php" style="text-decoration: none; color: black;">Kembali</a>
            </button>
        </li>
    </ul>
</form>
</body>
</html>