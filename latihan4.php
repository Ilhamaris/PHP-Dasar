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

    /* Operator logika
    == sama dengan
    === identical
    != tidak sama dengan
    <> tidak sama dengan
    !== not identical
    > lebih dari    
    < kurang dari
    >= lebih besar atau sama dengan
    <= kurang dari atau sama dengan
    <=> spaceship
    */
    echo "============<br>";
    $t = date(format: "H"); // mendapatkan jam dengan format 1-24
    echo "If <br>";
    if ($t < 16) {
        echo "Selamat Siang<br>";
    }
    
    echo "============<br>";
    $t = date(format: "H"); // mendapatkan jam dengan format 1-24
    echo "If dan Else <br>";
    if ($t < 16) {
        echo "Selamat Siang <br>";
    } else {
        echo "Selamat Malam <br>";
    }
    
    echo "============<br>";
    $t = date(format: "H"); // mendapatkan jam dengan format 1-24
    echo "Nested If <br>";
    if ($t < 11) {
        echo "Selamat Pagi";
    } elseif ($t < 16) {
        echo "Selamat Sore";
    } else {
        echo "Selamat Malam";
    }




    ?>
</body>

</html>