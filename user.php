<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LPKIA</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-success sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-5">
                    <img class src="img/foto.png" width = "50" height="60"></img>
                </div>
                <div class="sidebar-brand-text mx-3">LPKIA <sup></sup></div>
            </a>

             <!-- Heading -->


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                           

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">PUPERSI ADBIS</span>
                                <img class="img-profile rounded-circle"
                                    src="img/fotoadbis.png">
                            </a>
                           

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"></h1>

                     <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">





<?php
$servername = "localhost"; // Ganti sesuai konfigurasi Anda
$username = "root"; // Ganti sesuai konfigurasi Anda
$password = ""; // Ganti sesuai konfigurasi Anda
$dbname = "pupersi_adbis"; // Ganti sesuai nama database Anda

// Buat koneksi
$mysqli = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($mysqli->connect_error) {
    die("Koneksi gagal: " . $mysqli->connect_error);
}

// Proses pengecekan informasi
$notifications = [];
$result = $mysqli->query("SELECT * FROM notifications");

if ($result) {
    while ($row = $result->fetch_assoc()) {
        $notifications[] = $row;
    }
}

$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengguna - Informasi</title>
</head>
<body>
    <h1>Informasi Hasil</h1>
    <form method="POST" action="process_notifications.php">
        <?php if (!empty($notifications)): ?>
            <?php foreach ($notifications as $notification): ?>
                <div>
                    <input type="checkbox" name="notifications[]" value="<?php echo $notification['id']; ?>" <?php echo $notification['is_checked'] ? 'checked' : ''; ?>>
                    <label><?php echo $notification['message']; ?></label>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Tidak ada informasi yang tersedia.</p>
        <?php endif; ?>
        <button type="submit">Tandai Sudah Dibaca</button>
    </form>
</body>
</html>
<?php
$no = 1;
if (isset($_SESSION["create"])) {
?>
<div class="alert alert-success">
<?php 
echo $_SESSION["create"];
?>
</div>
<?php
unset($_SESSION["create"]);
}
?>
<?php
if (isset($_SESSION["update"])) {
?>
<div class="alert alert-success">
<?php 
echo $_SESSION["update"];
?>
</div>
<?php
unset($_SESSION["update"]);
}
?>
<?php
if (isset($_SESSION["delete"])) {
?>
<div class="alert alert-success">
<?php 
echo $_SESSION["delete"];
?>
</div>
<?php
unset($_SESSION["delete"]);
}
?>


<form action="informasiku.php" method="GET">
</form>
</div>
<br>

<table class="table table-bordered">
<thead class="thead-dark">

<tr>
<th>No</th>
<th>Nama</th>
<th>Nim</th>
<th>Prodi</th>
<th>Hasil</th>
<th>Informasi</th>

</tr>


<br>
<div class="search-container">

</thead>
<tbody>
<?php
include ("koneksi.php");

// Proses pencarian
if (isset($_GET['cari'])) {
$cari = $_GET['cari'];
$sqlSelect = "SELECT * FROM mahasiswa WHERE program_studi LIKE '%$cari%'";
} else {
$sqlSelect = "SELECT * FROM mahasiswa";
}


// Lakukan query SQL
$result = mysqli_query($conn,$sqlSelect);

// Periksa apakah ada data yang ditemukan
if (mysqli_num_rows($result) > 0) {
$no = 1;
while ($data = mysqli_fetch_array($result)) {
 ?>
<tr>
<td><?php echo $no++;?></td>
<td><?php echo $data['nama_lengkap']; ?></td>
<td><?php echo $data['nim']; ?></td>
<td><?php echo $data['program_studi']; ?></td>
<td><?php echo $data['layak/tidak']; ?></td>
<td>
<div>
    
    
<a href="https://drive.google.com/file/d/1S9ZGUimH9ghmsS_L-XcPqoGDgQOJN8yW/view?usp=drive_link"><p class="card-text text-black">Lihat Surat <i class="fas fa-angle-double-right ml-2"></i></p></a>


</td>





</tr>

<?php
}
}
?>



</tbody>
</table>

</form>


</div>
