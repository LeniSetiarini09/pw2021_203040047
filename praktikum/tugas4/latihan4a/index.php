<?php
// Leni Setiarini
// 203040047
// Jumat 10.00 - 11.00
?>


<?php
// Melakukan koneksi ke database
$conn = mysqli_connect("localhost", "root", "");

// Memilih Database
mysqli_select_db($conn, "pw_tubes_203040047");

// Melakukan Query dari database
$result = mysqli_query($conn, "SELECT * FROM make_up");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Metro 4 -->
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-all.min.css">
  </head>
  <body>
  
    <div class="container">
    <h2>Brands Make Up</h2>
        <table class="table table-border cell-border">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Picture</th>
                    <th scope="col">Name</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Benefits</th>
                    <th scope="col">Price</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_assoc($result)) : ?>
                    <tr>
                        <td><?= $row["id"]; ?></td>
                        <td><img src="../latihan4a/assets/img/<?= $row["Picture"]; ?>"></td>
                        <td><?= $row["Name"]; ?></td>
                        <td><?= $row["Brand"]; ?></td>
                        <td><?= $row["Benefits"]; ?></td>
                        <td class="alert"><?= $row["Price"]; ?></td>
                    </tr>
                <?php endwhile ; ?>
            </tbody>
        </table>
    </div>
</table>

    <!-- Metro 4 -->
    <script src="https://cdn.metroui.org.ua/v4/js/metro.min.js"></script>
  </body>
</html>
