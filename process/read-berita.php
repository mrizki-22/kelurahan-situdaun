<?php
include 'database.php';

// get berita terbaru
$result = mysqli_query($conn, "SELECT id, slug, judul, teks_pembuka, created_at, gambar FROM berita ORDER BY created_at DESC");
