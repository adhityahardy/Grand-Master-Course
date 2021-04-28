<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function index()
    {
        #$data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
        #echo 'WELKAM' . $data['admin']['username'];


        $data['title'] = 'GM Course admin';
        $this->load->view('templates/auth_header', $data);
        $this->load->view('/menuadmin/homeadmin', $data);
        $this->load->view('templates/auth_footer');
    }
}
