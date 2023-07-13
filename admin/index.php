<?php
ob_start();

//check if login
session_start();
if (!isset($_SESSION['status']) && $_SESSION['status'] != "login") {
    header("Location:../login.php");
}

if (isset($_GET['p'])) {
    $p = $_GET['p'];
} else {
    $p = "";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Situdaun - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.all.min.js"></script>


    <!-- Quill js -->
    <script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>

    <!-- Theme included stylesheets -->
    <link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">



</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav fixed-top  sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #198754;">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">

                <img src="../img/logo-tenjolaya.png" alt="logo" height="40">
                <div class="d-none d-md-block ms-2 text-white">
                    <p class="m-0">Kelurahan Situdaun</p>
                </div>

            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item <?= $p == '' ? 'active' : ''; ?>">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Menu
            </div>




            <li class="nav-item <?= $p == 'pengajuan-surat' ? 'active' : ''; ?>">
                <a class="nav-link" href="index.php?p=pengajuan-surat">
                    <i class="fas fa-fw fa-file"></i>
                    <span>Pengajuan Surat</span></a>
            </li>

            <li class="nav-item <?= $p == 'berita' ? 'active' : ''; ?>">
                <a class="nav-link" href="index.php?p=berita">
                    <i class="fas fa-fw fa-newspaper"></i>
                    <span>Berita</span></a>
            </li>


            <li class="nav-item <?= $p == 'data-penduduk' ? 'active' : ''; ?>">
                <a class="nav-link" href="index.php?p=data-penduduk">
                    <i class="fas fa-fw fa-person"></i>
                    <span>Data Penduduk</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">





        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow ">

                    <div class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <!-- tampilkan waktu dengan format hari, tanggal bulan tahun menggunakan bahasa indonesia -->
                        <div class="text-gray-600 fs-3">
                            <?php
                            setlocale(LC_ALL, 'id-ID', 'id_ID');
                            echo strftime("%A, %d %B %Y");
                            ?>
                        </div>

                    </div>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->

                        <div class="d-flex align-items-center ">
                            <div>
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    <?php echo strtoupper($_SESSION['username']); ?>
                                </span>
                                <i class="fas fa-user fa-fw"></i>
                            </div>
                        </div>


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <form class="d-flex align-items-center" action="../process/logout.php">
                            <button type="submit" class="btn btn-link">
                                <i class="fa-solid fa-right-from-bracket"></i>
                            </button>
                        </form>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <?php
                    if ($p == "") {
                        include 'dashboard.php';
                    } else {
                        include $p . ".php";
                    }
                    ?>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->


    <script>
        // get sidebar width
        var sidebarWidth = document.getElementById("accordionSidebar").offsetWidth;
        document.getElementById("content-wrapper").style.marginLeft = sidebarWidth + "px";
    </script>
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <?php

    if (isset($_GET['error'])) {
        $pesan = $_GET['error'];
        echo "<script>Swal.fire('Gagal', '$pesan', 'error');</script>";
    }

    if (isset($_GET['sukses'])) {
        $pesan = $_GET['sukses'];
        echo "<script>Swal.fire('Berhasil', '$pesan', 'success');</script>";
    }

    ?>

</body>

</html>