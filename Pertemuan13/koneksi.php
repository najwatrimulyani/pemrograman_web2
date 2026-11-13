<?php

$host     = "localhost";
$user     = "root";
$password = "";
$database = "db_mahasiswa";

// Membuat koneksi ke database (tanpa port hardcode)
$Open = mysqli_connect($host, $user, $password, $database);

// Memeriksa koneksi
if (!$Open) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Set charset agar aman dari masalah encoding
mysqli_set_charset($Open, "utf8mb4");


?>
