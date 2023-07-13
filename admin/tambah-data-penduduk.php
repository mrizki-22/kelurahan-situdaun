<div>
    <div class="mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Data Penduduk</h1>
    </div>


    <form class="input-group row" method="POST" action="../process/create-data-penduduk.php">
        <div class="col-md-6 row ">
            <div class="col-12 mb-2">
                <label for="nik">NIK: </label>
                <input id="nik" type="text" class="form-control" name="nik" placeholder="Nomor Induk Kependudukan" required>
            </div>
            <div class="col-12 mb-2">
                <label for="nama">Nama Lengkap: </label>
                <input id="nama" type="text" class="form-control" name="nama" placeholder="Nama lengkap" required>
            </div>
            <div class="col-12 mb-2">
                <label for="tempat_lahir">Tempat / Kota Lahir: </label>
                <input id="tempat_lahir" type="text" class="form-control" name="tempat_lahir" placeholder="Nama kota lahir" required>
            </div>
            <div class="col-12 mb-2">
                <label for="tanggal_lahir">Tanggal Lahir: </label>
                <input id="tanggal_lahir" type="date" class="form-control" name="tanggal_lahir" required>
            </div>
            <div class="col-12 mb-2">
                <label for="jenis_kelamin">Jenis Kelamin: </label>
                <select class="custom-select" name="jenis_kelamin" id="jenis_kelamin" required>
                    <option value="laki-laki">Laki-laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
            </div>
        </div>

        <div class="col-md-6 row">
            <div class="col-12 mb-2">
                <label for="alamat">Alamat: </label>
                <input id="alamat" type="text" class="form-control" name="alamat" placeholder="Alamat lengkap" required>
            </div>
            <div class="col-12 mb-2">
                <label for="agama">Agama: </label>
                <select class="custom-select" name="agama" id="agama" required>
                    <option value="Islam">Islam</option>
                    <option value="Kristen Protestan">Kristen Protestan</option>
                    <option value="Kristen Katolik">Kristen Katolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Buddha">Buddha</option>
                    <option value="Khonghucu">Konghucu</option>
                </select>
            </div>
            <div class="col-12 mb-2">
                <label for="status_perkawinan">Status Perkawinan: </label>
                <select class="custom-select" name="status_perkawinan" id="status_perkawinan" required>
                    <option value="belum kawin">Belum kawin</option>
                    <option value="kawin">Kawin</option>
                    <option value="cerai hidup">Cerai hidup</option>
                    <option value="cerai mati">Cerai mati</option>
                </select>
            </div>
            <div class="col-12 mb-2">
                <label for="pekerjaan">Pekerjaan: </label>
                <input id="pekerjaan" type="text" class="form-control" name="pekerjaan" placeholder="Jenis pekerjaan" required>
            </div>
            <div class="col-12 mb-2">
                <label for="kewarganegaraan">Kewarganegaraan: </label>
                <select class="custom-select" name="kewarganegaraan" id="kewarganegaraan" required>
                    <option value="WNI">Warga Negara Indonesia</option>
                    <option value="WNA">Warga Negara Asing</option>
                </select>
            </div>
        </div>


        <div class="d-flex ml-auto mt-3 mr-5">
            <button type="submit" class="btn btn-primary btn-block" name="tambah-data-penduduk">Simpan</button>
            <a class="btn btn-outline-danger ml-2" href="index.php?p=data-penduduk">Batal</a>
        </div>


    </form>


</div>