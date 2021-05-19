<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->database();
        $this->load->model('GuruModel');
        $this->load->model('AdminModel');
    }
    public function index()
    {
        #$data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
        #echo 'WELKAM' . $data['admin']['username'];


        $data['title'] = 'GM Course admin';
        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();

        #$this->load->view('templates/auth_header', $data);
        $this->load->view('/menuadmin/adminheader', $data);
        $this->load->view('/menuadmin/homeadmin', $data);
        $this->load->view('/menuadmin/adminfooter', $data);
        #$this->load->view('templates/auth_footer');
    }
    public function listguru()
    {
        #$data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
        #echo 'WELKAM' . $data['admin']['username'];


        $data['title'] = 'GM Course admin';
        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();


        $data["list_data"] = $this->GuruModel->getData();
        $this->load->view('/menuadmin/adminheader', $data);
        $this->load->view('/menuadmin/listguru', $data);
        $this->load->view('/menuadmin/adminfooter', $data);
    }

    public function listadmin()
    {
        #$data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
        #echo 'WELKAM' . $data['admin']['username'];


        $data['title'] = 'GM Course admin';
        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();


        $data["list_data"] = $this->AdminModel->getData();
        $this->load->view('/menuadmin/adminheader', $data);
        $this->load->view('/menuadmin/listadmin', $data);
        $this->load->view('/menuadmin/adminfooter', $data);
    }
}
