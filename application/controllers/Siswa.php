<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->database();
        $this->load->model('GuruModel');
        $this->load->model('AdminModel');
        $this->load->model('MatpelModel');
        $this->load->model('JadwalModel');
        $this->load->model('SiswaModel');
    }

    public function index()
    {
        $data['title'] = 'Siswa GM Course';
        $data['siswa'] = $this->db->get_where('siswa', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('/menusiswa/siswaheader', $data);
        $this->load->view('/menusiswa/homesiswa', $data);
        $this->load->view('/menusiswa/siswafooter', $data);
    }

    public function matpel()
    {
        $data['title'] = 'Siswa GM Course';
        $data['siswa'] = $this->db->get_where('siswa', ['username' => $this->session->userdata('username')])->row_array();
        $data['guru'] = $this->GuruModel->getData();
        $data["list_data"] = $this->MatpelModel->getData();
        $this->load->view('/menusiswa/siswaheader', $data);
        $this->load->view('/menusiswa/matpel', $data);
        $this->load->view('/menusiswa/siswafooter', $data);
    }

    public function jadwal()
    {
        $data['title'] = 'Siswa GM Course';
        $data['siswa'] = $this->db->get_where('siswa', ['username' => $this->session->userdata('username')])->row_array();
        $data['siswa'] = $this->SiswaModel->getData();
        $data['guru'] = $this->GuruModel->getData();
        $data['matpel'] = $this->MatpelModel->getData();
        $data["list_data"] = $this->JadwalModel->getData();
        $this->load->view('/menusiswa/siswaheader', $data);
        $this->load->view('/menusiswa/jadwal', $data);
        $this->load->view('/menusiswa/siswafooter', $data);
    }
}
