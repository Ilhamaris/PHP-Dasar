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

    // data kelas dengan array 2 dimensi
    $array = array(
        "1B" => array("Ringga", "Wishnu", "Ilham"),
        "2B" => array("Fandhi", "Fadhil", "Cipta")
    );

    // menampilkan data array
    print_r($array);

    echo "<br>";
    
    // menampilkan kelas 1B
    print_r($array['1B']);

    echo "<br>";
    
    // menampilkan kelas 2B dengan index 0
    echo $array['2B'][0] . "<br>";
    //tampilkan wishnu
    echo $array['1B'][1] . "<br>";
    //tampilkan Fandhi
    echo $array['2B'][0] . "<br>";

    // data kelas bisa ditulis juga dengan
    $array_simple = [
        "1B" => ["Ringga", "Wishnu", "Ilham"],
        "2B" => ["Fandhi", "Fadhil", "Cipta"]
    ];

    ?>
</body>

</html>