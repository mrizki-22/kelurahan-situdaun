<?php 
include 'database.php';



// get all data penduduk
$sql = "SELECT * FROM penduduk";

// jika param cari diset
if (isset($_GET['cari'])) {
    $cari = $_GET['cari'];
    $sql = "SELECT * FROM penduduk WHERE nama LIKE '%$cari%' OR nik LIKE '%$cari%'";
}

$result = mysqli_query($conn, $sql);
