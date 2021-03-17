<?php
// Leni Setiarini
// 203040047
// Jumat 10.00 - 11.00
?>

<?php
$namapemain = [
    "Cristiano Ronaldo" => "Juventus",
    "Lionel Messi" => "Barcelona",
    "Luca modric" => "Real Madrid",
    "Mohammad Salah" => "Liverpool",
    "Neymar Jr" => "Paris saint germain",
    "Sadio Mane" => "Liverpool",
    "Zlatan Ibrahimovic" => "Ac Milan"
];

?>

<!DOCTYPE html>
<html>

<head>
    <title>latihan3c</title>
</head>

<body>
    <h2><b>Daftar pemain bola terkenal beserta clubnya</b></h2>
    <table>
        <?php foreach ($namapemain as $np => $club) : ?>
            <tr>
                <?php echo "<td><b>$np</b></td>"; ?>
                <td>:</td>
                <td><?= $club; ?></td>
            <tr>
            <?php endforeach; ?>
    </table>

</body>
</html>