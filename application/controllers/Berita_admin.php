<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita_admin extends CI_Controller
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
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_berita');
        $this->load->model('m_kategori');
    }

    public function index()
    {
        $data = array(
            'title' => 'Admin-Berita',
            'berita' => $this->m_berita->get_all_data(),
        );
        $this->load->view('admin/templates_admin/header', $data);
        $this->load->view('admin/templates_admin/navbar', $data);
        $this->load->view('admin/templates_admin/topbar', $data);
        $this->load->view('admin/berita/index', $data);
        $this->load->view('admin/templates_admin/footer', $data);
    }

    public function add_berita()
    {
        $this->form_validation->set_rules(
            'judul_berita',
            'Judul Beita',
            'required',
            array('required' => '%s Harus Di isi !!!')
        );
        $this->form_validation->set_rules(
            'id_kategori',
            'Kategori',
            'required',
            array('required' => '%s Harus Di isi !!!')
        );
        $this->form_validation->set_rules(
            'author',
            'Author',
            'required',
            array('required' => '%s Harus Di isi !!!')
        );
        $this->form_validation->set_rules(
            'deskripsi_berita',
            'Deskripsi Berita',
            'required',
            array('required' => '%s Harus Di isi !!!')
        );


        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './assets/gambar/';
            $config['allowed_types'] = '*';
            $config['max_size'] = '60000';
            $this->upload->initialize($config);
            $field_name = "gambar";
            if (!$this->upload->do_upload($field_name)) {
                $data = array(
                    'title' => 'Tambah Berita',
                    'kategori_berita' => $this->m_kategori->get_all_data(),
                    'error_upload' => $this->upload->display_errors(),
                );
                $this->load->view('admin/templates_admin/header', $data);
                $this->load->view('admin/templates_admin/navbar', $data);
                $this->load->view('admin/templates_admin/topbar', $data);
                $this->load->view('admin/berita/add_berita', $data);
                $this->load->view('admin/templates_admin/footer', $data);
            } else {
                $upload_data = array(
                    'uploads' => $this->upload->data()
                );
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/gambar/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                $data = array(
                    'judul_berita' => $this->input->post('judul_berita'),
                    'author' => $this->input->post('author'),
                    'id_kategori' => $this->input->post('id_kategori'),
                    'deskripsi_berita' => $this->input->post('deskripsi_berita'),
                    'gambar'  => $upload_data['uploads']['file_name'],
                );
                $this->m_berita->add_berita($data);
                $this->session->set_flashdata('pesan', 'Data berhasil ditambah !!!');
                redirect('berita_admin');
            }
        }
        $data = array(
            'title' => 'Tambah Berita',
            'kategori_berita' => $this->m_kategori->get_all_data(),
        );
        $this->load->view('admin/templates_admin/header', $data);
        $this->load->view('admin/templates_admin/navbar', $data);
        $this->load->view('admin/templates_admin/topbar', $data);
        $this->load->view('admin/berita/add_berita', $data);
        $this->load->view('admin/templates_admin/footer', $data);
    }
    //Delete one item
    public function delete_berita($id_berita)
    {
        //hapus gambar
        $berita = $this->m_berita->get_data($id_berita);
        if ($berita->gambar != "") {
            unlink('./assets/gambar/' . $berita->gambar);
        }
        //end hapus gambar
        $data = array(
            'id_berita' => $id_berita
        );
        $this->m_berita->delete_berita($data);
        $this->session->set_flashdata('pesan', 'Data berhasil dihapus !!!');
        redirect('berita_admin');
    }


    //Update one item
    public function edit_berita($id_berita)
    {
        $this->form_validation->set_rules(
            'judul_berita',
            'Judul Berita',
            'required',
            array('required' => '%s Harus Di isi !!!')
        );
        $this->form_validation->set_rules(
            'id_kategori',
            'Kategori',
            'required',
            array('required' => '%s Harus Di isi !!!')
        );
        $this->form_validation->set_rules(
            'author',
            'Author',
            'required',
            array('required' => '%s Harus Di isi !!!')
        );
        $this->form_validation->set_rules(
            'deskripsi_berita',
            'Deskripsi Berita',
            'required',
            array('required' => '%s Harus Di isi !!!')
        );

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './assets/gambar/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '6000';
            $this->upload->initialize($config);
            $field_name = "gambar";
            if (!$this->upload->do_upload($field_name)) {
                $data = array(
                    'title' => 'Edit Berita',
                    'kategori' => $this->m_kategori->get_all_data(),
                    'berita' => $this->m_berita->get_data($id_berita),
                    'error_upload' => $this->upload->display_errors(),
                );
                $this->load->view('admin/templates_admin/header', $data);
                $this->load->view('admin/templates_admin/navbar', $data);
                $this->load->view('admin/templates_admin/topbar', $data);
                $this->load->view('admin/berita/edit_berita', $data);
                $this->load->view('admin/templates_admin/footer', $data);
            } else {
                //hapus gambar
                $berita = $this->m_berita->get_data($id_berita);
                if ($berita->gambar != "") {
                    unlink('./assets/gambar/' . $berita->gambar);
                }
                //end hapus gambar
                $upload_data = array(
                    'uploads' => $this->upload->data()
                );
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/gambar/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                $data = array(
                    'id_berita' => $id_berita,
                    'judul_berita' => $this->input->post('judul_berita'),
                    'id_kategori' => $this->input->post('id_kategori'),
                    'author' => $this->input->post('author'),
                    'deskripsi_berita' => $this->input->post('deskripsi_berita'),
                    'gambar'  => $upload_data['uploads']['file_name'],
                );
                $this->m_berita->edit_berita($data);
                $this->session->set_flashdata('pesan', 'Data berhasil diganti !!!');
                redirect('berita_admin');
            }
            //jika tanpa ganti gambar
            $data = array(
                'id_berita' => $id_berita,
                'judul_berita' => $this->input->post('judul_berita'),
                'id_kategori' => $this->input->post('id_kategori'),
                'author' => $this->input->post('author'),
                'deskripsi_berita' => $this->input->post('deskripsi_berita'),

            );
            $this->m_berita->edit_berita($data);
            $this->session->set_flashdata('pesan', 'Data berhasil diganti !!!');
            redirect('berita_admin');
        }

        $data = array(
            'title' => 'Edit Berita',
            'kategori' => $this->m_kategori->get_all_data(),
            'berita' => $this->m_berita->get_data($id_berita),
        );
        $this->load->view('admin/templates_admin/header', $data);
        $this->load->view('admin/templates_admin/navbar', $data);
        $this->load->view('admin/templates_admin/topbar', $data);
        $this->load->view('admin/berita/edit_berita', $data);
        $this->load->view('admin/templates_admin/footer', $data);
    }
}