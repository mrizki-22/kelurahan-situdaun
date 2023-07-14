<?php 
include 'database.php';

// get jumlah penduduk
$sql = "SELECT COUNT(*) AS jumlah FROM penduduk";
$result = mysqli_query($conn, $sql);
$jumlah_penduduk = mysqli_fetch_assoc($result)['jumlah'];

// get jumlah pengajuan surat yg diproses
$sql = "SELECT COUNT(*) AS jumlah FROM pengajuan_surat WHERE status = 'diproses'";
$result = mysqli_query($conn, $sql);
$jumlah_pengajuan_diproses = mysqli_fetch_assoc($result)['jumlah'];

// get jumlah berita
$sql = "SELECT COUNT(*) AS jumlah FROM berita";
$result = mysqli_query($conn, $sql);
$jumlah_berita = mysqli_fetch_assoc($result)['jumlah'];

// get jumlah surat
$sql = "SELECT COUNT(*) AS jumlah FROM surat";
$result = mysqli_query($conn, $sql);
$jumlah_surat = mysqli_fetch_assoc($result)['jumlah'];
