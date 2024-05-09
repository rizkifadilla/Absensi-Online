<?php
defined('BASEPATH') or exit('No direct script access allowed');

class GuruController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function index()
    {
        $data['title'] = 'Guru';
        $data['guru'] = $this->ModelGuru->getGuru()->result_array();


        $this->load->view('dist/guru/view', $data);
    }

    public function create()
    {
        $data['title'] = 'Guru';


        $this->load->view('dist/guru/create', $data);
    }
}