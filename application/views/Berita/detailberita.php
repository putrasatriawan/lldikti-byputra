<section class="clean-block clean-hero"
    style="background-image:url(&quot;assets/img/dash1.jpg&quot;);color:rgba(9, 162, 255, 0.85);">
    <div class="text">
        <p style="font-family:poppins;  font-size:30px; ">LEMBAGA LAYANAN PENDIDIKAN TINGGI WILAYAH 4</p>
        <h1 style="color: black;"></h1>
    </div>
</section>
<br>

<section class="clean-block testimonials">
    <br>

    <br>

    <br>
    <!-- About US Start -->
    <div class="about-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Trending Tittle -->
                    <div class="about-right mb-90">
                        <p><?= $berita->author ?></p>
                        <div class="about-img">
                            <img src="<?= base_url('assets/gambar/' . $berita->gambar) ?>">
                        </div>
                        <div class="section-tittle mb-30 pt-30">
                            <h3><?= $berita->judul_berita ?></h3>
                        </div>
                        <div class="about-prea">
                            <p class="about-pera1 mb-25"><?= $berita->deskripsi_berita ?>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--  Recent Articles start -->
        <div class="recent-articles">
            <div class="container">
                <div class="recent-wrapper">
                    <!-- section Tittle -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-tittle mb-30">
                                <h3>Recent Articles</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="recent-active dot-style d-flex dot-style">
                                <div class="single-recent mb-100">
                                    <div class="what-img">
                                        <img src="<?= base_url('assets/img/dash.jpg') ?> " alt="">
                                    </div>
                                    <div class="what-cap">
                                        <span class="color1">Night party</span>
                                        <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                    </div>
                                </div>
                                <div class="single-recent mb-100">
                                    <div class="what-img">
                                        <img src="<?= base_url('assets/img/dash.jpg') ?> " alt="">
                                    </div>
                                    <div class="what-cap">
                                        <span class="color1">Night party</span>
                                        <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                    </div>
                                </div>
                                <div class="single-recent mb-100">
                                    <div class="what-img">
                                        <img src="<?= base_url('assets/img/dash.jpg') ?> " alt="">
                                    </div>
                                    <div class="what-cap">
                                        <span class="color1">Night party</span>
                                        <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                    </div>
                                </div>
                                <div class="single-recent mb-100">
                                    <div class="what-img">
                                        <img src="<?= base_url('assets/img/dash.jpg') ?> " alt="">
                                    </div>
                                    <div class="what-cap">
                                        <span class="color1">Night party</span>
                                        <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Recent Articles End -->
        <!--Start pagination -->
        <div class="pagination-area pb-45 text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="single-wrap d-flex justify-content-center">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-start">
                                    <li class="page-item"><a class="page-link" href="#"><span
                                                class="flaticon-arrow roted"></span></a></li>
                                    <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                    <li class="page-item"><a class="page-link" href="#">02</a></li>
                                    <li class="page-item"><a class="page-link" href="#">03</a></li>
                                    <li class="page-item"><a class="page-link" href="#"><span
                                                class="flaticon-arrow right-arrow"></span></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End pagination  -->
        <!-- About US End -->
</section>