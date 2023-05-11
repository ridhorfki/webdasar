<?php

if (isset($_GET['id'])) {
    // ambil id dari url atau method get
    $id = $_GET['id'];

    // Buat koneksi dengan MySQL
    $con = mysqli_connect("localhost", "root", "", "mahasiswaseal");

    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    } else {
        echo '<br>koneksi berhasil';
    }

    $sql = "SELECT * FROM `data_diri` WHERE nim='$id'";

    if ($result = mysqli_query($con, $sql)) {
        echo "<br>data tersedia";
        while ($user_data = mysqli_fetch_assoc($result)) {
            $nim = $user_data['nim'];
            $nama = $user_data['nama'];
            $jenis_kelamin = $user_data['jenis_kelamin'];
            $tpt_lahir = $user_data['tpt_lahir'];
            $tgl_lahir = $user_data['tgl_lahir'];
            $alamat = $user_data['alamat'];
        }
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }

    mysqli_close($con);
}

if (isset($_POST['submit'])) {
    //var_dump($_POST);
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tpt_lahir = $_POST['tpt_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $alamat = $_POST['alamat'];

    // Buat koneksi dengan MySQL
    $con = mysqli_connect("localhost", "root", "", "mahasiswaseal");

    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    } else {
        echo '<br>koneksi berhasil';
    }

    $sql = "UPDATE `data_diri` SET nim='$nim',nama='$nama',jenis_kelamin='$jenis_kelamin',tpt_lahir='$tpt_lahir',
    tgl_lahir='$tgl_lahir',alamat='$alamat' WHERE nim='$id' ";

    if (mysqli_query($con, $sql)) {
        // Jika berhasil, arahkan kembali ke halaman utama dengan pesan sukses
        header("Location: index.php?status=sukses");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }

    mysqli_close($con);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDI DATA DIRI</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="./font/bootstrap-icons.css">
</head>

<body>
    <div class="col-lg-4 col-xxl-4 my-5 mx-auto">
        <h1 class="text-center">EDIT DATA DIRI</h1>
        <?php if (isset($_GET['id'])): ?>
            <form action="" method="post">
                <div class="col-md-12">
                    <label for="validationCustom01" class="form-label">NIM</label>
                    <input type="text" class="form-control" id="validationCustom01" name="nim" readonly
                        value="<?php echo $nim; ?>">
                    <div class="valid-feedback">
                        Berhasil diubah!
                    </div>
                </div>

                <div class="col-md-12">
                    <label for="validationCustom02" class="form-label">NAMA</label>
                    <input type="text" class="form-control" id="validationCustom02" name="nama" required
                        value="<?php echo $nama; ?>">
                    <div class="valid-feedback">
                        Berhasil diubah!
                    </div>
                </div>

                <div class="col-md-12">
                    <label for="validationCustom03" class="form-label">JENIS KELAMIN</label>
                    <input type="text" class="form-control" id="validationCustom03" name="jenis_kelamin" required
                        value="<?php echo $jenis_kelamin; ?>">
                    <div class="valid-feedback">
                        Berhasil diubah!
                    </div>
                </div>

                <div class="col-md-12">
                    <label for="validationCustom04" class="form-label">TEMPAT LAHIR</label>
                    <input type="text" class="form-control" id="validationCustom03" name="tpt_lahir" required
                        value="<?php echo $tpt_lahir; ?>">
                    <div class="valid-feedback">
                        Berhasil diubah!
                    </div>
                </div>

                <div class="col-md-12">
                    <label for="validationCustom05" class="form-label">TANGGAL LAHIR</label>
                    <input type="text" class="form-control" id="validationCustom05" name="tgl_lahir" required
                        value="<?php echo $tgl_lahir; ?>">
                    <div class="valid-feedback">
                        Berhasil diubah!
                    </div>
                </div>

                <div class="col-md-12">
                    <label for="validationCustom05" class="form-label">ALAMAT</label>
                    <input type="text" class="form-control" id="validationCustom05" name="alamat" required
                        value="<?php echo $alamat; ?>">
                    <div class="valid-feedback">
                        Berhasil diubah!
                    </div>

                    <button type="submit" name="submit">Update Data</button>
                </div>


                <!-- NIM: <input type="text" name="nim" value="<?php echo $nim; ?>"><br>
            Nama: <input type="text" name="nama" value="<?php echo $nama; ?>"><br>
            Jenis Kelamin: <input type="text" name="jenis_kelamin" value="<?php echo $jenis_kelamin; ?>"><br>
            Tempat Lahir: <input type="text" name="tpt_lahir" value="<?php echo $tpt_lahir; ?>"><br>
            Tanggal Lahir (yyyy-mm-dd): <input type="date" name="tgl_lahir" value="<?php echo $tgl_lahir; ?>"><br>
            Alamat: <input type="text" name="alamat" value="<?php echo $alamat; ?>"><br>
            <button type="submit" name="submit">Update Data</button> -->
            </form>
        <?php endif; ?>
    </div>
</body>

</html>