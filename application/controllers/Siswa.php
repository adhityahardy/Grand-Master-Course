<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Siswa_Model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['siswa'] = $this->db->get_where('siswa', ['username' => $this->session->userdata('username')])->row_array();
        echo 'WELKAM' . $data['siswa']['username'];
        $this->load->view('homesiswa');
    }

    public function viewMatpel()
    {

        $data['title'] = 'List Mata Pelajaran';
        $data['siswa'] = $this->db->get_where('siswa', ['username' => $this->session->userdata('username')])->row_array();

        $data1['siswa'] = $this->Siswa_Model->getAllMatpel()();

        // $this->load->view('templates/header', $data);
        // $this->load->view('templates/sidebar', $data);
        // $this->load->view('templates/topbar', $data);
        $this->load->view('siswa/matpel', $data1);
        // $this->load->view('templates/footer');
    }

    public function viewJadwal()
    {

        $data['title'] = 'List Jadwal';
        $data['siswa'] = $this->db->get_where('siswa', ['username' => $this->session->userdata('username')])->row_array();

        $data1['siswa'] = $this->Siswa_Model->getAllJadwal()()();

        // $this->load->view('templates/header', $data);
        // $this->load->view('templates/sidebar', $data);
        // $this->load->view('templates/topbar', $data);
        $this->load->view('siswa/jadwal', $data1);
        // $this->load->view('templates/footer');
    }
}
