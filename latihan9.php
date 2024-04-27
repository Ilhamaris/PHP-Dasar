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

    // contoh fungsi
    function writeMsg($nama)
    {
        echo "Selamat datang " . $nama . "<br>";
    }
    writeMsg("Ilham"); // pemanggilan fungsi

    // fungsi dengan mengirim nilai balik
    function tambah(int $angka1, int $angka2)
    {
        $a = $angka1 + $angka2;
        return $a; //mengirim nilai $a ke pemanggil
    }
    $hasil = tambah(19, 22);
    echo ($hasil);

    ?>
</body>

</html>