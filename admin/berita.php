<?php
include '../process/read-berita.php';

?>

<div>
    <div class="mb-4">
        <h1 class="h3 mb-0 text-gray-800">Berita</h1>
    </div>

    <div>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Berita diupload</h6>
            </div>
            <div class="d-flex justify-content-between" style="padding: 0 20px;">
                <form method="get" class="d-flex justify-content-between col-4 p-0">
                    <input type="hidden" name="p" value="berita">
                    <input class="form-control" type="text" name="cari" placeholder="Cari Berita">
                    <button type="submit" class="btn btn-primary ml-1">
                        <i class="fas fa-fw fa-search"></i>
                    </button>
                </form>

                <div>
                    <a href="index.php?p=tambah-berita" class="btn btn-primary">
                        <i class="fas fa-fw fa-add"></i> Buat Berita
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr class="text-center">
                                <th>Judul</th>
                                <th>konten</th>
                                <th>Diupload pada</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            <!-- loop -->
                            <?php while ($data = mysqli_fetch_assoc($result)) { ?>
                                <tr>
                                    <td><?php echo $data['judul']; ?></td>
                                    <td><?php echo $data['teks_pembuka']; ?></td>
                                    <td><?php echo $data['created_at']; ?></td>
                                    <td>

                                        <button id="delete-btn" data-toggle="modal" data-target="#exampleModal" class="btn btn-danger" data-id="<?= $data['id']; ?>">
                                            <i class="fas fa-fw fa-trash"></i>
                                        </button>
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

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hapus berita</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Anda yakin ingin menghapus berita ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <form action="../process/delete-berita.php" method="post">
                    <input type="hidden" name="id">
                    <button type="submit" class=" btn btn-danger">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    const deleteBtn = document.querySelectorAll('#delete-btn');
    deleteBtn.forEach(btn => {
        btn.addEventListener('click', function() {
            //store id to input hidden
            const id = this.dataset.id;
            const input = document.querySelector('input[name="id"]');
            input.value = id;
        })
    })
</script>