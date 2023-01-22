<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{
    public function get_all_data()
    {
        $this->db->select('*');
        $this->db->from('berita');
        $this->db->join('kategori_berita', 'kategori_berita.id_kategori = berita.id_kategori', 'left');

        $this->db->order_by('id_berita', 'desc');
        return $this->db->get()->result();
    }
    public function get_all_data_kategori()
    {
        $this->db->select('*');
        $this->db->from('kategori_berita');
        $this->db->order_by('id_kategori', 'desc');
        return $this->db->get()->result();
    }
    public function detail_berita($id_berita)
    {
        $this->db->select('*');
        $this->db->from('berita');
        $this->db->join('kategori_berita', 'kategori_berita.id_kategori = berita.id_kategori', 'left');
        $this->db->where('id_berita', $id_berita);
        return $this->db->get()->row();
    }
    public function kategori($id_kategori)
    {
        $this->db->select('*');
        $this->db->from('kategori_berita');
        $this->db->where('id_kategori', $id_kategori);
        return $this->db->get()->row();
    }
}