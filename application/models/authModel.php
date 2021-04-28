<!-- <?php
// class authModel extends CI_Model 
// {
//     public function login($data)
//     {
//         $result = $this->db->get_where('siswa', ['username' => $data['username']])->row_array();
//         if ($result) {
//             if (password_verify($data['password'], $result['password'])) {
//                 $user = [
//                     'idSiswa' => $result['idSiswa'],
//                     'username' => $result['username'],
//                     'namaSiswa' => $result['name'],
//                     'idRole' => $result['idRole']
//                 ];
//                 $this->session->set_userdata($user);
//                 if ($user['idRole'] == 1) {
//                     redirect('guru');
//                 } else if ($user['role_id'] == 2) {
//                     redirect('siswa');
//                 } else {
//                     redirect('admin');
//                 }
//             } else {
//                 return false;
//             }
//         } else {
//             return false;
//         }
//     }

//     public function createGuru()
//     {
//         $data = [
//             'name' => htmlspecialchars($this->input->post('name', true)),
//             'username' => htmlspecialchars($this->input->post('username', true)),
//             'email' => htmlspecialchars($this->input->post('email', true)),
//             'password' => password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
//             'role_id' => 1
//         ];
//         $this->db->insert('guru', $data);
//     }
// }
