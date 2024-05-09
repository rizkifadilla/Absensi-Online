<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelSiswa extends CI_Model
{
    public function getSiswa($data = null)
    {
        $this->db->select('*');
        $this->db->from('siswa');
        return $this->db->get();
    }
}