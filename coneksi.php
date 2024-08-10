<?php
// coneksi.php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pupersi_adbis";

// Buat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Periksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
