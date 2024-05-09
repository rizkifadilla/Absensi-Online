<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelGuru extends CI_Model
{
    public function getGuru($data = null)
    {
        $this->db->select('*');
        $this->db->from('guru');
        return $this->db->get();
    }
}