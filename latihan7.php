<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307051">
    <meta name="author" content="Ilham Aris">
    <link rel="icon" type="img/png" href="img/10.jpg">
    <title>PHP Cuyyy</title>
</head>

<body>
    <h1>Halaman PHP Saya</h1>

    <?php

    $namaBuah = array("Nanas", "Mangga", "Jeruk", "Apel", "Melon", "Manggis");
    echo "Saya suka " . $namaBuah[0] . ", " . $namaBuah[1] . " dan " . $namaBuah[2] . ".<br>";

    // tampilkan Mangga
    echo "Saya suka " . $namaBuah[1] . "<br>";
    // tampilkan Jeruk
    echo "Saya suka " . $namaBuah[2] . "<br>";
    // tampilkan Apel
    echo "Saya suka " . $namaBuah[3] . "<br>";
    // tampilkan Melon
    echo "Saya suka " . $namaBuah[4] . "<br>";

    echo "=======================<br>";
    // array dengan spesifix index
    $umur = array("Andi" => "35 Tahun", "Ben" => "37 Tahun", "Joe" => "25 Tahun");
    $umur['Ahmad'] = "50 Tahun";
    echo "Umur Andi adalah " . $umur['Andi'] . "<br>";
    // tampilkan semua umur
    foreach ($umur as $nama => $nilai_umur) {
        echo "Umur $nama adalah $nilai_umur <br>";
    }
    ?>
</body>

</html>