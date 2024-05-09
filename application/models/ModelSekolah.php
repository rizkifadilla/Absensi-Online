<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelSekolah extends CI_Model
{
    public function getSekolah($data = null)
    {
        $this->db->select('*');
        $this->db->from('sekolah');
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->row();

    }
}