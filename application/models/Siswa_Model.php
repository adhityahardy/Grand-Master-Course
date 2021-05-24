<!-- <?php
// class siswaModel extends CI_Model
// {
//     public function createSiswa($data)
//     {
//         $result = $this->db->insert('siswa', $data);
//         return $result;
//     }
//     public function updateSiswa($idSiswa, $data)
//     {
//         $this->db->where('idSiswa', $idSiswa);
//         $result = $this->db->update('siswa', $data);
//         return $result;
//     }
//     public function getNamaSiswa($idSiswa)
//     {
//         $this->db->select('namaSiswa');
//         $this->db->from('siswa');
//         $this->db->where('idSiswa', $idSiswa);
//         $result = $this->db->get()->result_array();
//         return $result;
//     }
//     public function getSiswa($idSiswa)
//     {
//         $this->db->where('idSiswa', $idSiswa);
//         $result = $this->db->get('siswa')->row_array();
//         return $result;
//     }
//     public function getAllSiswa()
//     {
//         $result = $this->db->get('siswa')->result_array();
//         return $result;
//     }
//     public function deleteSiswa($idSiswa)
//     {
//         $this->db->where('idSiswa', $idSiswa);
//         return $this->db->delete('siswa');
//     }
// <?php
// defined('BASEPATH') or exit('No direct script access allowed');

// class Siswa extends CI_Model
// {
//     public function getAllMatpel()
//     {
//         $query = $this->db->get('matpel');
//         return $query->result_array();
//     }

//     public function getAllJadwal()
//     {
//         $query = $this->db->get('jadwal');
//         return $query->result_array();
//     }
// }

// }
