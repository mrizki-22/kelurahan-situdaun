<?php

include 'process/read-surat.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan | Pengajuan Surat</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.all.min.js"></script>

    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
</head>





<body>
    <?php
    include 'navbar.php';
    ?>
    <div class="d-flex justify-content-center align-items-center" style="height: 20em;background:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(img/situdaun1.jpg); background-repeat: no-repeat; background-size: cover; background-position: center center;">
        <div>
            <h1 class="display-5 fs-2 fw-semibold text-center text-white">Pengajuan Surat Online</h1>
            <p class="text-white text-center m-0">
                Anda dapat mengajukan surat tanpa harus datang ke kantor kelurahan.
            </p>
            <p class="text-white text-center">
                (Pastikan NIK anda telah terdaftar di sistem kami)
            </p>
        </div>
    </div>
    <div class="container-fluid ">
        <!-- jumbotron -->


        <div>
            <form action="process/create-pengajuan-surat.php" class="row justify-content-center mt-5" onsubmit="return validateForm()" method="post">
                <div class="col-md-6">
                    <div class="mt-2">
                        <label for="nik" class="mb-1">NIK:</label>
                        <input type="number" class="form-control" id="nik" name="nik" placeholder="Nomor Induk Kependudukan" required>
                    </div>
                    <div class="mt-2">
                        <label for="no_wa" class="mb-1">Nomor Whatsapp:</label>
                        <input type="number" class="form-control" id="no_wa" name="no_wa" placeholder="Contoh: 08123456789" required>
                    </div>
                    <div class="mt-2">
                        <label for="nama_surat" class="mb-1">Jenis Surat: </label>
                        <select class="form-select" name="id_surat" id="nama_surat" required>
                            <option disabled selected>Pilih jenis surat...</option>
                            <?php
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <option value="<?= $row['id_surat']; ?>"><?= $row['nama_surat']; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="mt-2">
                        <label for="keterangan" class="mb-1">Keterangan:</label>
                        <textarea class="form-control" id="keterangan" name="keterangan" rows="5" placeholder="Tulis keterangan tambahan disini"></textarea>
                    </div>
                    <div class="mt-4 text-center">
                        <button type="submit" name="pengajuan" class="btn btn-primary">Ajukan Surat</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php
    include 'footer.php';
    ?>


    <script>
        function validateForm() {
            var selectedOption = document.getElementById("nama_surat").value;
            if (selectedOption === "Pilih jenis surat...") {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Pilih jenis surat terlebih dahulu!',
                })
                return false;
            }
            return true;
        }
    </script>
    <?php
    if (isset($_GET['success'])) {
        $pesan = $_GET['success'];
        echo "<script>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil',
            text: '$pesan',
        })
        </script>";
    } else if (isset($_GET['error'])) {
        $pesan = $_GET['error'];
        echo "<script>
        Swal.fire({
            icon: 'error',
            title: 'Gagal',
            text: '$pesan',
        })
        </script>";
    }

    ?>
</body>

</html>