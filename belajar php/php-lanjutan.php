<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Lanjutan</title>
</head>

<body>
    <h1>Hello World</h1>
    <?php
    $tipe_data = "Santai Saja";
    $tipe_data = 5;

    echo $tipe_data
        ?>

    <h2>
        <?= $tipe_data ?>
    </h2>

    <?php
    $pecahan = 5.85; // data float/pecahan
    ?>

    <h2>Saya menampilkan nilai pecaha ini
        <?= $pecahan ?>
    </h2>

    <?php
    $perbandingan = true; //data boolean
    
    echo $perbandingan;
    echo "<br/>"
        ?>

    <?php
    /*
    $provinsi[0] = "Jawa Timur"
    $provinsi[1] = "DKI Jakarta"
    $provinsi[2] = "IKN"
    */

    $provinsi = array(
        "Jawa Timur",
        "DKI Jakarta",
        "IKN"
    )
        ?>


    <?php
    // perhitungan
    $hasil = 10 * 5;

    echo $hasil;



    //percabangan
    
    define("SATU", 1);

    echo SATU;

    echo "<br/>"

        /*
        if ($perbandingan == true) {
        echo "ucapkan selamat ya"
        } else {
        echo "ucapkan selamat pagi"
        }
        
        $perbandingan = 4;
        switch ($perbandingan) {
        case 1:
        $pesan = "soto ayam"
        case 2:
        $pesan = "bubur ayam"
        case 3:
        $pesan = "tahu telor"
        break;
        default:
        $pesan = "tahu telor";
        }
        
        echo $pesan; 
        */
        ?>

    <?php
    $pesan = ($hasil == 2) ? "santai saja" : "salah";

    echo $pesan;
    echo "<br/>";

    $provinsi = array(
        "Jawa Timur",
        "DKI Jakarta",
        "IKN",
        "Jawa Tengah",
        "Jawa Barat"
    );

    foreach ($provinsi as $key) {
        echo $key;
        echo "<br/>";
    }

    $i = 1;

    while ($i < 5) {
        echo "baju panjang <br/>";
        $i++;
    }
    ?>
</body>

</html>