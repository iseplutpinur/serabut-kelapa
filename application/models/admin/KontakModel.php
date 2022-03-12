<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KontakModel extends Render_Model
{
    public function getAllData($draw = null, $show = null, $start = null, $cari = null, $order = null)
    {
        $this->db->select("*");
        $this->db->from("pesan_masuk a");

        // order by
        if ($order['order'] != null) {
            $columns = $order['columns'];
            $dir = $order['order'][0]['dir'];
            $order = $order['order'][0]['column'];
            $columns = $columns[$order];

            $order_colum = $columns['data'];
            $this->db->order_by($order_colum, $dir);
        }

        // initial data table
        if ($draw == 1) {
            $this->db->limit(10, 0);
        }

        // pencarian
        if ($cari != null) {
            $this->db->where("(
                a.nama LIKE '%$cari%' or
                a.email LIKE '%$cari%' or
                a.pesan LIKE '%$cari%'
            )");
        }

        // pagination
        if ($show != null && $start != null) {
            $this->db->limit($show, $start);
        }

        $result = $this->db->get();
        return $result;
    }

    public function delete($id)
    {
        // Delete users
        $exe = $this->db->where('id', $id)->delete('pesan_masuk');
        return $exe;
    }

    public function getList()
    {
        return $this->db->select('id, nama as text')
            ->from('pesan_masuk')
            ->where('status', 1)
            ->get()->result_array();
    }

    public function getData($id)
    {
        return $this->db->get_where('pesan_masuk', ['id' => $id])->row_array();
    }
}
