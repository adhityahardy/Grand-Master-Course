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

    public function profile()
    {
        $data['title'] = 'Siswa GM Course';
        $data['siswa'] = $this->db->get_where('siswa', ['username' => $this->session->userdata('username')])->row_array();
        //$data['siswa'] = $this->SiswaModel->getData();
        $data["list_data"] = $this->SiswaModel->getData();
        $this->load->view('/menusiswa/siswaheader', $data);
        $this->load->view('/menusiswa/profile', $data);
        $this->load->view('/menusiswa/siswafooter', $data);
    }

    public function getGuruByMatpel($idMatpel)
    {
        //var_dump($namaMatpel);
        //$data['selectedMatpel'] = $namaMatpel;
        $matpel = $this->db->get_where('matpel', ['idMatpel' => $idMatpel])->row_array();
        $namaMatpel = $matpel['namaMatpel'];
        //var_dump($namaMatpel['namaMatpel']);
        #print_r($namaMatpel);
        //die();
        $data['selectedMatpel'] = '';
        $con['conditions'] = array(
            'namaMatpel' => $namaMatpel,
        );
        $listmatpel = $this->MatpelModel->getData($con);

        foreach ($listmatpel as $matpel) :
            //if ($matpel['namaMatpel'] == $namaMatpel) {
            $data['selectedMatpel'] .=  '<option value="' . $matpel['idGuru'] . '">' . $matpel['namaGuru'] . '</option>';
        //}
        endforeach;
        print_r(json_encode($data));
        //$data = $this->;
        //die();
        //return json_encode($namaMatpel);
    }
    public function createJadwal()
    {
        $tanggalJadwal = $this->input->post('tanggalJadwal');
        $jamJadwal = $this->input->post('jamJadwal');
        $idMatpel = $this->input->post('idMatpel');
        $idGuru = $this->input->post('idGuru');
        $namaMatpel = $this->db->get_where('matpel', ['idMatpel' => $idMatpel])->row_array()['namaMatpel'];
        $namaGuru = $this->db->get_where('guru', ['idGuru' => $idGuru])->row_array()['namaGuru'];
        $namaSiswa = $this->input->post('namaSiswa');
        $idSiswa = $this->input->post('idSiswa');
        $durasi = $this->input->post('durasiJadwal');

        $accJadwal = 0;
        $bayarJadwal = 0;
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
            'accJadwal' => $accJadwal,
            'bayarJadwal' => $bayarJadwal,
            'durasi' => $durasi
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

    public function editprofile()
    {
        $idSiswa = $this->input->post('idSiswa');
        $namaSiswa = $this->input->post('namaSiswa');
        $noHp = $this->input->post('noHp');
        $alamat = $this->input->post('alamat');
        $email = $this->input->post('email');
        $username = $this->input->post('username');
        $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);

        $data = array(
            'namaSiswa'  => $namaSiswa,
            'noHp'      => $noHp,
            'alamat'    => $alamat,
            'email'    => $email,
            'username'  => $username,
            'password' => $password

        );
        // var_dump($idSiswa);
        // die();
        $this->SiswaModel->update($data, $idSiswa);

        $jadwal = $this->db->get_where('jadwal', ['idSiswa' => $idSiswa])->result();
        for ($i = 0; $i < count($jadwal); $i++) {
            $id = $jadwal[$i]->idJadwal;
            $this->JadwalModel->update(['namaSiswa' => $namaSiswa], $id);
        }
        redirect('siswa/profile');
    }
}
