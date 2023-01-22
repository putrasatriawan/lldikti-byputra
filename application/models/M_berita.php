<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_berita extends CI_Model
{
    public function get_all_data()
    {
        $this->db->select('*');
        $this->db->from('berita');
        $this->db->join('kategori_berita', 'kategori_berita.id_kategori = berita.id_kategori', 'left', 'is NULL');

        $this->db->order_by('id_berita', 'desc');
        return $this->db->get()->result();
    }

    public function get_data($id_berita)
    {
        $this->db->select('*');
        $this->db->from('berita');
        $this->db->join('kategori_berita', 'kategori_berita.id_kategori = berita.id_kategori', 'left', 'is NULL');

        $this->db->where('id_berita', $id_berita);

        return $this->db->get()->row();
    }
    public function add_berita($data)
    {
        $this->db->insert('berita', $data);
    }
    public function delete_berita($data)
    {
        $this->db->where('id_berita', $data['id_berita']);
        $this->db->delete('berita', $data);
    }

    public function kategori($id_kategori)
    {
        $this->db->select('*');
        $this->db->from('kategori_berita');
        $this->db->where('id_kategori', $id_kategori);
        return $this->db->get()->row();
    }
    public function edit_berita($data)
    {
        $this->db->where('id_berita', $data['id_berita']);
        $this->db->update('berita', $data);
    }
   
}