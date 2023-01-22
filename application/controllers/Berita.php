<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_user');
        $this->load->model('M_berita');
    }

    public function index()
    {
        $data = array(
            'title' => 'Berita',
            'berita' => $this->m_user->get_all_data(),
        );
        $this->load->view('berita/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('Berita/berita', $data);
        $this->load->view('berita/footer', $data);
    }

    public function detail_berita($id_berita)
    {
        $data = array(
            'title' => 'Detail Berita',
            'berita' => $this->m_user->detail_berita($id_berita),
        );
        $this->load->view('berita/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('berita/detailberita', $data);
        $this->load->view('berita/footer', $data);
    }
}