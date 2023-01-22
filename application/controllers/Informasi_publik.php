<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Informasi_publik extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('informasi_publik/standar-pelayanan-publik');
        $this->load->view('templates/footer');
    }
    public function ppid()
    {
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('informasi_publik/ppid');
        $this->load->view('templates/footer');
    }
    public function prosedur_oprasional_standar()
    {
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('informasi_publik/prosedur_oprasional_standar');
        $this->load->view('templates/footer');
    }

    public function agenda_kegiatan()
    {
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('informasi_publik/agenda_kegiatan');
        $this->load->view('templates/footer');
    }

    public function buku_direktori_pts()
    {
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('informasi_publik/buku_direktori_pts');
        $this->load->view('templates/footer');
    }

    public function buku_panduan()
    {
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('informasi_publik/buku_panduan');
        $this->load->view('templates/footer');
    }

    public function buku_statistik()
    {
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('informasi_publik/buku_statistik');
        $this->load->view('templates/footer');
    }

    public function buletin_lldikti()
    {
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('informasi_publik/buletin_lldikti');
        $this->load->view('templates/footer');
    }

    public function galeri()
    {
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('informasi_publik/galeri');
        $this->load->view('templates/footer');
    }

    public function materi_kegiatan()
    {
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('informasi_publik/materi_kegiatan');
        $this->load->view('templates/footer');
    }

    public function peta_bisnis_lldikti()
    {
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('informasi_publik/peta_bisnis_lldikti');
        $this->load->view('templates/footer');
    }

    public function surat_edaran()
    {
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('informasi_publik/produk_hukum/surat_edaran');
        $this->load->view('templates/footer');
    }

    public function detail_surat_edaran()
    {
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('informasi_publik/produk_hukum/detail_surat_edaran');
        $this->load->view('templates/footer');
    }

    public function undang_undang()
    {
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('informasi_publik/produk_hukum/undang_undang');
        $this->load->view('templates/footer');
    }

    public function sk_dirjen()
    {
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('informasi_publik/produk_hukum/sk_dirjen');
        $this->load->view('templates/footer');
    }

    public function peraturan_menteri()
    {
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('informasi_publik/produk_hukum/peraturan_menteri');
        $this->load->view('templates/footer');
    }

    public function peraturan_pemerintah()
    {
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('informasi_publik/produk_hukum/peraturan_pemerintah');
        $this->load->view('templates/footer');
    }

    public function peraturan_presiden()
    {
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('informasi_publik/produk_hukum/peraturan_presiden');
        $this->load->view('templates/footer');
    }

    public function peraturan_risdekti()
    {
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('informasi_publik/produk_hukum/peraturan_risdekti');
        $this->load->view('templates/footer');
    }
}