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
        $this->load->model('MatpelModel');
        $this->load->model('JadwalModel');
        $this->load->model('SiswaModel');
    }
    public function index()
    {
        #$data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
        #echo 'WELKAM' . $data['admin']['username'];


        $data['title'] = 'GM Course admin';
        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
        // $data['guru']  = $this->GuruModel->getData()->result();
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

    public function listmatpel()
    {
        #$data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
        #echo 'WELKAM' . $data['admin']['username'];


        $data['title'] = 'GM Course admin';
        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();

        $data['guru'] = $this->GuruModel->getData();
        $data["list_data"] = $this->MatpelModel->getData();
        $this->load->view('/menuadmin/adminheader', $data);
        $this->load->view('/menuadmin/listmatpel', $data);
        $this->load->view('/menuadmin/adminfooter', $data);
    }

    public function listjadwal()
    {
        #$data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
        #echo 'WELKAM' . $data['admin']['username'];


        $data['title'] = 'GM Course admin';
        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['siswa'] = $this->SiswaModel->getData();
        $data['guru'] = $this->GuruModel->getData();
        $data['matpel'] = $this->MatpelModel->getData();
        $data["list_data"] = $this->JadwalModel->getData();
        $this->load->view('/menuadmin/adminheader', $data);
        $this->load->view('/menuadmin/listjadwal', $data);
        $this->load->view('/menuadmin/adminfooter', $data);
    }

    public function getGuruByMatpel($namaMatpel)
    {
        //var_dump($namaMatpel);
        //$data['selectedMatpel'] = $namaMatpel;
        $data['selectedMatpel'] = '';
        $con['conditions'] = array(
            'namaMatpel' => $namaMatpel,
        );
        $listmatpel = $this->MatpelModel->getData($con);

        foreach ($listmatpel as $matpel) :
            //if ($matpel['namaMatpel'] == $namaMatpel) {
            $data['selectedMatpel'] .=  '<option value="' . $matpel['namaGuru'] . '">' . $matpel['namaGuru'] . '</option>';
        //}
        endforeach;
        print_r(json_encode($data));
        //$data = $this->;
        //die();
        //return json_encode($namaMatpel);
    }

    public function listsiswa()
    {
        #$data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
        #echo 'WELKAM' . $data['admin']['username'];


        $data['title'] = 'GM Course admin';
        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();


        $data["list_data"] = $this->SiswaModel->getData();
        $this->load->view('/menuadmin/adminheader', $data);
        $this->load->view('/menuadmin/listsiswa', $data);
        $this->load->view('/menuadmin/adminfooter', $data);
    }

    public function createAdmin()
    {
        $namaAdmin = $this->input->post('namaAdmin');
        $username = $this->input->post('username');
        $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
        $data = array(
            'namaAdmin'  => $namaAdmin,
            'username'  => $username,
            'password' => $password
        );
        var_dump($data);
        $this->AdminModel->insert($data);
        redirect('admin/listadmin');
    }

    public function createGuru()
    {
        $namaGuru = $this->input->post('namaGuru');
        $noHp = $this->input->post('noHp');
        $alamat = $this->input->post('alamat');
        $username = $this->input->post('username');
        $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);

        $data = array(
            'namaGuru'  => $namaGuru,
            'noHp'      => $noHp,
            'alamat'    => $alamat,
            'username'  => $username,
            'password'  => $password,
        );
        $this->GuruModel->insert($data, 'guru');
        redirect('admin/listguru');
    }

    public function createSiswa()
    {
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
        $this->SiswaModel->insert($data, 'siswa');
        redirect('admin/listsiswa');
    }

    public function createMatpel()
    {
        $namaMatpel = $this->input->post('namaMatpel');
        $idGuru = $this->input->post('idGuru');
        $listguru = $this->GuruModel->getData();
        foreach ($listguru as $guru) {
            if ($idGuru == $guru['idGuru']) {
                $namaGuru = $guru['namaGuru'];
            }
        }
        //$namaGuru = $this->db->get_where('guru', $cari)->row_array();
        $data = array(
            'namaMatpel'  => $namaMatpel,
            'idGuru'    => $idGuru,
            'namaGuru'    => $namaGuru,
        );
        $this->MatpelModel->insert($data, 'matpel');
        redirect('admin/listmatpel');
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
        $idSiswa = $this->input->post('idSiswa');
        $accJadwal = 1;
        $cari = array(
            'namaMatpel' => $namaMatpel,
            'namaGuru' => $namaGuru
        );
        $query = $this->db->get_where('matpel', $cari)->row_array();
        $idMatpel = $query['idMatpel'];
        $idGuru = $query['idGuru'];
        //$namaSiswa = $this->db->get_where('siswa', ['idSiswa' => $idSiswa]);

        $con['conditions'] = array(
            'idSiswa' => $idSiswa,
        );
        $siswa = $this->SiswaModel->getData($con)[0];
        $namaSiswa = $siswa['namaSiswa'];
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
        $this->JadwalModel->insert($data, 'jadwal');
        redirect('admin/listjadwal');
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

    public function deleteAdmin()
    {
        $id = $this->input->get('id');
        $delete = $this->AdminModel->delete($id);
        if ($delete) {
            redirect(base_url('admin/listadmin'));
        } else {
        }
    }
    public function deleteGuru()
    {
        $id = $this->input->get('id');
        $delete = $this->GuruModel->delete($id);

        //aditional
        $matpel = $this->db->get_where('matpel', ['idGuru' => $id])->result();
        for ($i = 0; $i < count($matpel); $i++) {
            $idDel = $matpel[$i]->idMatpel;
            $this->MatpelModel->delete($idDel);
        }
        if ($delete) {
            redirect(base_url('admin/listguru'));
        } else {
        }
    }

    public function deleteMatpel()
    {
        $id = $this->input->get('id');
        $delete = $this->MatpelModel->delete($id);
        if ($delete) {
            redirect(base_url('admin/listmatpel'));
        } else {
        }
    }

    public function deleteJadwal()
    {
        $id = $this->input->get('id');
        $delete = $this->JadwalModel->delete($id);
        if ($delete) {
            redirect(base_url('admin/listjadwal'));
        } else {
        }
    }

    public function deleteSiswa()
    {
        $id = $this->input->get('id');
        $delete = $this->SiswaModel->delete($id);
        if ($delete) {
            redirect(base_url('admin/listsiswa'));
        } else {
        }
    }

    public function editSiswa()
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
        //var_dump($data);
        //die();
        $this->SiswaModel->update($data, $idSiswa);

        $jadwal = $this->db->get_where('jadwal', ['idSiswa' => $idSiswa])->result();
        for ($i = 0; $i < count($jadwal); $i++) {
            $id = $jadwal[$i]->idJadwal;
            $this->JadwalModel->update(['namaSiswa' => $namaSiswa], $id);
        }
        redirect('admin/listsiswa');
    }

    public function editAdmin()
    {
        $idAdmin = $this->input->post('idAdmin');
        $namaAdmin = $this->input->post('namaAdmin');

        $username = $this->input->post('username');
        $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
        $data = array(
            'namaAdmin'  => $namaAdmin,
            'username'  => $username,
            'password' => $password
        );
        //var_dump($data);
        //die();
        $this->AdminModel->update($data, $idAdmin);
        redirect('admin/listadmin');
    }
    public function editGuru()
    {
        $idGuru = $this->input->post('idGuru');
        $namaGuru = $this->input->post('namaGuru');
        $noHp = $this->input->post('noHp');
        $alamat = $this->input->post('alamat');
        $username = $this->input->post('username');
        $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
        $data = array(
            'namaGuru'  => $namaGuru,
            'noHp'      => $noHp,
            'alamat'    => $alamat,
            'username'  => $username,
            'password'  => $password
        );
        // var_dump($data);
        // die();
        $this->GuruModel->update($data, $idGuru);

        //additional
        $matpel = $this->db->get_where('matpel', ['idGuru' => $idGuru])->result();
        for ($i = 0; $i < count($matpel); $i++) {
            $id = $matpel[$i]->idMatpel;
            $this->MatpelModel->update(['namaGuru' => $namaGuru], $id);
        }

        $jadwal = $this->db->get_where('jadwal', ['idGuru' => $idGuru])->result();
        for ($i = 0; $i < count($jadwal); $i++) {
            $id = $jadwal[$i]->idJadwal;
            $this->JadwalModel->update(['namaGuru' => $namaGuru], $id);
        }

        //var_dump(count($matpel));
        //die();
        //$this->MatpelModel->update();
        redirect('admin/listguru');
    }
    public function editMatpel()
    {
        $idMatpel = $this->input->post('idMatpel');
        $namaMatpel = $this->input->post('namaMatpel');
        $idGuru = $this->input->post('idGuru');
        $con['conditions'] = array(
            'idGuru' => $idGuru,
        );
        $guru = $this->GuruModel->getData($con)[0];
        $namaGuru = $guru['namaGuru'];
        $data = array(
            'namaMatpel'  => $namaMatpel,
            'idGuru' => $idGuru,
            'namaGuru' => $namaGuru
        );
        //var_dump($data);
        //die();
        $this->MatpelModel->update($data, $idMatpel);
        redirect('admin/listmatpel');
    }

    public function editJadwal()
    {
        $idJadwal = $this->input->post('idJadwal');
        $tanggalJadwal = $this->input->post('tanggalJadwal');
        $jamJadwal = $this->input->post('jamJadwal');
        $namaMatpel = $this->input->post('namaMatpel');
        $namaGuru = $this->input->post('namaGuru');
        $idSiswa = $this->input->post('idSiswa');

        $cari = array(
            'namaMatpel' => $namaMatpel,
            'namaGuru' => $namaGuru
        );
        $query = $this->db->get_where('matpel', $cari)->row_array();
        $idMatpel = $query['idMatpel'];
        $idGuru = $query['idGuru'];
        //$namaSiswa = $this->db->get_where('siswa', ['idSiswa' => $idSiswa]);

        $con['conditions'] = array(
            'idSiswa' => $idSiswa,
        );
        $siswa = $this->SiswaModel->getData($con)[0];
        $namaSiswa = $siswa['namaSiswa'];
        //var_dump($siswa);
        $data = array(
            'tanggalJadwal'  => $tanggalJadwal,
            'jamJadwal'      => $jamJadwal,
            'idMatpel '     => $idMatpel,
            'idGuru '       => $idGuru,
            'idSiswa'  => $idSiswa,
            'namaMatpel'    => $namaMatpel,
            'namaGuru'    => $namaGuru,
            'namaSiswa' => $namaSiswa
        );
        //var_dump($data);
        //die();
        $this->JadwalModel->update($data, $idJadwal);
        redirect('admin/listjadwal');
    }
    /*
    function editSiswaView()
    {
        $id = $this->uri->segment(3);
        $e = $this->db->where('idSiswa', $id)->get('Siswa')->row();

        $kirim['idSiswa'] = $e->idSiswa;
        //$kirim['nama'] = $e->nama;
        //$kirim['alamat'] = $e->alamat;

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($kirim));
    }*/
}
