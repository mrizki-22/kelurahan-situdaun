<?php
include 'database.php';

// check NIK is exist
$nik = $_POST['nik'];
$sql = "SELECT * FROM penduduk WHERE nik='$nik'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    header("Location:../admin/index.php?p=tambah-data-penduduk&error=NIK sudah terdaftar");
} else {
    // get data from form
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $agama = $_POST['agama'];
    $status_perkawinan = $_POST['status_perkawinan'];
    $pekerjaan = $_POST['pekerjaan'];
    $kewarganegaraan = $_POST['kewarganegaraan'];

    // insert data to database
    $sql = "INSERT INTO penduduk (nik, nama, tempat_lahir, tanggal_lahir, jenis_kelamin, alamat, agama, status_perkawinan, pekerjaan, kewarganegaraan) VALUES ('$nik', '$nama', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$alamat', '$agama', '$status_perkawinan', '$pekerjaan', '$kewarganegaraan')";
    if (mysqli_query($conn, $sql)) {
        header("Location:../admin/index.php?p=data-penduduk&sukses=Data berhasil ditambahkan");
    } else {
        header("Location:../admin/index.php?p=tambah-data-penduduk&error=Data gagal ditambahkan");
    }
}
