<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeModel extends CI_Model
{
    public function insertPesan($first_name, $last_name, $subject, $email, $message, $user_id = null)
    {
        $data = [
            'first_name' => $first_name,
            'last_name' => $last_name,
            'subject' => $subject,
            'email' => $email,
            'message' => $message,
            'created_by' => $user_id,
        ];

        // Insert users
        $execute = $this->db->insert('pesan_masuk', $data);
        $execute = $this->db->insert_id();
        return $execute;
    }

    public function footer_sosmed()
    {
        return $this->db->get_where('footer_sosmed', ['status' => 1])->result_array();
    }

    // no whatsapp
    public function getNoWhatsapp()
    {
        $result = '0';
        $get = $this->db->select('number')->from('whatsapp')->where('status', 1)->get()->row_array();
        if ($get != null) {
            $result = '+62' . $get['number'];
        }
        return $result;
    }

    public function getGalery()
    {
        return $this->db->get_where('galeri', ['status' => 1])->result_array();
    }

    public function getFeature()
    {
        return $this->db->get_where('feature', ['status' => 1])->result_array();
    }

    public function getProduk()
    {
        return $this->db->get_where('produk', ['status' => 1])->result_array();
    }

    public function getTestimoni()
    {
        return $this->db->get_where('testimoni', ['status' => 1])->result_array();
    }

    public function getTeam()
    {
        return $this->db->get_where('team', ['status' => 1])->result_array();
    }
}
