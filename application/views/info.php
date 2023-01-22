<section class="clean-block clean-hero" style="background-image:url(&quot;assets/img/dash1.jpg&quot;);color:rgba(9, 162, 255, 0.85);">
    <div class="text">
        <p style="font-family:poppins;  font-size:30px; ">LEMBAGA LAYANAN PENDIDIKAN TINGGI WILAYAH 4</p>
        <h1 style="color: black;">Info</h1>
    </div>
</section>

<section class="pt-4">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3">
            <?php for ($x = 1; $x <= 6; $x++) { ?>
                <div class="col-lg-4 mb-4">
                    <div class="card info-card position-relative" style="border-radius: 20px 20px 0px 0px;z-index:-1;"><img class="card-img-top w-100 d-block fit-cover" src="<?= base_url('assets/img/info/info1.webp'); ?>" style="border-radius: 20px 20px 0 0;" />
                        <div class="card-body p-4">
                            <p class="text-primary mb-0">Pendampingan JAD Untuk Penilai JAD Internal dan Operator JAD Perguruan Tinggi</p>
                            <p class="card-text">Baca Selengkapnya</p>
                        </div>
                    </div>
                    <div class="list-group-item border-top-0" style="border-radius: 0 0 20px 20px;">
                        <p>30 June 2022 21:36</p>
                    </div>
                </div>
            <?php }; ?>
        </div>
        <div class="row justify-content-center">
            <div class="col-6 d-flex justify-content-center">
                <div aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>