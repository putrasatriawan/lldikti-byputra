<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
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
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('profil/mainprofil');
        $this->load->view('templates/footer');
    }

    public function profil_lldikti_4()
    {
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('profil/profil-lldikti-4');
        $this->load->view('templates/footer');
    }

    public function profil_kepala()
    {
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('profil/profil-kepala');
        $this->load->view('templates/footer');
    }
}
