<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SekolahController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function index()
    {
        $data['title'] = 'Sekolah';
        $data['sekolah'] = $this->ModelSekolah->getSekolah();


        $this->load->view('dist/sekolah/view', $data);
    }

}