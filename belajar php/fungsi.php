<?php
function hello($nama)
{

    if ($nama == "Ridho") {
        echo "Selamat Kamu Masuk " . $nama;
    } elseif ($nama == "Rifki") {
        echo "Selamat Datang " . $nama;
    } else {
        echo "$nama? Data Anda Tidak Ditemukan";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Fungsi</title>
</head>

<body>
    <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
        <input type="text" name="nama">
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    if (!empty($_POST["submit"]) && $_POST["submit"] == "Submit") {
        hello($_POST['nama']);
    }
    ?>

</body>

</html>