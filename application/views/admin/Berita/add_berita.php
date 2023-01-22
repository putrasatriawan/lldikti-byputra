<!-- Bootstrap Table with Header - Light -->
<div class="container">
    <br>
    <br>
    <br>
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms /</span> Basic Inputs</h4>
    </div>
    <div class="row">
        <!-- Form controls -->
        <div class="col-md-6">
            <div class="card mb-4">
                <h5 class="card-header">Form Controls</h5>
                <div class="card-body">
                    <?php
                    //notif pesan error gagal form
                    echo validation_errors('<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-info"></i> ', '</h5> </div>');
                    if (isset($error_upload)) {
                        echo '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-info"></i> ' . $error_upload . '</h5> </div>';
                    }
                    echo form_open_multipart('berita_admin/add_berita')  ?>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Judul Berita</label>
                        <input type="text" class="form-control" name="judul_berita"
                            placeholder="Tulis judul berita disini" value="<?= set_value('judul_berita') ?>" />
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Author</label>
                        <input type="text" class="form-control" name="author" placeholder="Tulis Author berita disini"
                            alue="<?= set_value('author') ?>" />
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlSelect1" class="form-label">Kategori</label>
                        <select class="form-control" name="id_kategori" aria-label="Default select example">
                            <option value=" ">--Pilih Kategori--</option>
                            <?php foreach ($kategori_berita as $key => $value) { ?>
                            <option value="<?= $value->id_kategori ?> "><?= $value->nama_kategori ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi berita</label>
                        <textarea class="form-control" name="deskripsi_berita"
                            rows="3"><?= set_value('deskripsi_berita') ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Default file input example</label>
                        <input class="form-control" name="gambar" type="file" id="preview_gambar" />
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                        <a href="<?= base_url('berita_admin/berita') ?>" class="btn btn-danger btn-sm">Kembali</a>
                    </div>
                    <?php echo form_close() ?>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <img src="<?= base_url('assets/img/galerikecil.png') ?>" id="gambar_load" width="400px" alt="">
            </div>
        </div>
    </div>
</div>



<script>
function bacaGambar(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#gambar_load').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

$("#preview_gambar").change(function() {
    bacaGambar(this);
});
</script>