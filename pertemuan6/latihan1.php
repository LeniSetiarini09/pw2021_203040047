<?php
 /*
 Leni Setiarini
 203040047
 https://github.com/LeniSetiarini09/pw2021_203040047
 Pertemuan 6 (12 Maret 2021)
 Latihan 1
 Mempelajari tentang Associative Array pada PHP
 */
 ?>

<?php
// array
// membuat array
// dengan cara lama
// $hari = array("Senin", "Selasa", "Rabu");
// dengan cara baru
// $bulan = ["Januari", "Februari", "Maret"];
// tipe data yang berbeda
// $arr = [100, "teks", true];

// menampilkan array
// versi debugging
// var_dump ($hari);
// echo "<br>";
// print_r($bulan);
// menampilkan 1 elemen pada array
// echo $arr[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <tittle></title>

    <style>
        .kotak {
            width: 30px;
            height: 30px;
            background-color: #BADA55;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float: left;
            transition: 1s;
        }
        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }
        .clear {
            clear: both;
        }
    </style>
<head>

<body>

<?php
// membagi array, di dalam array, ada angka lagi.
$angka = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
];
?>
<?php foreach ($angka as $a) : ?>
        <?php foreach ($a as $b) : ?>
            <div class="kotak"><?= $b; ?> </div>
        <?php endforeach; ?>
        <div class="clear"></div>
    <?php endforeach; ?>


</body>
</html>