<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['header'] = 'frontend/home-header';
        $data['body'] = 'frontend/home';
        // $data['footer'] = 'frontend/footer';
        $this->load->view('frontend/frontend-template', $data);
    }
}