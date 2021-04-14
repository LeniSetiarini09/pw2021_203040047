<?php
// Leni Setiarini
// 203040047
// Jumat 10.00 - 11.00
?>


<?php
// fungsi untuk melakukan koneksi ke database
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040047");

    return $conn;
}

// function untuk melakukan query dan memasukannya kedalam array
function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result) ) {
        $rows [] = $row;
    }
    return $rows;
}

// fungsi untuk menambahkan data didalam database
function tambah($data) 
{
    $conn = koneksi();

    $name = htmlspecialchars($data['name']);
    $brand = htmlspecialchars($data['brand']);
    $benefits = htmlspecialchars($data['benefits']);
    $price = htmlspecialchars($data['price']);
    $picture= htmlspecialchars($data['picture']);

    $query = "INSERT INTO make_up
                    VALUES
                    ('', '$Picture', '$Name', '$Brand', '$Benefits', '$Price')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>