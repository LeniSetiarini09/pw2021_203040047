<?php
// Leni Setiarini
// 203040047
// Jumat 10.00 - 11.00
?>

<?php
$namapemain = [
    "Mohammad Salah",
    "Critiano Ronaldo",
    "Lionel Messi",
    "Zlatan Ibrahimovic",
    "Neymar Jr"
];
?>
<!DOCTYPE html>
<html>

<head>
    <title>latihan3b</title>
</head>

<body>
    <p><b>Daftar pemain bola terkenal</b></p>
    <ol>
        <?php
        foreach ($namapemain as $np) {
            echo "<li>$np</li>";
        }
        ?>
    </ol>

    <?php
    $namapemain[] = "Luca Modric";
    $namapemain[] = "Sadio Mane";
    sort($namapemain);
    ?>
    <p><b>Daftar pemain bola terkenal baru</b></p>
    <ol>
        <?php
        foreach ($namapemain as $np) {
            echo "<li>$np</li>";
        }
        ?>
    </ol>
</body>
</html>
