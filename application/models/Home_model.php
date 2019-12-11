<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

    function __construct()
    {
    	parent::__construct();
    }

    public function get_kategori()
    {
        // Urutkan berdasar abjad
        $this->db->order_by('id_kat');

        $query = $this->db->get('kategori');
        return $query->result();
    }

    public function get_bunganya()
    {
        // Urutkan berdasar abjad
        // SELECT * FROM bucketBunga 
        // INNER JOIN kategori 
        // ON bucketBunga.id_kat=kategori.id_kat 
        // ORDER BY bucketBunga.tgl_upload DESC 

        $this->db->order_by('bucketBunga.tgl_upload', 'DESC');

        $this->db->join('kategori', 'kategori.id_kat=bucketBunga.id_kat');

        $query = $this->db->get('bucketBunga');
        return $query->result();
    }

    

    public function set_bunganya($namaBunga,$keterangan, $id_kat, $url, $gambar)
    {
        $data = array(
            'namaBunga'     => $namaBunga,
            'keterangan'    => $keterangan,
            'id_kat'        => $id_kat,
            'url'           => $url,
            'gambar'        => $gambar
            
        );
        // menambahkan data
        return $this->db->insert('bucketBunga', $data);
    }

    public function delete_bunganya($id)
    {
        // menghapus Data
        $this->db->where('id', $id);
        $result = $this->db->delete('bucketBunga');
        return $result;
    }

   
}