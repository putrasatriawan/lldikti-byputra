<section class="clean-block clean-hero" style="background-image:url(&quot;../assets/img/dash1.jpg&quot;);color:rgba(9, 162, 255, 0.85);">
    <div class="text">
        <p style="font-family:poppins; font-size:30px;">LEMBAGA LAYANAN PENDIDIKAN TINGGI WILAYAH 4</p>
        <h1 style="color: black;">Peraturan Risdekti</h1>
    </div>
</section>
<section>
    <div class="container">
        <table class="table ">
            <thead>
                <tr class="">
                    <th class="col-5">Title</th>
                    <th class="col-2">Categories</th>
                    <th class="col-2">Update date</th>
                    <th class="col-3">Download</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 1; $i <= 9; $i++) { ?>
                    <tr>
                        <td>
                            <div class="card border-0 pt-0 mt-0 rounded-0 justify-content-center" style="max-width: 450px;height: 80px;">
                                <div class="row g-0 w-100" style="height: 100%;">
                                    <div class="col-2 pr-0">
                                        <img src="<?= base_url('assets/img/undang-undang/pdf1.svg'); ?>" class="img-fluid w-100 mx-auto" alt="..." style="height: 100%;">
                                    </div>
                                    <div class="col-10 flex">
                                        <div class="card-body py-1 ps-1 text-start" style="vertical-align: middle;">
                                            <a href="" class="text-decoration-none" style="height: 70%;">
                                                <p style="line-height: 0.9;" class="card-title">Penjelasan UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 16 TAHUN 2001 TENTANG Y A Y A S A N</p>
                                            </a>
                                            <span><i class="far fa-arrow-alt-circle-down"> 2090 Download</i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td><span class="text-wrap"><a href="">produk hukum</a>,<a href="">undang-undang</a></span></td>
                        <td><span>6 june 2017</span></td>
                        <td><a href="">
                                <div class="text-wrap bg-primary text-white text-center rounded" style="width: 10rem;height: 70%;">
                                    <p>Download</p>
                                </div>
                            </a></td>
                    </tr>
                <?php }; ?>
            </tbody>
        </table>
    </div>
</section>