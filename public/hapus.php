<?php
include("conn.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query untuk menghapus data dari tabel mahasiswa dengan id = $id
    $query = "DELETE FROM `data_diri` WHERE nim = '$id'";


    // Jalankan query untuk menghapus data
    $result = mysqli_query($conn, $query);

    //konfirmasi dulu


    // Cek apakah proses delete berhasil atau tidak
    if ($result) {
        // Jika berhasil, arahkan kembali ke halaman utama dengan pesan sukses
        header("Location: index.php?status=sukses");
        exit();
    } else {
        // Jika gagal, arahkan kembali ke halaman utama dengan pesan error
        die("Query gagal dijalankan: " . mysqli_error($conn));
    }
} else {
    // Jika tidak ada parameter id pada URL, arahkan kembali ke halaman utama
    header("Location: index.php");
    exit();
}
?>