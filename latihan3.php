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
    $x = 4;
    $y = 10;

    //Aritmatika operation
    echo "Penambahan " . $x + $y . "<br>";
    echo "Pengurangan " . $x - $y . "<br>";
    echo "Perkalian " . $x * $y . "<br>";
    echo "Pembagian " . $x / $y . "<br>";
    echo "Modulus " . $y % $x . "<br>";
    echo "Exponensial " . $x ** $y . "<br>";
    echo ("<br>");

    //Assigment operation
    $x += 2; // $x = $x + 2 
    $y *= 2; // $y = $y * 2
    echo "Penambahan x " . $x . "<br>";
    echo "Perkalian y " . $y . "<br>";
    echo ("<br>");

    //increment/decrement operation
    echo "Isi ++x = " . ++$x . "<br>";
    echo "Isi x++ = " . $x++ . "<br>";
    echo "Isi x = " . $x . "<br>";
    echo ("<br>");
    echo "Isi --y = " . --$x . "<br>";
    echo "Isi y-- = " . $x-- . "<br>";
    echo "Isi y = " . $y . "<br>";
    echo ("<br>");

    //Conditional assigment operators
    $user = "Ilham Aris";
    // <kondisi> ? <nilai_jika_kondisi_true> : <nilai_jika_kondisi_false>
    $status = (empty($user)) ? "Kosong" : "Ada isi";
    echo $status . "<br>";
    //variabel $color diisi dengan "red" jika $color tidak ada atau null
    echo $color = $color ?? "red";
    ?>
</body>

</html>