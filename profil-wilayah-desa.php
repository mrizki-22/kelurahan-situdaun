<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Wilayah Desa</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- END AOS -->
</head>

<body>
    <?php
    include 'navbar.php'
    ?>
    <div class="container-fluid d-flex justify-content-center align-items-center"
        style="height: 20em;background:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(img/situdaun2.jpg); background-repeat: no-repeat; background-size: cover; background-position: center center;">
        <div>
            <h1 class="display-5 fs-2 fw-semibold text-center text-white">Profil Wilayah Desa Situdaun</h1>
        </div>
    </div>

    <div class="row container-fluid justify-content-center mt-4">
        <div class=" col-md-8">
            <div>
                <p class="fs-5" style="text-align: justify;">
                    <span class="fw-semibold font-monospace">Kelurahan Situdaun</span> adalah salah satu wilayah yang
                    terletak di
                    Kecamatan Tenjolaya, Kabupaten Bogor.
                    Desa
                    ini
                    memiliki karakteristik yang unik dengan keindahan alamnya yang menawan dan keragaman budayanya yang
                    kaya.
                </p>
            </div>
            <div class="mt-5">
                <div class="row mt-5" data-aos="fade-up" data-aos-duration="700">
                    <div class="col-md-8">
                        <p class="fw-bold fs-4">Letak Geografis</p>
                        <p class="fs-6" style="text-align: justify;">Kelurahan Situdaun terletak di sebelah barat
                            Kecamatan Tenjolaya. Secara
                            geografis, desa ini berada di ketinggian sekitar 300 meter di atas permukaan laut dengan
                            koordinat geografis sekitar 6°32'58" LS dan 106°45'12" BT.</p>
                    </div>
                    <div class="col-md-4 d-flex justify-content-center align-items-center">
                        <!-- import svg from img -->
                        <img src="img/undraw_connected_world_wuay.svg" alt="letak-geografis" class="img-fluid"
                            width="300">
                    </div>
                </div>

                <div class="row mt-5" data-aos="fade-up" data-aos-duration="700">
                    <div class="col-md-4 d-flex justify-content-center align-items-center">
                        <!-- import svg from img -->
                        <img src="img/undraw_nature_m5ll.svg" alt="alam" class="img-fluid" width="200">
                    </div>
                    <div class="col-md-8">
                        <p class="fw-bold fs-4">Potensi Alam</p>
                        <p class="fs-6" style="text-align: justify;">Desa Situdaun dikelilingi oleh keindahan alam yang
                            memukau. Wilayah ini memiliki
                            perbukitan yang hijau, hamparan sawah yang subur, dan sungai-sungai yang mengalir dengan
                            jernih. Keindahan alam ini memberikan potensi untuk pengembangan sektor pariwisata dan
                            agrowisata di desa ini.</p>
                    </div>

                </div>

                <div class="row mt-5" data-aos="fade-up" data-aos-duration="700">
                    <div class="col-md-8">
                        <p class="fw-bold fs-4">Potensi Ekonomi</p>
                        <p class="fs-6" style="text-align: justify;">Desa Situdaun memiliki potensi ekonomi yang cukup
                            besar. Pertanian menjadi sektor utama dengan penghasilan dari usaha pertanian seperti
                            tanaman padi, sayuran, dan buah-buahan. Selain itu, sektor usaha mikro dan kecil juga
                            berkembang pesat di desa ini, termasuk kerajinan tangan dan industri rumah tangga.</p>
                    </div>
                    <div class="col-md-4 d-flex justify-content-center align-items-center">
                        <!-- import svg from img -->
                        <img src="img/undraw_factory_dy-0-a.svg " alt="letak-geografis" class="img-fluid" width="300">
                    </div>
                </div>

                <div class="row mt-5" data-aos="fade-up" data-aos-duration="700">
                    <div class="col-md-4 d-flex justify-content-center align-items-center">
                        <!-- import svg from img -->
                        <img src="img/undraw_package_arrived_63rf.svg" alt="alam" class="img-fluid" width="200">
                    </div>
                    <div class="col-md-8">
                        <p class="fw-bold fs-4">Infrastruktur dan Aksesibilitas</p>
                        <p class="fs-6" style="text-align: justify;">
                            Desa Situdaun telah mengalami perkembangan infrastruktur yang signifikan. Terdapat jaringan
                            jalan yang memadai untuk aksesibilitas warga dan transportasi umum. Selain itu, tersedia
                            juga fasilitas umum seperti pasar, pusat kegiatan masyarakat, dan sarana ibadah.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <?php
    include 'footer.php'
    ?>

    <script>
    AOS.init();
    </script>
</body>

</html>