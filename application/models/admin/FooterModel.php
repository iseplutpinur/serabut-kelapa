<?php
defined('BASEPATH') or exit('No direct script access allowed');

class FooterModel extends Render_Model
{
    public function getAllData($draw = null, $show = null, $start = null, $cari = null, $order = null)
    {
        $this->db->select("a.*,
        IF(a.status = '0' , 'Tidak Dipakai', IF(a.status = '1' , 'Dipakai', 'Tidak Diketahui')) as status_str");
        $this->db->from("footer_sosmed a");
        $this->db->where('a.status <>', 3);

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
                a.icon LIKE '%$cari%' or
                a.link LIKE '%$cari%' or
                IF(a.status = '0' , 'Tidak Dipakai', IF(a.status = '1' , 'Dipakai', 'Tidak Diketahui')) LIKE '%$cari%'
            )");
        }

        // pagination
        if ($show != null && $start != null) {
            $this->db->limit($show, $start);
        }

        $result = $this->db->get();
        return $result;
    }

    public function insert($user_id, $nama, $icon, $status, $link)
    {
        $data = [
            'nama' => $nama,
            'icon' => $icon,
            'link' => $link,
            'status' => $status,
            'created_by' => $user_id,
        ];

        // Insert users
        $execute = $this->db->insert('footer_sosmed', $data);
        $execute = $this->db->insert_id();
        return $execute;
    }

    public function update($id, $user_id, $nama, $icon, $status, $link)
    {
        $data = [
            'nama' => $nama,
            'icon' => $icon,
            'status' => $status,
            'link' => $link,
            'updated_by' => $user_id,
        ];
        // Update users
        $execute = $this->db->where('id', $id);
        $execute = $this->db->update('footer_sosmed', $data);
        return  $execute;
    }

    public function delete($id)
    {
        // Delete users
        $exe = $this->db->where('id', $id)->delete('footer_sosmed');
        return $exe;
    }

    public function getList()
    {
        return $this->db->select('id, nama as text')
            ->from('footer_sosmed')
            ->where('status', 1)
            ->get()->result_array();
    }

    public function getData($id)
    {
        return $this->db->get_where('footer_sosmed', ['id' => $id])->row_array();
    }
}
