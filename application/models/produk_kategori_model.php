<?php
defined('BASEPATH') or exit('No direct script access allowed');

class produk_kategori_model extends CI_Model
{

    private $_table = "kategori";

    public function get_all()
    {

        $query = $this->db->get($this->_table);
        return $query->result_array();
    }
}    