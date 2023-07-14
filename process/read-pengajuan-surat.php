<?php
include 'database.php';

// get all data penduduk
$sql = "SELECT * FROM pengajuan_surat, penduduk, surat WHERE pengajuan_surat.id_penduduk = penduduk.id_penduduk AND pengajuan_surat.id_surat = surat.id_surat";

// jika param cari diset
if (isset($_GET['cari'])) {
    $cari = $_GET['cari'];
    $sql = "SELECT * FROM pengajuan_surat, penduduk, surat WHERE pengajuan_surat.id_penduduk = penduduk.id_penduduk AND pengajuan_surat.id_surat = surat.id_surat AND (penduduk.nama LIKE '%$cari%' OR surat.nama_surat LIKE '%$cari%')";
}
$result = mysqli_query($conn, $sql);
