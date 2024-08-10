<?php
include('koneksi.php');

if (isset($_POST["create"])) {
    $NamaL = mysqli_real_escape_string($conn, $_POST["nama_lengkap"]);
    $Nim = mysqli_real_escape_string($conn, $_POST["nim"]);
    $tahun = mysqli_real_escape_string($conn, $_POST["tahun"]);
    $Prodi = mysqli_real_escape_string($conn, $_POST["program_studi"]);
    $Judul = mysqli_real_escape_string($conn, $_POST["judul_penelitian"]);
    $NamaP = mysqli_real_escape_string($conn, $_POST["nama_pembingbing"]);
    $Tanggal = mysqli_real_escape_string($conn, $_POST["tanggal_sempro"]);

    $sqlInsert = "INSERT INTO mahasiswa (nama_lengkap, nim, tahun, program_studi, judul_penelitian, nama_pembingbing, tanggal_sempro) 
                   VALUES ('$NamaL', '$Nim', '$tahun', '$Prodi', '$Judul', '$NamaP', '$Tanggal')";

    if (mysqli_query($conn, $sqlInsert)) {
        session_start();
        $_SESSION["create"] = "Data Added Successfully!";
        header("Location: data_mahasiswa.php");
        exit(); // Ensure no further code runs after header redirection
    } else {
        die("Something went wrong: " . mysqli_error($conn));
    }
}

if (isset($_POST["simpan"])) {
    $NamaL = mysqli_real_escape_string($conn, $_POST["nama_lengkap"]);
    $tahun = mysqli_real_escape_string($conn, $_POST["tahun"]);
    $Prodi = mysqli_real_escape_string($conn, $_POST["program_studi"]);
    $Judul = mysqli_real_escape_string($conn, $_POST["judul_penelitian"]);
    $NamaP = mysqli_real_escape_string($conn, $_POST["nama_pembingbing"]);
    $Tanggal = mysqli_real_escape_string($conn, $_POST["tanggal_sempro"]);
    $Nim = mysqli_real_escape_string($conn, $_POST["nim"]);

    $sqlUpdate = "UPDATE mahasiswa SET 
        nama_lengkap='$NamaL',
        tahun='$tahun',
        program_studi='$Prodi',
        judul_penelitian='$Judul',
        nama_pembingbing='$NamaP',
        tanggal_sempro='$Tanggal'
        WHERE nim='$id'";

    if (mysqli_query($conn, $sqlUpdate)) {
        session_start();
        $_SESSION["update"] = "Data Updated Successfully!";
        header("Location: data_mahasiswa.php");
        exit(); // Ensure no further code runs after header redirection
    } else {
        die("Something went wrong: " . mysqli_error($conn));
    }
}
?>
