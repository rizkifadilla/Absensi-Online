<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelOrangTua extends CI_Model
{
    public function getOrangTua($data = null)
    {
        $this->db->select('*');
        $this->db->from('orang_tua');
        return $this->db->get();
    }
}