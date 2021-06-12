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

    public function listmatpel()
    {
        $data['title'] = 'Siswa GM Course';
        $data['siswa'] = $this->db->get_where('siswa', ['username' => $this->session->userdata('username')])->row_array();
        $data['guru'] = $this->GuruModel->getData();
        $data["list_data"] = $this->MatpelModel->getData();
        $this->load->view('/menusiswa/siswaheader', $data);
        $this->load->view('/menusiswa/listmatpel', $data);
        $this->load->view('/menusiswa/siswafooter', $data);
    }

    public function listjadwal()
    {
        $data['title'] = 'Siswa GM Course';
        $data['siswa'] = $this->db->get_where('siswa', ['username' => $this->session->userdata('username')])->row_array();
        //$data['siswa'] = $this->SiswaModel->getData();
        $data['guru'] = $this->GuruModel->getData();
        $data['matpel'] = $this->MatpelModel->getData();
        $data["list_data"] = $this->JadwalModel->getData();
        $this->load->view('/menusiswa/siswaheader', $data);
        $this->load->view('/menusiswa/listjadwal', $data);
        $this->load->view('/menusiswa/siswafooter', $data);
    }

    public function createJadwal()
    {
        //$hariJadwal = $this->input->post('hariJadwal');
        //$jamJadwal = $this->input->post('jamJadwal');
        //$tanggaljadwal = $this->input->post('tanggaljadwal');
        //$jamjadwal = $this->input->post('jamjadwal');
        $tanggalJadwal = $this->input->post('tanggalJadwal');
        $jamJadwal = $this->input->post('jamJadwal');
        $namaMatpel = $this->input->post('namaMatpel');
        $namaGuru = $this->input->post('namaGuru');
        $namaSiswa = $this->input->post('namaSiswa');
        $idSiswa = $this->input->post('idSiswa');
        $accJadwal = 0;
        // $data = array(
        //     'tanggalJadwal'  => $tanggalJadwal,
        //     'jamJadwal'      => $jamJadwal,
        //     'namaMatpel'    => $namaMatpel,
        //     'namaGuru'    => $namaGuru,
        //     'namaSiswa' => $namaSiswa
        // );
        // var_dump($data);
        // die();
        $cari = array(
            'namaMatpel' => $namaMatpel,
            'namaGuru' => $namaGuru
        );
        $query = $this->db->get_where('matpel', $cari)->row_array();
        $idMatpel = $query['idMatpel'];
        $idGuru = $query['idGuru'];
        //$namaSiswa = $this->db->get_where('siswa', ['idSiswa' => $idSiswa]);

        // $con['conditions'] = array(
        //     'idSiswa' => $idSiswa,
        // );
        // $siswa = $this->SiswaModel->getData($con)[0];
        // $namaSiswa = $siswa['namaSiswa'];
        //var_dump($siswa);
        $data = array(
            'tanggalJadwal'  => $tanggalJadwal,
            'jamJadwal'      => $jamJadwal,
            'idMatpel '     => $idMatpel,
            'idGuru '       => $idGuru,
            'idSiswa'  => $idSiswa,
            'namaMatpel'    => $namaMatpel,
            'namaGuru'    => $namaGuru,
            'namaSiswa' => $namaSiswa,
            'accJadwal' => $accJadwal
        );
        // var_dump($data);
        // die();

        $this->JadwalModel->insert($data, 'jadwal');
        redirect('siswa/listjadwal');
        //var_dump($data);
        //var_dump($tanggaljadwal);
        //var_dump($jamjadwal);
        //exit();

        //$listmatpel = $this->MatpelModel->getData();

        /*
        $data = array(
            'hariJadwal'  => $hariJadwal,
            'jamJadwal'   => $jamJadwal,
        );
        $this->JadwalModel->insert($data, 'jadwal');
        redirect('admin/listjadwal');
        */
    }
}
