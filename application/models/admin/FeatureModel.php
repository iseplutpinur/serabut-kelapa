<?php
defined('BASEPATH') or exit('No direct script access allowed');

class FeatureModel extends Render_Model
{
    public function getAllData($draw = null, $show = null, $start = null, $cari = null, $order = null)
    {
        $this->db->select("a.*,
        IF(a.status = '0' , 'Tidak Dipakai', IF(a.status = '1' , 'Dipakai', 'Tidak Diketahui')) as status_str");
        $this->db->from("feature a");
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
                a.foto LIKE '%$cari%' or
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

    public function insert($user_id, $nama, $foto, $status, $keterangan)
    {
        $data = [
            'nama' => $nama,
            'foto' => $foto,
            'keterangan' => $keterangan,
            'status' => $status,
            'created_by' => $user_id,
        ];

        // Insert users
        $execute = $this->db->insert('feature', $data);
        $execute = $this->db->insert_id();
        return $execute;
    }

    public function update($id, $user_id, $nama, $foto, $status, $keterangan)
    {
        $data = [
            'nama' => $nama,
            'foto' => $foto,
            'status' => $status,
            'keterangan' => $keterangan,
            'updated_by' => $user_id,
        ];
        // Update users
        $execute = $this->db->where('id', $id);
        $execute = $this->db->update('feature', $data);
        return  $execute;
    }

    public function delete($id)
    {
        // Delete users
        $exe = $this->db->where('id', $id)->delete('feature');
        return $exe;
    }

    public function getList()
    {
        return $this->db->select('id, nama as text')
            ->from('feature')
            ->where('status', 1)
            ->get()->result_array();
    }

    public function getData($id)
    {
        return $this->db->get_where('feature', ['id' => $id])->row_array();
    }
}
