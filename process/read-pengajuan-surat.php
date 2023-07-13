<?php
include 'database.php';

// get all data penduduk
$sql = "SELECT * FROM pengajuan_surat, penduduk, surat WHERE pengajuan_surat.id_penduduk = penduduk.id_penduduk AND pengajuan_surat.id_surat = surat.id_surat";
$result = mysqli_query($conn, $sql);
