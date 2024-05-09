<?php
defined('BASEPATH') or exit('No direct script access allowed');

class OrangTuaController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function index()
    {
        $data['title'] = 'OrangTua';
        $data['orangtua'] = $this->ModelOrangTua->getOrangTua()->result_array();


        $this->load->view('dist/orangtua/view', $data);
    }

    public function create()
    {
        $data['title'] = 'OrangTua';


        $this->load->view('dist/orangtua/create', $data);
    }
}