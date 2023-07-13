<?php
include 'database.php';

// create error array assosiative
$errors = array();


if (isset($_POST['upload'])) {

    $slug = $_POST['slug'];
    $judul = $_POST['judul'];
    $teks_pembuka = $_POST['teks_pembuka'];
    $konten = $_POST['konten'];

    // check if slug exist
    $cek = mysqli_query($conn, "SELECT * FROM berita WHERE slug='$slug'");
    if (mysqli_num_rows($cek) > 0) {
        $errors['slug'] = "Judul sudah ada, silahkan gunakan judul lain";
    }


    // get image name
    $gambar = $_FILES['gambar']['name'];

    //generate name for image
    $gambar = date('dmYHis') . str_replace(" ", "", basename($gambar));

    // image file directory
    $target = "../img/uploads/" . basename($gambar);

    // move image to folder
    move_uploaded_file($_FILES['gambar']['tmp_name'], $target);

    // insert data to database
    $result =  mysqli_query($conn, "INSERT INTO berita (judul, slug, teks_pembuka, konten, gambar) VALUES ('$judul', '$slug', '$teks_pembuka', '$konten', '$gambar')");

    // check if result success
    if (!$result) {
        // new error
        $errors['result'] = "Gagal menambahkan data";
    } else {
        // redirect to index.php
        header("Location: index.php?p=berita&sukses=Berhasil mengupload berita");
    }
}
