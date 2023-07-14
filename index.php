<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- END AOS -->

    <title>Kelurahan Situdaun</title>
    <style>
    .berita {
        text-decoration: none;
        color: #001200;
        transition: 0.2s;
    }

    .berita:hover {
        color: #0099a1;
    }
    </style>
</head>

<body>
    <?php
    include("navbar.php");
    ?>
    <main>
        <section class="container-fluid d-flex justify-content-center align-items-center"
            style="height: 35em;background:linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)), url(img/situdaun1.jpg); background-repeat: no-repeat; background-size: cover;">

            <div>
                <h1 class="display-5 fs-2 fw-semibold text-center text-white">Selamat Datang di Website Kelurahan
                    Situdaun</h1>
            </div>


        </section>

        <section class="mb-5">
            <div class="container-fluid p-5 ">
                <div class="mb-4">
                    <h1 class="fs-3 text-center fw-semibold"><i class="fa-solid fa-book" style="color: #001121;"></i>
                        &nbsp; Layanan</h1>
                </div>
                <div class="row justify-content-center mt-5" data-aos="fade-right" data-aos-duration="700">
                    <div class="col-md-3 d-flex justify-content-center">
                        <img src="img/undraw_add_document_re_mbjx.svg" alt="icon" width="200">
                    </div>
                    <div class="col-md-7">
                        <p class="fw-bold fs-4">Pengajuan Surat Online</p>
                        <p>Anda dapat mengajukan pembuatan surat secara online tanpa harus datang ke kantor kelurahan
                        </p>
                        <a href="layanan.php" class="btn btn-outline-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </section>

        <section style="background-color:#dfe8e4;">
            <div class="container-fluid p-5 ">
                <div class="mb-4">
                    <h1 class="fs-3 text-center fw-semibold"><i class="fa-regular fa-newspaper"
                            style="color: #001121;"></i> &nbsp; Berita Terkini</h1>
                </div>
                <div class="row mt-3 justify-content-center">

                    <?php
                    include 'process/database.php';
                    $query = "SELECT * FROM berita ORDER BY created_at DESC LIMIT 3";
                    $result = mysqli_query($conn, $query);

                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="card shadow col-md-3 p-0 mx-2 mt-3" data-aos="fade-up" data-aos-duration="700">
                        <div style="overflow: hidden; height: 200px;">

                            <img src="img/uploads/<?= $row['gambar']; ?>" class="card-img-top" alt="thumbnail">
                        </div>
                        <div class="card-body">
                            <p class="fs-6">
                                <?php
                                    // tanggal bulan waktu indonesia
                                    setlocale(LC_ALL, 'id-ID', 'id_ID');
                                    echo strftime("%d %B %Y", strtotime($row['created_at']));

                                    ?>
                            </p>
                            <a href="lihat-berita.php?slug=<?= $row['slug']; ?>" class="berita">
                                <p class="fw-bold fs-6"><?= $row['judul']; ?></p>
                                <p class="card-text"><?= $row['teks_pembuka']; ?></p>
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="text-center mt-4">
                    <a href="berita.php" class="btn btn-primary">Lihat Berita Lainnya</a>
                </div>
            </div>
        </section>

        <section class="mb-5">
            <div class="container-fluid p-5 ">
                <div class="mb-4">
                    <h1 class="fs-3 text-center fw-semibold"><i class="fa-solid fa-location-dot"
                            style="color: #001121;"></i> &nbsp; Lokasi</h1>
                </div>
                <div class="d-flex justify-content-center">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13131.57679597979!2d106.70296943959438!3d-6.620713538040215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69dabb95a0136b%3A0x5a07f4ab9ba6ff92!2sSitu%20Daun%2C%20Kec.%20Tenjolaya%2C%20Kabupaten%20Bogor%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1689249602816!5m2!1sid!2sid"
                        width="1200" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

        </section>
    </main>

    <?php
    include("footer.php");
    ?>

    <script>
    AOS.init();
    </script>
</body>

</html>