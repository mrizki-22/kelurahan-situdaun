<?php
include '../process/read-data-penduduk.php';

?>

<div>
    <div class="mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Penduduk</h1>
    </div>

    <div>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Database Penduduk Situdaun</h6>
            </div>
            <div class="d-flex justify-content-between" style="padding: 0 20px;">
                <form action="" class="d-flex justify-content-between col-4 p-0">
                    <input class="form-control" type="text" name="cari" placeholder="Cari Data Penduduk">
                    <button type="submit" class="btn btn-primary ml-1">
                        <i class="fas fa-fw fa-search"></i>
                    </button>
                </form>

                <div>
                    <a href="index.php?p=tambah-data-penduduk" class="btn btn-primary">
                        <i class="fas fa-fw fa-add"></i> Tambah Data
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr class="text-center">
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Tempat Lahir</th>
                                <th class="col-10">Tanggal lahir</th>
                                <th>Jenis kelamin</th>
                                <th class="col-10">Alamat</th>
                                <th>Agama</th>
                                <th>Status Perkawinan</th>
                                <th>Pekerjaan</th>
                                <th>Kewarganegaraan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            <!-- loop -->
                            <?php while ($penduduk = mysqli_fetch_assoc($result)) { ?>
                            <tr>
                                <td><?php echo $penduduk['nik']; ?></td>
                                <td><?php echo $penduduk['nama']; ?></td>
                                <td><?php echo $penduduk['tempat_lahir']; ?></td>
                                <td>
                                    <?php
                                        // print date dd/mm/YYYY
                                        $tanggal_lahir = $penduduk['tanggal_lahir'];
                                        $tanggal_lahir = date('d-m-Y', strtotime($tanggal_lahir));
                                        echo $tanggal_lahir;

                                        ?>
                                </td>
                                <td><?php echo $penduduk['jenis_kelamin']; ?></td>
                                <td><?php echo $penduduk['alamat']; ?></td>
                                <td><?php echo $penduduk['agama']; ?></td>
                                <td><?php echo $penduduk['status_perkawinan']; ?></td>
                                <td><?php echo $penduduk['pekerjaan']; ?></td>
                                <td><?php echo $penduduk['kewarganegaraan']; ?></td>
                                <td>
                                    <a href="index.php?p=edit-data-penduduk&id=<?= $penduduk['id_penduduk']; ?>"
                                        class="btn btn-primary">
                                        <i class="fas fa-fw fa-edit"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php }; ?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>