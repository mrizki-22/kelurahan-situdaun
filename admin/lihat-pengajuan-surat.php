<?php

include '../process/database.php';

if (!isset($_GET['id'])) {
    header('Location: index.php?p=data-penduduk');
} else {
    $id = $_GET['id'];
    $query = "SELECT * FROM pengajuan_surat, penduduk, surat WHERE pengajuan_surat.id_penduduk = penduduk.id_penduduk AND pengajuan_surat.id_surat = surat.id_surat AND id_pengajuan_surat = $id";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) < 1) {
        header('Location: index.php?p=data-penduduk');
    } else {
        $penduduk = mysqli_fetch_assoc($result);
    }
}

?>

<div>
    <div class="mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Pengajuan Surat</h1>
    </div>


    <form class="input-group row" method="POST" action="../process/update-pengajuan-surat.php">
        <div class="col-md-6 row ">
            <div class="col-12 mb-2">
                <label for="ID Pengajuan">ID Pengajuan: </label>
                <input id="ID Pengajuan" type="text" class="form-control" name="id_pengajuan_surat"
                    placeholder="Nomor Induk Kependudukan" value="<?= $penduduk['id_pengajuan_surat']; ?>" readonly>
            </div>
            <div class="col-12 mb-2">
                <label for="Nama Pengaju">Nama Pengaju: </label>
                <input id="Nama Pengaju" type="text" class="form-control" name="Nama Pengaju"
                    placeholder="Nomor Induk Kependudukan" value="<?= $penduduk['nama']; ?>" readonly>
            </div>
            <div class="col-12 mb-2">
                <label for="Jenis Surat">Jenis Surat: </label>
                <input id="Jenis Surat" type="text" class="form-control" name="Jenis Surat"
                    placeholder="Nomor Induk Kependudukan" value="<?= $penduduk['nama_surat']; ?>" readonly>
            </div>
            <div class="col-12 mb-2">
                <label for="Status">Status: </label>
                <input id="Status" type="text" class="form-control" name="Status" placeholder="Nomor Induk Kependudukan"
                    value="<?= $penduduk['status']; ?>" readonly>
            </div>
            <div class="col-12 mb-2">
                <label for="Keterangan">Keterangan: </label>
                <!-- create text area bootstrap -->

                <textarea class="form-control" name="Keterangan" id="Keterangan" rows="3"
                    readonly><?= $penduduk['keterangan']; ?></textarea>

            </div>
            <div class="col-12 mb-2">
                <label for="Nomor Whatsapp">Nomor Whatsapp: </label>
                <div class="input-group">


                    <input id="Nomor Whatsapp" type="text" class="form-control" name="Nomor Whatsapp"
                        placeholder="Nomor Induk Kependudukan" value="<?= $penduduk['no_wa']; ?>" readonly>
                    <div class="input-group-append">
                        <a href="https://wa.me/0812345678" class="input-group-text">
                            <i class="fa-brands fa-whatsapp fa-lg"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-12 mb-2">
                <label for="Waktu Pengajuan">Waktu Pengajuan: </label>
                <input id="Waktu Pengajuan" type="text" class="form-control" name="Status"
                    placeholder="Nomor Induk Kependudukan" value="<?= $penduduk['created_at']; ?>" readonly>
            </div>

            <?php 
            // jika status pengajuan surat adalah diproses
            if ($penduduk['status'] == 'diproses') { ?>
            <div class="d-flex mt-3 ml-3">
                <button type="submit" class="btn btn-primary btn-block" name="tambah-data-penduduk">Proses
                    Selesai</button>
            </div>
            <?php } ?>



        </div>





    </form>


</div>