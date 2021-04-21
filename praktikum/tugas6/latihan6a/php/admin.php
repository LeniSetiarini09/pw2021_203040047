<?php
// Leni Setiarini
// 203040047
// Jumat 10.00 - 11.00
?>

<?php
// menghubungkan dengan file php lainnya
    require 'functions.php';

    if (isset($_GET['cari'])) {
        $keyword = $_GET['keyword'];
        $makeup = query("SELECT * FROM make_up WHERE
            name LIKE '%$keyword%' OR 
            brand LIKE '%$keyword%' OR 
            benefits LIKE '%$keyword%' OR 
            price LIKE '%$keyword%' 
            ");
    } else {
        $makeup = query("SELECT * FROM make_up");
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Make Up</title>
    <!-- Metro 4 -->
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-all.min.css">
  </head>
  <body>
  
    <div class="container">
    <h2>Brands Make Up</h2>
    <div class="add">
        <a href="tambah.php">Tambah Data</a>
        <form action="" method="get">
            <input type="text" name="keyword" autofocus>
            <button type="submit" name="cari">Search!</button>
        </form>
    </div>
    <div class="logout">
        <a href="logout.php">Logout</a>
    </div>
        <table class="table table-border cell-border">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Opsi</th>
                    <th>Picture</th>
                    <th>Name</th>
                    <th>Brand</th>
                    <th>Benefits</th>
                    <th>Price</th>
                </tr>
                </thead>
            <tbody>
            <?php if (empty($makeup)) : ?>
                <tr>
                    <td colspan="7">
                        <h1>Data tidak ditemukan</h1>
                    </td>
                </tr>
        <?php else : ?>
            <?php $i = 1; ?>
            <?php foreach ($makeup as $mp) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td>
                    <a href="ubah.php?id=<?= $mp['id']; ?>"><button>Ubah</button></a>
                            <a href="hapus.php?id=<?= $mp['id']; ?>"><button>Hapus</button></a>
                        </td>
                        <td><img src="../assets/img/<?= $mp["Picture"]; ?>" alt=""></td>
                        <td><?= $mp["Name"]; ?></td>
                        <td><?= $mp["Brand"]; ?></td>
                        <td><?= $mp["Benefits"]; ?></td>
                        <td class="alert"><?= $mp["Price"]; ?></td>
                        <td><a href="php/detail.php?id=<?= $mp["id"];?>">detail</a></td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach ; ?>
            <?php endif; ?>

            </tbody>
        </table>
    </div>
</table>

    <!-- Metro 4 -->
    <script src="https://cdn.metroui.org.ua/v4/js/metro.min.js"></script>
  </body>
</html>