<?php
// Set informasi koneksi database
$hostname = "localhost";
$username = "root";
$password = "";
$database = "kuliah";

// Buat koneksi ke database
$con = mysqli_connect($hostname, $username, $password, $database);

// Periksa apakah koneksi berhasil dibuat
if (mysqli_connect_errno()) {
    // Tampilkan pesan error jika koneksi gagal
    die("Koneksi database gagal: " . mysqli_connect_error());
}
