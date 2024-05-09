<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SiswaController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function index()
    {
        $data['title'] = 'Siswa';
        $data['siswa'] = $this->ModelSiswa->getSiswa()->result_array();


        $this->load->view('dist/siswa/view', $data);
    }

    public function create()
    {
        $data['title'] = 'Siswa';


        $this->load->view('dist/siswa/create', $data);
    }
}