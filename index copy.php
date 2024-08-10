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
                <div class="sidebar-brand-text mx-3">LPKIA<sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="data_mahasiswa.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Mahasiswa</span></a>
            </li>

             <!-- Divider -->
             <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="data_pasien.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                     <span>Data Mahasiswa</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="persyaratan.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Persyaratan</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->

          

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="informasiku.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Informasi</span></a>
            </li>

              <!-- Heading -->

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="surat.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                     <span>Surat Sidang</span></a>
            </li>

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

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">PUPERSI ADBIS</span>
                                <img class="img-profile rounded-circle"
                                    src="img/fotoadbis.png">
                            </a>
                            

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Mahasiswa</h1>
                    <div class="container my-5">
    <header class="d-flex justify-content-between my-4">
            <h1></h1>
            <div>
            <a href="index.php" class="btn btn-success">Back</a>
            </div>
        </header>
        
        <form action="index1.php" method="post">

        <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap:">
            </div>
           
          
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="nim" placeholder="NIM:">
            </div>

            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="tahun" placeholder="tahun:">
            </div>

           

            <div class="form-group mb-3">
            <label for="program_studi" class="form-label"></label>
						<select type="text" id="program_studi" name="program_studi" class="form-control" required>
              <option>Pilih Prodi</option>
              <option>Modul Digitalisasi Administrasi Perkantoran</option>
              <option>D3 Administrasi Bisnis</option>
              <option>S1 Administrasi Bisnis</option>
              <option>S1 Transfer Administrasi Bisnis</option>
						</select>
            </div>


            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="judul_penelitian" placeholder="Judul Penelitian:">
            </div>

            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="nama_pembingbing" placeholder="Nama Pembingbing:">
            </div>

            <div class="form-elemnt my-4">
            <label for="kelas" class="form-label">Tanggal Sempro</label>
                <input type="date" class="form-control" name="tanggal_sempro" placeholder="Tanggal Seminar Proposal:">
            </div>

            
            <div class="form-element my-4">
                <input type="submit" name="create" value="Submit" class="btn btn-success">
            </div>
            
        </form>

        <br><br>
        

        
        
    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>