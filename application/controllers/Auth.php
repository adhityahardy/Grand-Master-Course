<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        #echo 'AUTH NI BOSS';
        //$this->session->set_flashdata('message','');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if ($this->form_validation->run() == false) {
            #$this->session->set_flashdata('message', '');
            $data['title'] = 'GM Course Login';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            //success validation
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $passwordhash = password_hash($password, PASSWORD_DEFAULT);
        $user = $this->db->get_where('admin', ['username' => $username])->row_array();
        #$user = $this->db->get_where('guru', ['username' => $username])->row_array();
        #var_dump($user);
        #var_dump($password);
        #var_dump($passwordhash);
        #if($user['pass'])
        #die;
        if ($user) {

            #if ($user['password'] == $password) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'username' => $user['username']

                ];
                $this->session->set_userdata($data);
                #redirect('siswa');
                redirect('admin');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> wrong password.</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> username not found.</div>');
            redirect('auth');
        }
    }

    public function registration()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules(
            'username',
            'Username',
            'required|trim|is_unique[siswa.username]',
            ['is_unique' => 'username already registered']
        );
        $this->form_validation->set_rules(
            'email',
            'Email',
            'required|trim|valid_email|is_unique[siswa.email]',
            ['is_unique' => 'email already registered']
        );
        $this->form_validation->set_rules(
            'password1',
            'Password',
            'required|trim|min_length[6]|matches[password2]',
            [
                'matches' => 'password not match',
                'min_length' => 'Password must be at least 6 characters'

            ]
        );
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'GM Course | Registration';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('templates/auth_footer');
        } else {
            $data = [
                'namaSiswa' => htmlspecialchars($this->input->post('name', true)),
                'noHp' => htmlspecialchars($this->input->post('nohp', true)),
                'alamat' => $this->input->post('alamat'),
                'email' => $this->input->post('email'),
                'username' => $this->input->post('username'),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),

            ];
            $this->db->insert('siswa', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Yeay! yout account has been created. Please login</div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        // $this->session->unset_userdata('username');
        // $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        //     Logout success</div>');
        // redirect('auth');
        $this->session->sess_destroy();
        redirect(base_url());
    }
}
