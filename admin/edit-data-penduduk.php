<?php

include '../process/database.php';

if (!isset($_GET['id'])) {
    header('Location: index.php?p=data-penduduk');
} else {
    $id = $_GET['id'];
    $query = "SELECT * FROM penduduk WHERE id_penduduk = $id";
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
        <h1 class="h3 mb-0 text-gray-800">Edit Data Penduduk</h1>
    </div>


    <form class="input-group row" method="POST" action="../process/update-data-penduduk.php">
        <div class="col-md-6 row ">
            <div class="col-12 mb-2">
                <label for="nik">NIK: </label>
                <input id="nik" type="text" class="form-control" name="nik" placeholder="Nomor Induk Kependudukan"
                    value="<?= $penduduk['nik']; ?>" required>
            </div>
            <div class="col-12 mb-2">
                <label for="nama">Nama Lengkap: </label>
                <input id="nama" type="text" class="form-control" name="nama" placeholder="Nama lengkap"
                    value="<?= $penduduk['nama']; ?>" required>
            </div>
            <div class="col-12 mb-2">
                <label for="tempat_lahir">Tempat / Kota Lahir: </label>
                <input id="tempat_lahir" type="text" class="form-control" name="tempat_lahir"
                    placeholder="Nama kota lahir" value="<?= $penduduk['tempat_lahir']; ?>" required>
            </div>
            <div class="col-12 mb-2">
                <label for="tanggal_lahir">Tanggal Lahir: </label>
                <input id="tanggal_lahir" type="date" class="form-control" name="tanggal_lahir"
                    value="<?= $penduduk['tanggal_lahir']; ?>" required>
            </div>
            <div class="col-12 mb-2">
                <label for="jenis_kelamin">Jenis Kelamin: </label>
                <select class="custom-select" name="jenis_kelamin" id="jenis_kelamin" required>
                    <option value="laki-laki" <?php if ($penduduk['jenis_kelamin'] == 'laki-laki') echo 'selected'; ?>>
                        Laki-laki</option>
                    <option value="perempuan" <?php if ($penduduk['jenis_kelamin'] == 'perempuan') echo 'selected'; ?>>
                        Perempuan</option>
                </select>
            </div>
        </div>

        <div class="col-md-6 row">
            <div class="col-12 mb-2">
                <label for="alamat">Alamat: </label>
                <input id="alamat" type="text" class="form-control" name="alamat" placeholder="Alamat lengkap"
                    value="<?= $penduduk['alamat']; ?>" required>
            </div>
            <div class="col-12 mb-2">
                <label for="agama">Agama: </label>
                <select class="custom-select" name="agama" id="agama" required>
                    <option value="Islam" <?php if ($penduduk['agama'] == 'Islam') echo 'selected'; ?>>Islam</option>
                    <option value="Kristen Protestan"
                        <?php if ($penduduk['agama'] == 'Kristen Protestan') echo 'selected'; ?>>Kristen Protestan
                    </option>
                    <option value="Kristen Katolik"
                        <?php if ($penduduk['agama'] == 'Kristen Katolik') echo 'selected'; ?>>Kristen Katolik</option>
                    <option value="Hindu" <?php if ($penduduk['agama'] == 'Hindu') echo 'selected'; ?>>Hindu</option>
                    <option value="Buddha" <?php if ($penduduk['agama'] == 'Buddha') echo 'selected'; ?>>Buddha</option>
                    <option value="Khonghucu" <?php if ($penduduk['agama'] == 'Khonghucu') echo 'selected'; ?>>Konghucu
                    </option>
                </select>

            </div>
            <div class="col-12 mb-2">
                <label for="status_perkawinan">Status Perkawinan: </label>
                <select class="custom-select" name="status_perkawinan" id="status_perkawinan" required>
                    <option value="belum kawin"
                        <?php if ($penduduk['status_perkawinan'] == 'belum kawin') echo 'selected'; ?>>Belum kawin
                    </option>
                    <option value="kawin" <?php if ($penduduk['status_perkawinan'] == 'kawin') echo 'selected'; ?>>
                        Kawin</option>
                    <option value="cerai hidup"
                        <?php if ($penduduk['status_perkawinan'] == 'cerai hidup') echo 'selected'; ?>>Cerai hidup
                    </option>
                    <option value="cerai mati"
                        <?php if ($penduduk['status_perkawinan'] == 'cerai mati') echo 'selected'; ?>>Cerai mati
                    </option>
                </select>

            </div>
            <div class="col-12 mb-2">
                <label for="pekerjaan">Pekerjaan: </label>
                <input id="pekerjaan" type="text" class="form-control" name="pekerjaan" placeholder="Jenis pekerjaan"
                    value="<?= $penduduk['pekerjaan']; ?>" required>
            </div>
            <div class="col-12 mb-2">
                <label for="kewarganegaraan">Kewarganegaraan: </label>
                <select class="custom-select" name="kewarganegaraan" id="kewarganegaraan" required>
                    <option value="WNI" <?php if ($penduduk['kewarganegaraan'] == 'WNI') echo 'selected'; ?>>Warga
                        Negara Indonesia</option>
                    <option value="WNA" <?php if ($penduduk['kewarganegaraan'] == 'WNA') echo 'selected'; ?>>Warga
                        Negara Asing</option>
                </select>

            </div>
        </div>


        <input type="hidden" name="id_penduduk" value="<?= $penduduk['id_penduduk']; ?>">
        <div class="d-flex ml-auto mt-3 mr-5">
            <button type="submit" class="btn btn-primary btn-block" name="tambah-data-penduduk">Simpan</button>
            <a class="btn btn-outline-danger ml-2" href="index.php?p=data-penduduk">Batal</a>
        </div>


    </form>


</div>