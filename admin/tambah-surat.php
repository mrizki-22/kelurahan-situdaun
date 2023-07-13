<?php
include '../process/read-surat.php';
?>

<div style="height: 100vh;">
    <div class="mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Jenis Surat</h1>
    </div>

    <div class="mb-5">
        <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                Daftar Surat Tersedia
            </button>
            <div class="dropdown-menu">
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <p class="dropdown-item p-0 m-0 px-2 py-2"><?= $row['nama_surat']; ?></p>
                <?php
                }
                ?>

            </div>
        </div>
    </div>

    <form class="input-group row flex-column" method="POST" action="../process/create-surat.php">
        <div class="col-md-6 row ">
            <div class="col-12 mb-2">
                <label for="surat">Nama Surat: </label>
                <input id="surat" type="text" class="form-control" name="nama_surat"
                    placeholder="Contoh: Surat Keterangan Kelahiran" required>
            </div>

        </div>


        <div class="col-3 mt-3">

            <button type="submit" class="btn btn-primary" name="tambah-surat">Simpan</button>
        </div>



    </form>


</div>