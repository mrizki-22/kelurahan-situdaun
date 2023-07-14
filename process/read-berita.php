<?php
include 'database.php';

$sql = "SELECT id, slug, judul, teks_pembuka, created_at, gambar FROM berita ORDER BY created_at DESC";

// jika param cari diset
if (isset($_GET['cari'])) {
    $cari = $_GET['cari'];
    $sql = "SELECT id, slug, judul, teks_pembuka, created_at, gambar FROM berita WHERE judul LIKE '%$cari%' OR konten LIKE '%$cari%' ORDER BY created_at DESC";
}


// get berita terbaru
$result = mysqli_query($conn, $sql);
