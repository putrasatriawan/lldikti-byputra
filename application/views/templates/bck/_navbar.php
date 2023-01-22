<div class="fixed-top shadow">
    <nav class="navbar-dark navbar-expand-lg bg-white" style="height: 5vh;">
        <div class="navtop" style="height: 100%;">
            <div class="container d-flex justify-content-between" style="height:100%">
                <ul class="navbar-nav d-none d-lg-flex align-items-center">
                    <li class="nav-item">
                        <i class="fa-solid fa-phone"></i> 022-727-5630
                    </li>
                    <li class="nav-item" style="margin-left:5px;">
                        <a class="nav-link" href="#" style="color:white"><i class="fa-solid fa-envelope"></i>
                            informasi@lldikti4.or.id</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color:white"><i class="fa-brands fa-whatsapp"></i>
                            Whatsapp</a>
                    </li>
                </ul>
                <ul class="navbar-nav d-flex flex-row align-items-center" id="navtopr">
                    <li>
                        <a class="text-light mr-3" href="#"><i class="fa-brands fa-twitter"></i></a>
                    </li>
                    <li>
                        <a class="text-light mr-3" href="#"><i class="fa-brands fa-instagram"></i></a>
                    </li>
                    <li>
                        <a class="text-light mr-3" href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    </li>
                    <li>
                        <a class="text-light" href="#"><i class="fa-brands fa-youtube"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <nav class="navbar navbar-light navbar-expand-lg bg-white" style="height: 11vh;">
        <div class="container py-2">
            <a class="navbar-brand logo ml-3" href="<?= base_url(); ?>">
                <img src="<?= base_url(); ?>/assets/img/lldikti.jpg" alt="" width="150px">
            </a>
            <button class="navbar-toggler float-right mr-3" type="button" data-toggle="collapse" data-target="#navcol-1"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav align-items-center ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="<?php echo base_url('Profil'); ?>">
                            Profile
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo base_url('profil-lldikti-wilayah-4'); ?>">
                                    Profile LLDIKTI
                                    4 </a></li>
                            <li><a class="dropdown-item"
                                    href="<?php echo base_url('profil-kepala-lldikti-wilayah-4'); ?>"> Profile
                                    Kepala LLDIKTI 4 </a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('Info'); ?>">Info</a></li>
                    <li class="nav-item"><a class="nav-link"
                            href="<?php echo base_url('Akuntabilitas'); ?>">Akuntabilitas</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('Berita'); ?>">Berita</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="<?php echo base_url('Layanan'); ?>">
                            Layanan
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo base_url('Layanan/layanan_online'); ?>">
                                    Layanan Online
                                </a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('Layanan/layanan_kami'); ?>"> Layanan
                                    Kami
                                </a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('Layanan/cara_pengajuan'); ?>"> Cara
                                    Pengajuan Layanan </a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="<?php echo base_url('Informasi_publik'); ?>"> Informasi Publik </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo base_url('Informasi_publik'); ?>"> Standart
                                    Pelayanan Publik </a></li>
                            <li><a class="dropdown-item" href="#"> Produk Hukum &raquo; </a>
                                <ul class="submenu dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="<?php echo base_url('Informasi_publik/surat_edaran'); ?>">Surat
                                            Edaran</a></li>
                                    <li><a class="dropdown-item"
                                            href="<?php echo base_url('Informasi_publik/undang_undang'); ?>">Undang-Undang</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                            href="<?php echo base_url('Informasi_publik/peraturan_risdekti'); ?>">Peraturan
                                            Risdekti</a></li>
                                    <li><a class="dropdown-item"
                                            href="<?php echo base_url('Informasi_publik/peraturan_presiden'); ?>">Peraturan
                                            Presiden</a></li>
                                    <li><a class="dropdown-item"
                                            href="<?php echo base_url('Informasi_publik/peraturan_menteri'); ?>">Peraturan
                                            Menteri</a></li>
                                    <li><a class="dropdown-item"
                                            href="<?php echo base_url('Informasi_publik/peraturan_pemerintah'); ?>">Peraturan
                                            Pemerintah</a></li>
                                    <li><a class="dropdown-item"
                                            href="<?php echo base_url('Informasi_publik/sk_dirjen'); ?>">SK DIRJEN</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item" href="<?php echo base_url('Informasi_publik/ppid'); ?>"> PPID
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="<?php echo base_url('Informasi_publik/prosedur_oprasional_standar'); ?>">
                                    Prosedur Oprasional Standar </a></li>
                            <li><a class="dropdown-item"
                                    href="<?php echo base_url('Informasi_publik/peta_bisnis_lldikti'); ?>"> Peta Proses
                                    Bisnis LLDIKTI Wilayah IV </a></li>
                            <li><a class="dropdown-item"
                                    href="<?php echo base_url('Informasi_publik/buku_panduan'); ?>"> Buku Panduan \
                                    Pedoman </a></li>
                            <li><a class="dropdown-item"
                                    href="<?php echo base_url('Informasi_publik/materi_kegiatan'); ?>"> Materi Kegiatan
                                </a></li>
                            <li><a class="dropdown-item"
                                    href="<?php echo base_url('Informasi_publik/buletin_lldikti'); ?>"> Buletin LLDIKTI
                                    Wilayah IV </a></li>
                            <li><a class="dropdown-item"
                                    href="<?php echo base_url('Informasi_publik/buku_direktori_pts'); ?>"> Buku
                                    Direktori PTS LLDIKTI IV </a></li>
                            <li><a class="dropdown-item"
                                    href="<?php echo base_url('Informasi_publik/buku_statistik'); ?>"> Buku Statistik
                                    Perguruan Tinggi </a></li>
                            <li><a class="dropdown-item"
                                    href="<?php echo base_url('Informasi_publik/agenda_kegiatan'); ?>"> Agenda Kegiatan
                                </a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('Informasi_publik/galeri'); ?>">
                                    Gallery </a></li>
                        </ul>
                    </li>
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                    <style type="text/css">
                                    .button-blue {
                                        background-color: #2657a7;
                                        border-color: #2657a7;
                                        color: #ffffff;
                                        font-family: poppins;

                                    }
                                    </style>
                                </button>

                            </div>
                        </div>
                    </form>
                    <li> <button class="button-blue rounded-pill" type="button">Kontak & Pengaduan</button> </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<div style="height: 15vh;"></div>