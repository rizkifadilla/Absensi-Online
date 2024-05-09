<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KelasController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function index()
    {
        $data['title'] = 'Kelas';
        $data['kelas'] = $this->ModelKelas->getKelas()->result_array();


        $this->load->view('dist/kelas/view', $data);
    }

    public function create()
    {
        $data['title'] = 'Kelas';


        $this->load->view('dist/kelas/create', $data);
    }
}