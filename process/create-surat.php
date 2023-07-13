<?php
include 'database.php';

$nama_surat = $_POST['nama_surat'];

// simpan data ke database
$query = "INSERT INTO surat (nama_surat) VALUES ('$nama_surat')";
$result = mysqli_query($conn, $query);

// cek apakah data berhasil disimpan
if ($result) {
    header("Location: ../admin/index.php?p=pengajuan-surat&sukses=Surat berhasil ditambahkan");
} else {
    header("Location: ../admin/index.php?p=pengajuan-surat&error=Gagal ditambahkan");
}
