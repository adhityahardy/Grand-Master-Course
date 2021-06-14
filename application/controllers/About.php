<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('unit_test');
        $this->load->model('AdminModel');
    }
    public function about()
    {
        $this->load->view('about/aboutpage');
    }
}
