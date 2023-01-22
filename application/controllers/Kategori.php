<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_kategori');
        //Load Dependencies

    }

    // List all your items
    public function index()
    {
        $data = array(
            'title' => 'Kategori',
            'kategori' => $this->m_kategori->get_all_data(),
        );
        $this->load->view('admin/templates_admin/header', $data);
        $this->load->view('admin/templates_admin/navbar', $data);
        $this->load->view('admin/templates_admin/topbar', $data);
        $this->load->view('admin/templates_admin/main', $data);
        $this->load->view('admin/templates_admin/footer', $data);
    }

    // Add a new item
    public function add()
    {
        $data = array(
            'nama_kategori' => $this->input->post('nama_kategori'),
        );
        $this->m_kategori->add($data);
        $this->session->set_flashdata('pesan', 'Data berhasil ditambahkan !!!');
        redirect('kategori');
    }
    public function edit($id_kategori = NULL)
    {
        $data = array(
            'id_kategori' => $id_kategori,
            'nama_kategori' => $this->input->post('nama_kategori'),
        );
        $this->m_kategori->edit($data);
        $this->session->set_flashdata('pesan', 'Data berhasil diedit !!!');
        redirect('kategori');
    }

    public function delete($id_kategori = NULL)
    {
        $data = array(
            'id_kategori' => $id_kategori
        );
        $this->m_kategori->delete($data);
        $this->session->set_flashdata('pesan', 'Data berhasil dihapus !!!');
        redirect('kategori');
    }
    //Update one item
}

/* End of file Kategori.php */