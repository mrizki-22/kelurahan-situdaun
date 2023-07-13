<?php
include 'database.php';

$id = $_POST['id_pengajuan_surat'];

// update status selesai
$sql = "UPDATE pengajuan_surat SET status = 'selesai' WHERE id_pengajuan_surat = '$id'";
$result = mysqli_query($conn, $sql);

if ($result) {
    header('Location: ../admin/index.php?p=pengajuan-surat&sukses=Pengajuan dengan nomor ' . $id . ' telah selesai diproses');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
