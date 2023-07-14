<?php
include '../process/read-pengajuan-surat.php';

?>

<div>
    <div class="mb-4">
        <h1 class="h3 mb-0 text-gray-800">Pengajuan Surat</h1>
    </div>

    <div>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tabel pengajuan surat</h6>
            </div>
            <div class="d-flex justify-content-between" style="padding: 0 20px;">
                <form method="get" class="d-flex justify-content-between col-4 p-0">
                    <input type="hidden" name="p" value="pengajuan-surat">
                    <input class="form-control" type="text" name="cari" placeholder="Cari Data Pengajuan">
                    <button type="submit" class="btn btn-primary ml-1">
                        <i class="fas fa-fw fa-search"></i>
                    </button>
                </form>

                <div>
                    <a href="index.php?p=tambah-surat" class="btn btn-primary">
                        <i class="fas fa-fw fa-add"></i> Tambah Jenis Surat
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr class="">
                                <th>Id Pengajuan</th>
                                <th>Nama Pengaju</th>
                                <th>Jenis Surat</th>
                                <th>Status</th>
                                <th>Waktu Pengajuan</th>

                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            <!-- loop -->
                            <?php while ($data = mysqli_fetch_assoc($result)) { ?>
                                <tr>
                                    <td><?php echo $data['id_pengajuan_surat']; ?></td>
                                    <td><?php echo $data['nama']; ?></td>
                                    <td><?php echo $data['nama_surat']; ?></td>
                                    <td><?php echo $data['status']; ?></td>
                                    <td><?php echo $data['created_at']; ?></td>

                                    <td>
                                        <a href="index.php?p=lihat-pengajuan-surat&id=<?= $data['id_pengajuan_surat']; ?>" class="btn btn-primary">
                                            <i class="fas fa-fw fa-eye"></i>
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