<?php
include 'process/read-berita.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <title>Berita</title>
</head>

<body>
    <?php
    include('navbar.php')
    ?>

    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Berita Kelurahan Situdaun</h2>
            </div>
        </div>

        <div class="row mt-3 justify-content-center">

            <?php
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="card shadow col-sm-3 p-0 mx-2 mt-3">
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
    </div>

    <?php 
    include 'footer.php';
    ?>
</body>

</html>