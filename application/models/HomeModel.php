<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeModel extends CI_Model
{
    public function insertPesan($nama, $email, $pesan, $user_id = null)
    {
        $data = [
            'nama' => $nama,
            'email' => $email,
            'pesan' => $pesan,
            'created_by' => $user_id,
        ];

        // Insert users
        $execute = $this->db->insert('pesan_masuk', $data);
        $execute = $this->db->insert_id();
        return $execute;
    }
}
