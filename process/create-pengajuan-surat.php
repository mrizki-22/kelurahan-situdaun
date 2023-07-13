<?php
include 'database.php';


$nik = $_POST['nik'];
$no_wa = $_POST['no_wa'];
$id_surat = $_POST['id_surat'];
$keterangan = $_POST['keterangan'];

// cek apakah nik sudah terdaftar
$cek = mysqli_query($conn, "SELECT * FROM penduduk WHERE nik = '$nik'");
if (mysqli_num_rows($cek) === 0) {
    header("Location: ../layanan.php?error=NIK tidak terdaftar, Silahkan hubungi admin atau datang ke kantor kelurahan");
} else {
    $cek = mysqli_fetch_assoc($cek);
    $id = $cek['id_penduduk'];

    // simpan data ke database
    $query = "INSERT INTO pengajuan_surat (id_penduduk, no_wa, id_surat, keterangan) VALUES ('$id', '$no_wa', '$id_surat', '$keterangan')";
    $result = mysqli_query($conn, $query);

    // cek apakah data berhasil disimpan
    if ($result) {
        header("Location: ../layanan.php?success=Pengajuan surat berhasil");
    } else {
        header("Location: ../layanan.php?error=Pengajuan surat gagal");
    }
}
