<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelKelas extends CI_Model
{
    public function getKelas($data = null)
    {
        $this->db->select('*');
        $this->db->from('kelas');
        return $this->db->get();
    }
}