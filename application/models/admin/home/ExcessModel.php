<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ExcessModel extends Render_Model
{
    public function getAllData($draw = null, $show = null, $start = null, $cari = null, $order = null)
    {
        $level = $this->config->item('level_mentor');
        // select tabel
        $this->db->select("a.*,
        IF(a.status = '0' , 'Tidak Aktif', IF(a.status = '1' , 'Aktif', 'Tidak Diketahui')) as status_str,
        ( select count(*) from product_color_detail z where z.color_id  = a.id and z.status = 1 ) as color_product
        ");
        $this->db->from("home_excess a");
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
                a.column LIKE '%$cari%' or
                a.title LIKE '%$cari%' or
                a.description LIKE '%$cari%' or
                IF(a.status = '0' , 'Tidak Aktif', IF(a.status = '1' , 'Aktif', 'Tidak Diketahui')) LIKE '%$cari%'
            )");
        }

        // pagination
        if ($show != null && $start != null) {
            $this->db->limit($show, $start);
        }

        $result = $this->db->get();
        return $result;
    }

    public function insert($user_id,  $title, $foto, $column,  $description, $status)
    {
        $data = [
            'title' => $title,
            'description' => $description,
            'status' => $status,
            'foto' => $foto,
            'column' => $column,
            'created_by' => $user_id,
        ];
        // Insert users
        $execute = $this->db->insert('home_excess', $data);
        $execute = $this->db->insert_id();
        return $execute;
    }

    public function update($id, $user_id,  $title, $foto, $column,  $description, $status)
    {
        $data = [
            'title' => $title,
            'description' => $description,
            'status' => $status,
            'foto' => $foto,
            'column' => $column,
            'updated_by' => $user_id,
        ];
        // Update users
        $execute = $this->db->where('id', $id);
        $execute = $this->db->update('home_excess', $data);
        return  $execute;
    }

    public function delete($user_id, $id)
    {
        // Delete users
        $exe = $this->db->where('id', $id)->update('home_excess', [
            'status' => 3,
            'deleted_by' => $user_id,
            'deleted_at' => Date("Y-m-d H:i:s", time())
        ]);
        return $exe;
    }

    public function getList()
    {
        return $this->db->select('id, nama as text')
            ->from('home_excess')
            ->where('status', 1)
            ->get()->result_array();
    }
}
