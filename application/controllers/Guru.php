<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru extends CI_Controller
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
        $data['title'] = 'Guru GM Course';
        $data['guru'] = $this->db->get_where('guru', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('/menuguru/guruheader', $data);
        $this->load->view('/menuguru/homeguru', $data);
        $this->load->view('/menuguru/gurufooter', $data);
    }

    public function listsiswa()
    {
        $data['title'] = 'Guru GM Course';
        $data['guru'] = $this->db->get_where('guru', ['username' => $this->session->userdata('username')])->row_array();
        $data["list_data"] = $this->SiswaModel->getData();
        $this->load->view('/menuguru/guruheader', $data);
        $this->load->view('/menuguru/listsiswa', $data);
        $this->load->view('/menuguru/gurufooter', $data);
    }

    public function listmatpel()
    {
        $data['title'] = 'Guru GM Course';
        $data['guru'] = $this->db->get_where('guru', ['username' => $this->session->userdata('username')])->row_array();
        // $data['guru'] = $this->GuruModel->getData();
        $data["list_data"] = $this->MatpelModel->getData();
        $this->load->view('/menuguru/guruheader', $data);
        $this->load->view('/menuguru/listmatpel', $data);
        $this->load->view('/menuguru/gurufooter', $data);
    }

    public function listjadwal()
    {
        $data['title'] = 'Guru GM Course';
        $data['guru'] = $this->db->get_where('guru', ['username' => $this->session->userdata('username')])->row_array();
        $data['siswa'] = $this->SiswaModel->getData();
        // $data['guru'] = $this->GuruModel->getData();
        $data['matpel'] = $this->MatpelModel->getData();
        $data["list_data"] = $this->JadwalModel->getData();
        $this->load->view('/menuguru/guruheader', $data);
        $this->load->view('/menuguru/listjadwal', $data);
        $this->load->view('/menuguru/gurufooter', $data);
    }
}
