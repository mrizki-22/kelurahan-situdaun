<?php
include 'database.php';

$id = $_POST['id'];

// delete berita
$result = mysqli_query($conn, "DELETE FROM berita WHERE id = '$id'");
if (!$result) {
    header("Location: ../admin/index.php?p=berita&error=Gagal menghapus berita");
} else {
    header("Location: ../admin/index.php?p=berita&sukses=Berhasil menghapus berita");
}
