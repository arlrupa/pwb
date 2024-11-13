<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = ""; // Kosong jika tidak ada kata sandi
$db_name = "db_sekolah";
$db_port = "3307";

// Membuat koneksi
$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name, $db_port);

// Memeriksa koneksi
if ($connection) {
    echo "Koneksi Berhasil!";
} else {
    echo "Koneksi Gagal! : " . mysqli_connect_error();
}

?>
