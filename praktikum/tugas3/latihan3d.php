<?php
// Leni Setiarini
// 203040047
// Jumat 10.00 - 11.00
?>

<?php
$group = [
    [
        "nama" => "Cristiano Ronaldo",
        "club" => "Juventus",
        "main" => 100,
        "gol" => 76,
        "assist" => 30
    ],
    [
        "nama" => "Lionel Messi",
        "club" => "Barcelona",
        "main" => 120,
        "gol" => 80,
        "assist" => 12
    ],
    [
        "nama" => "Luca Modric",
        "club" => "Real Madrid",
        "main" =>  87,
        "gol" => 12,
        "assist" => 48
    ],
    [
        "nama" => "Mohammad Salah",
        "club" => "Liverpool",
        "main" =>  90,
        "gol" =>  103,
        "assist" =>  8
    ],
    [
        "nama" => "Neymar Jr",
        "club" => "Paris Saint Germain",
        "main" =>  109,
        "gol" =>  56,
        "assist" => 15
    ],
    [
        "nama" => "Sadio Mane",
        "club" => "Liverpool",
        "main" => 63,
        "gol" => 30,
        "assist" => 70
    ],
    [
        "nama" => "Zlatan Ibrahimovic",
        "club" => "Ac Milan",
        "main" => 100,
        "gol" => 10,
        "assist" => 12
    ]
];

$totalmain = 0;
$totalgol = 0;
$totalassist = 0;
?>
<!DOCTYPE html>

<head>
    <title>latihan3d</title>
</head>

<body>
    <table border="1px solid black" cellpadding="3" cellspacing="0">
        <tr>
            <td><b>NO</b></td>
            <td><b>NAMA</b></td>
            <td><b>CLUB</b></td>
            <td><b>MAIN</b></td>
            <td><b>GOL</b></td>
            <td><b>ASSIST</b></td>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($group as $g) : ?>
            <tr>
                <td><?= $i ?> </td>
                <td><?= $g["nama"] ?></td>
                <td><?= $g["club"] ?></td>
                <td><?= $g["main"] ?></td>
                <td><?= $g["gol"] ?></td>
                <td><?= $g["assist"] ?></td>
            </tr>
            <?php $i++;
            $totalmain += $g["main"];
            $totalgol += $g["gol"];
            $totalassist += $g["assist"];
            ?>
        <?php endforeach ?>
        </tr>
        <tr>
            <td>#</td>
            <td colspan="2"><b>
                    <center>Jumlah</center>
                </b></td>
            <td><?= $totalmain  ?></td>
            <td><?= $totalgol  ?></td>
            <td><?= $totalassist  ?></td>
        </tr>
    </table>
</body>
</html>