<section class="clean-block clean-hero"
    style="background-image:url(&quot;assets/img/dash2.jpg&quot;);color:rgba(9, 162, 255, 0.85);">
    <div class="text">
        <p style="font-family:poppins;  font-size:30px; ">LEMBAGA LAYANAN PENDIDIKAN TINGGI WILAYAH 4</p>
        <h1 style="color: black;">Berita</h1>
    </div>
</section>
<br>

<section class="clean-block testimonials">
    <br>

    <br>

    <br>


    <!-- Trending Area Start -->
    <div class="trending-area fix">
        <div class="container">
            <div class="trending-main">
                <!-- Trending Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Trending Top -->
                        <div class="trending-top mb-30">
                            <div class="trend-top-img">
                                <img src="assets/img/dash.jpg" alt="">
                                <div class="trend-top-cap">
                                    <span>Appetizers</span>
                                    <h2><a href="<?php echo base_url('berita/detail_berita'); ?>">Kepala LLDIKTI Wilayah
                                            IV Kembali Serahkan SK Guru Besar</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Whats New Start -->
    <section class="whats-news-area pt-50 pb-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row d-flex justify-content-between">
                        <div class="col-lg-3 col-md-3">
                            <div class="section-tittle mb-30">
                                <h3>Whats New</h3>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9">
                            <div class="properties__button">
                                <!--Nav Button  -->
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab"
                                            href="#nav-home" role="tab" aria-controls="nav-home"
                                            aria-selected="true">All</a>
                                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab"
                                            href="#nav-profile" role="tab" aria-controls="nav-profile"
                                            aria-selected="false">Kategori 1</a>
                                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab"
                                            href="#nav-contact" role="tab" aria-controls="nav-contact"
                                            aria-selected="false">Kategori 2</a>
                                        <a class="nav-item nav-link" id="nav-last-tab" data-toggle="tab"
                                            href="#nav-last" role="tab" aria-controls="nav-contact"
                                            aria-selected="false">Kategori 3</a>
                                        <a class="nav-item nav-link" id="nav-Sports" data-toggle="tab"
                                            href="#nav-nav-Sport" role="tab" aria-controls="nav-contact"
                                            aria-selected="false">Kategori 3</a>
                                        <a class="nav-item nav-link" id="nav-technology" data-toggle="tab"
                                            href="#nav-techno" role="tab" aria-controls="nav-contact"
                                            aria-selected="false">Kategori 4</a>
                                    </div>
                                </nav>
                                <!--End Nav Button  -->
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Nav Card -->
                            <div class="tab-content" id="nav-tabContent">
                                <!-- card one -->
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                    aria-labelledby="nav-home-tab">
                                    <div class="whats-news-caption">
                                        <div class="row d-flex justify-content-between">
                                            <?php foreach ($berita as $key => $value) { ?>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-what-news mb-100">
                                                    <div class="what-img">
                                                        <a
                                                            href="<?= base_url('berita/detail_berita/' . $value->id_berita) ?>">
                                                            <img
                                                                src="<?= base_url('assets/gambar/' . $value->gambar) ?>">
                                                    </div>
                                                    <div class="what-cap">
                                                        <span class="color1"><?= $value->nama_kategori ?></span>
                                                        <h4> <?= $value->judul_berita ?>
                                                        </h4>
                                                    </div>
                                                </div>
                                                <?php echo form_close(); ?>
                                            </div>
                                            <?php } ?>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-what-news mb-100">
                                                    <div class="what-img">
                                                        <img src="<?= base_url() ?>assets/img/dash.jpg" alt="">
                                                    </div>
                                                    <div class="what-cap">
                                                        <span class="color1">Kategori</span>
                                                        <h4><a href="<?php echo base_url('berita/detail_berita'); ?>">Webinar
                                                                Coaching Clinic Sistem Penjaminan
                                                                Mutu
                                                                Internal</a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-what-news mb-100">
                                                    <div class="what-img">
                                                        <img src="<?= base_url() ?>assets/img/dash.jpg" alt="">
                                                    </div>
                                                    <div class="what-cap">
                                                        <span class="color1">Kategoriy</span>
                                                        <h4><a href="<?php echo base_url('berita/detail_berita'); ?>">Penyerahan
                                                                SK Kelembagaan ke 3 Perguruan
                                                                Tinggi/Badan Penyelenggara</a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-what-news mb-100">
                                                    <div class="what-img">
                                                        <img src="<?= base_url() ?>assets/img/dash.jpg" alt="">
                                                    </div>
                                                    <div class="what-cap">
                                                        <span class="color1">Kategori</span>
                                                        <h4><a href="<?php echo base_url('berita/detail_berita'); ?>">Pengumuman
                                                                pelaksanaan Pemilihan Mahasiswa
                                                                Berprestasi Tingkat Nasional Tahun
                                                                2022
                                                            </a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card two -->
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                    aria-labelledby="nav-profile-tab">
                                    <div class="whats-news-caption">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-what-news mb-100">
                                                    <div class="what-img">
                                                        <img src="<?= base_url() ?>assets/img/dash.jpg" alt="">
                                                    </div>
                                                    <div class="what-cap">
                                                        <span class="color1">Kategori</span>
                                                        <h4><a href="<?php echo base_url('berita/detail_berita'); ?>">
                                                                Tinggi/Badan Penyelenggara</a>
                                                            </a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-what-news mb-100">
                                                    <div class="what-img">
                                                        <img src="<?= base_url() ?>assets/img/dash.jpg" alt="">
                                                    </div>
                                                    <div class="what-cap">
                                                        <span class="color1">Kategori</span>
                                                        <h4><a href="<?php echo base_url('berita/detail_berita'); ?>">Pendampingan
                                                                JAD untuk Penilai JAD Internal dan
                                                                Operator JAD Perguruan Tinggi</a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-what-news mb-100">
                                                    <div class="what-img">
                                                        <img src="<?= base_url() ?>assets/img/dash.jpg" alt="">
                                                    </div>
                                                    <div class="what-cap">
                                                        <span class="color1">Night party</span>
                                                        <h4><a href="<?php echo base_url('berita/detail_berita'); ?>">Bimbingan
                                                                Teknis Internalisasi Merdeka Belajar
                                                                Ke Dalam Standar Nasional Pendidikan
                                                                Tinggi di
                                                                Lingkungan LLDIKTI Wilayah IV</a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-what-news mb-100">
                                                    <div class="what-img">
                                                        <img src="<?= base_url() ?>assets/img/dash.jpg" alt="">
                                                    </div>
                                                    <div class="what-cap">
                                                        <span class="color1">Kategori</span>
                                                        <h4><a href="<?php echo base_url('berita/detail_berita'); ?>">Peluang
                                                                dan Potensi Implementasi MBKM
                                                                Melalui
                                                                Kerja Sama dengan ICE Institute</a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card three -->
                                <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                    aria-labelledby="nav-contact-tab">
                                    <div class="whats-news-caption">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-what-news mb-100">
                                                    <div class="what-img">
                                                        <img src="<?= base_url() ?>assets/img/dash.jpg" alt="">
                                                    </div>
                                                    <div class="what-cap">
                                                        <span class="color1">Kategori</span>
                                                        <h4><a href="<?php echo base_url('berita/detail_berita'); ?>">Welcome
                                                                To The Best Model Winner Contest</a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-what-news mb-100">
                                                    <div class="what-img">
                                                        <img src="<?= base_url() ?>assets/img/dash.jpg" alt="">
                                                    </div>
                                                    <div class="what-cap">
                                                        <span class="color1">Kategori</span>
                                                        <h4><a href="<?php echo base_url('berita/detail_berita'); ?>">Welcome
                                                                To The Best Model Winner Contest</a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-what-news mb-100">
                                                    <div class="what-img">
                                                        <img src="<?= base_url() ?>assets/img/dash.jpg" alt="">
                                                    </div>
                                                    <div class="what-cap">
                                                        <span class="color1">Kategori</span>
                                                        <h4><a href="<?php echo base_url('berita/detail_berita'); ?>">Welcome
                                                                To The Best Model Winner Contest</a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-what-news mb-100">
                                                    <div class="what-img">
                                                        <img src="<?= base_url() ?>assets/img/dash.jpg" alt="">
                                                    </div>
                                                    <div class="what-cap">
                                                        <span class="color1">Kategori</span>
                                                        <h4><a href="<?php echo base_url('berita/detail_berita'); ?>">Welcome
                                                                To The Best Model Winner Contest</a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- card fure -->
                                <div class="tab-pane fade" id="nav-last" role="tabpanel" aria-labelledby="nav-last-tab">
                                    <div class="whats-news-caption">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-what-news mb-100">
                                                    <div class="what-img">
                                                        <img src="<?= base_url() ?>assets/img/dash.jpg" alt="">
                                                    </div>
                                                    <div class="what-cap">
                                                        <span class="color1">Kategori</span>
                                                        <h4><a href="<?php echo base_url('berita/detail_berita'); ?>">Welcome
                                                                To The Best Model Winner Contest</a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-what-news mb-100">
                                                    <div class="what-img">
                                                        <img src="<?= base_url() ?>assets/img/dash.jpg" alt="">
                                                    </div>
                                                    <div class="what-cap">
                                                        <span class="color1">Kategori</span>
                                                        <h4><a href="<?php echo base_url('berita/detail_berita'); ?>">Welcome
                                                                To The Best Model Winner Contest</a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-what-news mb-100">
                                                    <div class="what-img">
                                                        <img src="<?= base_url() ?>assets/img/dash.jpg" alt="">
                                                    </div>
                                                    <div class="what-cap">
                                                        <span class="color1">Kategori</span>
                                                        <h4><a href="<?php echo base_url('berita/detail_berita'); ?>">Welcome
                                                                To The Best Model Winner Contest</a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-what-news mb-100">
                                                    <div class="what-img">
                                                        <img src="<?= base_url() ?>assets/img/dash.jpg" alt="">
                                                    </div>
                                                    <div class="what-cap">
                                                        <span class="color1">Kategori</span>
                                                        <h4><a href="<?php echo base_url('berita/detail_berita'); ?>">Welcome
                                                                To The Best Model Winner Contest</a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- card Five -->
                                <div class="tab-pane fade" id="nav-nav-Sport" role="tabpanel"
                                    aria-labelledby="nav-Sports">
                                    <div class="whats-news-caption">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-what-news mb-100">
                                                    <div class="what-img">
                                                        <img src="<?= base_url() ?>assets/img/dash.jpg" alt="">
                                                    </div>
                                                    <div class="what-cap">
                                                        <span class="color1">Kategori</span>
                                                        <h4><a href="<?php echo base_url('berita/detail_berita'); ?>">Welcome
                                                                To The Best Model Winner Contest</a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-what-news mb-100">
                                                    <div class="what-img">
                                                        <img src="<?= base_url() ?>assets/img/dash.jpg" alt="">
                                                    </div>
                                                    <div class="what-cap">
                                                        <span class="color1">Kategori</span>
                                                        <h4><a href="<?php echo base_url('berita/detail_berita'); ?>">Welcome
                                                                To The Best Model Winner Contest</a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-what-news mb-100">
                                                    <div class="what-img">
                                                        <img src="<?= base_url() ?>assets/img/dash.jpg" alt="">
                                                    </div>
                                                    <div class="what-cap">
                                                        <span class="color1">Kategori</span>
                                                        <h4><a href="<?php echo base_url('berita/detail_berita'); ?>">Welcome
                                                                To The Best Model Winner Contest</a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-what-news mb-100">
                                                    <div class="what-img">
                                                        <img src="<?= base_url() ?>assets/img/dash.jpg" alt="">
                                                    </div>
                                                    <div class="what-cap">
                                                        <span class="color1">Kategori</span>
                                                        <h4><a href="<?php echo base_url('berita/detail_berita'); ?>">Welcome
                                                                To The Best Model Winner Contest</a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- card Six -->
                                <div class="tab-pane fade" id="nav-techno" role="tabpanel"
                                    aria-labelledby="nav-technology">
                                    <div class="whats-news-caption">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-what-news mb-100">
                                                    <div class="what-img">
                                                        <img src="<?= base_url() ?>assets/img/dash.jpg" alt="">
                                                    </div>
                                                    <div class="what-cap">
                                                        <span class="color1">Kategori</span>
                                                        <h4><a href="<?php echo base_url('berita/detail_berita'); ?>">Welcome
                                                                To The Best Model Winner Contest</a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-what-news mb-100">
                                                    <div class="what-img">
                                                        <img src="<?= base_url() ?>assets/img/dash.jpg" alt="">
                                                    </div>
                                                    <div class="what-cap">
                                                        <span class="color1">Kategori</span>
                                                        <h4><a href="<?php echo base_url('berita/detail_berita'); ?>">Welcome
                                                                To The Best Model Winner Contest</a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-what-news mb-100">
                                                    <div class="what-img">
                                                        <img src="<?= base_url() ?>assets/img/dash.jpg" alt="">
                                                    </div>
                                                    <div class="what-cap">
                                                        <span class="color1">Kategori</span>
                                                        <h4><a href="<?php echo base_url('berita/detail_berita'); ?>">Welcome
                                                                To The Best Model Winner Contest</a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-what-news mb-100">
                                                    <div class="what-img">
                                                        <img src="<?= base_url() ?>assets/img/dash.jpg" alt="">
                                                    </div>
                                                    <div class="what-cap">
                                                        <span class="color1">Kategori</span>
                                                        <h4><a href="<?php echo base_url('berita/detail_berita'); ?>">Welcome
                                                                To The Best Model Winner Contest</a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Nav Card -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <!-- Section Tittle -->
                    <div class="section-tittle mb-40">
                        <h3>Follow Us</h3>
                    </div>
                    <!-- Flow Socail -->
                    <div class="single-follow mb-45">
                        <div class="single-box">
                            <div class="follow-us d-flex align-items-center">
                                <div class="follow-social">
                                    <a href="#"><img src="<?= base_url() ?>assets/img/news/icon-fb.png" alt=""></a>
                                </div>
                                <div class="follow-count">
                                    <span>8,045</span>
                                    <p>Fans</p>
                                </div>
                            </div>
                            <div class="follow-us d-flex align-items-center">
                                <div class="follow-social">
                                    <a href="#"><img src="<?= base_url() ?>assets/img/news/icon-tw.png" alt=""></a>
                                </div>
                                <div class="follow-count">
                                    <span>8,045</span>
                                    <p>Fans</p>
                                </div>
                            </div>
                            <div class="follow-us d-flex align-items-center">
                                <div class="follow-social">
                                    <a href="#"><img src="<?= base_url() ?>assets/img/news/icon-ins.png" alt=""></a>
                                </div>
                                <div class="follow-count">
                                    <span>8,045</span>
                                    <p>Fans</p>
                                </div>
                            </div>
                            <div class="follow-us d-flex align-items-center">
                                <div class="follow-social">
                                    <a href="#"><img src="<?= base_url() ?>assets/img/news/icon-yo.png" alt=""></a>
                                </div>
                                <div class="follow-count">
                                    <span>8,045</span>
                                    <p>Fans</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- New Poster -->
                    <div class="news-poster d-none d-lg-block">
                        <img src="<?= base_url() ?>assets/img/lldikti.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Whats New End -->
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
                            <?php foreach ($berita as $key => $value) { ?>
                            <div class="single-recent mb-100">
                                <div class="what-img">
                                    <img src="<?= base_url('assets/gambar/' . $value->gambar) ?>">
                                </div>
                                <div class="what-cap">
                                    <span class="color1">Kategori</span>
                                    <h4><a href="<?php echo base_url('berita/detail_berita'); ?>"><?= $value->judul_berita ?>
                                        </a></h4>
                                </div>
                                <?php echo form_close(); ?>
                            </div>
                            <?php } ?>
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
                                <li class="page-item active"><a class="page-link" href="#">01</a>
                                </li>
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
</section>