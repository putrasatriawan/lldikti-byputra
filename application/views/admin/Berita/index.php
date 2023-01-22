<!-- Bootstrap Table with Header - Light -->
<div class="container">
    <br>
    <br>
    <br>
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Data Berita</h3>

                <div class="card-tools">
                    <a href="<?= base_url('berita_Admin/add_berita') ?>" type="button" class="btn btn-sm btn-success"><i
                            class="fas fa-user-plus fa-sm"></i> Tambah Berita</a>
                </div>
                <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <?php
                if ($this->session->flashdata('pesan')) {
                    echo '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i>';
                    echo $this->session->flashdata('pesan');
                    echo '</h5></div>';
                }
                ?>
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead class="text-center">
                            <tr>
                                <th>No</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Thumnbnail</th>
                                <th>Category</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <?php $no = 1;
                            foreach ($berita as $key => $value) { ?>
                            <tr>
                                <th scope="row"><?= $no++ ?></th>
                                <th scope="row"><?= $value->judul_berita ?></th>
                                <th scope="row"><?= $value->author ?></th>
                                <th scope="row"> <img src="<?= base_url('assets/gambar/' . $value->gambar) ?>"
                                        width="150px">
                                </th>
                                <th scope=" row"><?= $value->nama_kategori ?></th>
                                <td>
                                    <a href="<?= base_url('berita_admin/edit_berita/' . $value->id_berita) ?>">
                                        <i class="bx bx-edit-alt me-1"></i>
                                        Edit</a>
                                    <a href="#delete<?= $value->id_berita ?>" data-toggle="modal">
                                        <i class=" bx bx-trash me-1"></i>
                                        Delete</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <!-- modal delete -->
    <?php foreach ($berita as $key => $value) { ?>
    <div class="modal fade" id="delete<?= $value->id_berita ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Hapus <?= $value->judul_berita ?> ?</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <h5>Apakah anda ingin menghapus berita ini?</h5>

                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                        <a href="<?= base_url('berita_admin/delete_berita/' . $value->id_berita) ?>"
                            class="btn btn-primary">Hapus</a>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    </div>
    <?php } ?>
</div>