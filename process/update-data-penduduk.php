<?php
include 'database.php';

$id = $_POST['id'];
// check NIK is exist
$nik = $_POST['nik'];
$sql = "SELECT * FROM penduduk WHERE nik='$nik' AND id!='$id'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    header("Location:../admin/index.php?p=edit-data-penduduk&id=$id&error=NIK sudah terdaftar");
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

    // update data to database
    $sql = "UPDATE penduduk SET nik='$nik', nama='$nama', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', jenis_kelamin='$jenis_kelamin', alamat='$alamat', agama='$agama', status_perkawinan='$status_perkawinan', pekerjaan='$pekerjaan', kewarganegaraan='$kewarganegaraan' WHERE id='$id'";
    if (mysqli_query($conn, $sql)) {
        header("Location:../admin/index.php?p=data-penduduk&sukses=Data berhasil diupdate");
    } else {
        header("Location:../admin/index.php?p=edit-data-penduduk&id=$id&error=Data gagal diupdate");
    }
}
