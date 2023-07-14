<?php

include 'database.php';

$id = $_POST['id_penduduk'];
$nik = $_POST['nik'];

echo $id . '<br>';
echo $nik;

// Check if NIK already exists
$sql = "SELECT * FROM penduduk WHERE nik='$nik' AND id_penduduk != '$id'";
$result = mysqli_query($conn, $sql);

// check if resukt is not empty
if (mysqli_num_rows($result) > 0) {
    $errorMessage = urlencode("NIK sudah terdaftar");
    header("Location: ../admin/index.php?p=edit-data-penduduk&id=$id&error=$errorMessage");

    exit;
}


// Get data from form
$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$agama = $_POST['agama'];
$status_perkawinan = $_POST['status_perkawinan'];
$pekerjaan = $_POST['pekerjaan'];
$kewarganegaraan = $_POST['kewarganegaraan'];

// Update data in the database
$sql = "UPDATE penduduk SET nik='$nik', nama='$nama', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', jenis_kelamin='$jenis_kelamin', alamat='$alamat', agama='$agama', status_perkawinan='$status_perkawinan', pekerjaan='$pekerjaan', kewarganegaraan='$kewarganegaraan' WHERE id_penduduk='$id'";
if (mysqli_query($conn, $sql)) {
    header("Location: ../admin/index.php?p=data-penduduk&sukses=Data berhasil diupdate");
    echo 'sukses';
    exit;
} else {
    // print error
    $error = mysqli_error($conn);
    echo $error;
    header("Location: ../admin/index.php?p=data-penduduk&error=Data gagal diupdate");
    exit;
}
