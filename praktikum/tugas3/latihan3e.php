<?php
// Leni Setiarini
// 203040047
// Jumat 10.00 - 11.00
?>

<?php
$makeup = [
    [
        "No" => "1",
        "Picture" => "maskara.jpg",
        "Name" => "Mascara",
        "Brand" => "Maybelline",
        "Benefits"=> "Agar bulu mata terlihat lebih tebal, lentik dan panjang. Sehingga akan tampak lebih indah",
    ],
    [
        "No" => "2",
        "Picture" => "eyeshadow.jpg",
        "Name" => "Eye Shadow",
        "Brand" => "Inez",
        "Benefits"=> "Sebagai pengindah pada kelopak mata",
    ],
    [
        "No" => "3",
        "Picture" => "pensilalis.jpg",
        "Name" => "Pensil Alis",
        "Brand" => "Viva",
        "Benefits"=> "Mempertebal alis dan merapihkan alis",
    ],
    [
        "No" => "4",
        "Picture" => "blush-on.jpg",
        "Name" => "Blush On",
        "Brand" => "Emina",
        "Benefits"=> "Untuk memerahkan pipi sehingga memberikan penampilan yang lebih menarik",
    ],
    [
        "No" => "5",
        "Picture" => "lipstik.jpg",
        "Name" => "Lipstik",
        "Brand" => "Purbasari",
        "Benefits"=> "Melembabkan dan melindungi bibir dari paparan sinar matahari, selain itu liptik juga bisa membuat bibir menjadi lebih terlihat berwarna",
    ],
    [
        "No" => "6",
        "Picture" => "eyeliner.jpg",
        "Name" => "Eye liner",
        "Brand" => "Mizzu",
        "Benefits"=> "Untuk mempertegas garis pada mata, tampilan mata pun menjadi lebih menarik",
    ],
    [
        "No" => "7",
        "Picture" => "concealer.jpg",
        "Name" => "Concealer",
        "Brand" => "Make over",
        "Benefits"=> "Untuk menutupi noda seperti bekas jerawat pada wajah",
    ],
    [
        "No" => "8",
        "Picture" => "foundation.jpg",
        "Name" => "Foundation",
        "Brand" => "Revlon",
        "Benefits"=> "Sebagai alas pada make up yang berfungsi untuk meratakan kulit pada wajah",
    ],
    [
        "No" => "9",
        "Picture" => "bedak.jpg",
        "Name" => "Bedak",
        "Brand" => "Focallure Face",
        "Benefits"=> "Membuat wajah menjadi lebih bersinar, kulit wajah terlihat lebih lembut dan terlihat lebih cerah",
    ],
    [
        "No" => "10",
        "Picture" => "primer.jpg",
        "Name" => "Primer",
        "Brand" => "Pixy",
        "Benefits"=> "Membantu melembapkan kulit sekaligus membuat hasil make up menjadi sempurna dan tahan lama",
    ],
];
?>
<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Brands Make Up</title>
    </head>
<body>

    <div class="container">
        <table class="table table-striped mt-3 mb-3">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Picture</th>
                    <th scope="col">Name</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Benefits</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($makeup as $mp) : ?>
                    <tr>
                        <td><?= $mp["No"]; ?></td>
                        <td><img src="img/<?= $mp["Picture"]; ?>"></td>
                        <td><?= $mp["Name"]; ?></td>
                        <td><?= $mp["Brand"]; ?></td>
                        <td><?= $mp["Benefits"]; ?></td>
                    </tr>
                <?php endforeach ; ?>
            </tbody>
        </table>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
    
    </body>
</html>