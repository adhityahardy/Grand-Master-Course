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


        $data["list_data"] = $this->AdminModel->getData();
        $this->load->view('/menuadmin/adminheader', $data);
        $this->load->view('/menuadmin/listmatpel', $data);
        $this->load->view('/menuadmin/adminfooter', $data);
    }

    public function createGuru()
    {
        $nama = $this->input->post('namaGuru');
        $nohp = $this->input->post('nohp');
        $alamat = $this->input->post('alamat');
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $data = array(
            'namaGuru'  => $nama,
            'nohp'      => $nohp,
            'alamat'    => $alamat,
            'username'  => $username,
            'password'  => $password,
        );
        $this->GuruModel->insert($data, 'guru');
        redirect('admin/index');
    }

    public function delete()
    {
        $id = $this->input->get('id');
        $delete = $this->GuruModel->delete($id);
        if ($delete) {
            redirect(base_url('admin/listguru'));
        } else {
        }
        redirect('admin/index');
    }
}
