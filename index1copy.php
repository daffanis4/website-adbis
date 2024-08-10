<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "pupersi_adbis"; 

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query SQL untuk memperbarui data
$sql = "UPDATE mahasiswa SET layak='Sudah Layak Sidang' WHERE layak='Belum Layak Sidang'";

// Menjalankan query dan memeriksa apakah berhasil
if ($conn->query($sql) === TRUE) {
    if ($conn->affected_rows > 0) {
        echo "Record updated successfully. Number of rows affected: " . $conn->affected_rows;
    } else {
        echo "No records were updated.";
    }
} else {
    echo "Error updating record: " . $conn->error;
}

// Menutup koneksi
$conn->close();
?>

<?php
// Koneksi ke database
include("koneksi.php");

// Memproses permintaan POST untuk memperbarui kolom 'layak'
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["simpan"])) {
    $nim = $_POST["nim"];
    $layak = $_POST["layak"];
    
    $sql = "UPDATE mahasiswa SET layak=? WHERE nim=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $layak, $nim);
    
    if ($stmt->execute()) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
    exit();
}
?>
