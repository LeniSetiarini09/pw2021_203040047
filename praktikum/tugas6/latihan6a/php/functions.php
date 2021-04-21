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
    while ( $row = mysqli_fetch_assoc($result)) {
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
    $picture = htmlspecialchars($data['picture']);

    $query = "INSERT INTO make_up
                    VALUES
                    ('', '$Picture', '$Name', '$Brand', '$Benefits', '$Price')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// menghapus data
function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM make_up WHERE id = $id");

    return mysqli_affected_rows($conn);
}

// mengubah data
function ubah($data)
{
    $conn = koneksi();
    $id = $data['id'];
    $name = htmlspecialchars($data['name']);
    $brand = htmlspecialchars($data['brand']);
    $benefits = htmlspecialchars($data['benefits']);
    $price = htmlspecialchars($data['price']);
    $picture = htmlspecialchars($data['picture']);

    $query = "UPDATE make_up
            SET
            name = '$name',
            brand = '$brand',
            benefits = '$benefits',
            price = '$price',
            picture = '$picture',
            WHERE id = $id
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword) {
    $query = "SELECT * FROM make_up WHERE 
            name LIKE '%$keyword%' OR 
            brand LIKE '%$keyword%' OR 
            benefits LIKE '%$keyword%' OR 
            price LIKE '%$keyword%' 
            ";
        return query($query);
}
?>