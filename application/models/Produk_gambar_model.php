<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_gambar_model extends CI_Model
{
    private $_table = 'produk_gambar';

    public function get_by_produk_id($id_produk)
    {
        return $this->db->get_where($this->_table, ['produk_id' => $id_produk])->result_array();
    }

    public function tambah($data)
    {
        return $this->db->insert($this->_table, $data);
    }

    public function hapus($id)
    {
    return $this->db->delete(
        $this->_table,
        ['id_gambar' => $id]
    );
    }
    
    public function hapus_by_produk_id($id_produk)
    {
        return $this->db->delete($this->_table, ['produk_id' => $id_produk]);
    }
}
