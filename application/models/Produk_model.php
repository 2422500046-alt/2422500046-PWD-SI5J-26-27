<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk_model extends CI_Model
{
    private $_table = "produk";

    public function get_all()
    {
    $this->db->select('
        produk.id_produk,
        produk.nama AS pd_nama,
        produk.stok,
        produk.deskripsi,
        produk.harga,
        kategori.nama AS kt_nama
    ');

    $this->db->from('produk');

    $this->db->join(
    'kategori',
    'kategori.id_kategori = produk.kategori_id',
    'left'
    );

    return $this->db->get()->result_array();
    }

    public function tambah($data)
    {
        $this->db->insert($this->_table, $data);
        #untuk check apakah berhasil atau tidak input data
        return $this->db->insert_id();
    }

    public function get_by_id($id)
    {
        $this->db->where('id_produk', $id);
        $query = $this->db->get($this->_table);
        return $query->row_array();
    }

    public function ubah($data, $id)
    {
        $this->db->where('id_produk', $id);
        $this->db->update($this->_table, $data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function hapus($id)
    {
        $this->db->delete($this->_table, array('id_produk' => $id));
    }
}