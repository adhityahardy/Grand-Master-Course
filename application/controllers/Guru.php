<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru extends CI_Controller
{
    public function index()
    {
        $data['guru'] = $this->db->get_where('guru', ['username' => $this->session->userdata('username')])->row_array();
        echo 'WELKAM' . $data['guru']['username'];
        $this->load->view('homesiswa');
    }
}
