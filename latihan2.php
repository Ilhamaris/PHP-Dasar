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
    // variabel dalam php
    $txt = "Selamat datang!";
    $txt2 = "Politeknik Negeri Madiun";
    $x = 5;
    $y = 10.5;

    echo "<p>isi variabel txt adalah $txt</p>";
    echo "<p>isi variabel x adalah $x</p>";
    echo "<p>isi variabel y adalah $y</p>";
    echo "Belajar PHP di " . $txt2 . "<br>";
    echo $x + $y;

    // PHP Konstanta
    define("nama", "Ilham Aris");
    echo "<br>" . nama;
    ?>
</body>

</html>