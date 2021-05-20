<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Model
{
    public function getAllMatpel()
    {
        $query = $this->db->get('matpel');
        return $query->result_array();
    }

    public function getAllJadwal()
    {
        $query = $this->db->get('jadwal');
        return $query->result_array();
    }
}
