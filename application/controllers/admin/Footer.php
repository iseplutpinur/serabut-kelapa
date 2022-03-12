<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Footer extends Render_Controller
{
    public function index()
    {
        // data
        $this->data['show'] = $this->key_get($this->key_footer_show);
        $this->data['alamat'] = $this->key_get($this->key_footer_alamat);
        $this->data['copyright_crud'] = $this->key_get($this->key_footer_copyright);

        // Page Settings
        $this->title = 'Footer';
        $this->navigation = ['Footer'];
        $this->title_show = false;
        $this->breadcrumb_show = false;
        $this->plugins = ['icheck', 'datatables'];

        // Breadcrumb setting
        $this->breadcrumb_1 = 'Home';
        $this->breadcrumb_1_url = base_url() . 'admin/home';
        $this->breadcrumb_3 = 'Footer';
        $this->breadcrumb_3_url = '#';

        // content
        $this->content      = 'admin/footer';

        // Send data to view
        $this->render();
    }

    public function update()
    {
        // alamat
        $main = $this->input->post('main_alamat');
        $show = $this->input->post('show_alamat') == null ? 0 : 1;
        $alamat = $this->key_set($this->key_footer_alamat, $main, $show);

        // copyright
        $main = $this->input->post('main_copyright');
        $show = $this->input->post('show_copyright') == null ? 0 : 1;
        $copyright = $this->key_set($this->key_footer_copyright, $main, $show);

        // perlihatkan konten
        $show_content = $this->key_set($this->key_footer_show, $this->input->post('show_content') == null ? 0 : 1, null);

        $result = $show_content &&  $alamat && $copyright;
        $this->output_json($result);
    }

    public function ajax_data()
    {
        $order = ['order' => $this->input->post('order'), 'columns' => $this->input->post('columns')];
        $start = $this->input->post('start');
        $draw = $this->input->post('draw');
        $draw = $draw == null ? 1 : $draw;
        $length = $this->input->post('length');
        $cari = $this->input->post('search');

        if (isset($cari['value'])) {
            $_cari = $cari['value'];
        } else {
            $_cari = null;
        }

        $data = $this->model->getAllData($draw, $length, $start, $_cari, $order)->result_array();
        $count = $this->model->getAllData(null, null, null, $_cari, $order, null)->num_rows();

        $this->output_json(['recordsTotal' => $count, 'recordsFiltered' => $count, 'draw' => $draw, 'search' => $_cari, 'data' => $data]);
    }

    public function insert_foto()
    {
        $this->db->trans_start();
        $nama = $this->input->post("nama");
        $status = $this->input->post("status");
        $icon = $this->input->post("icon");
        $link = $this->input->post("link");
        $user_id = $this->id;
        $result = $this->model->insert($user_id, $nama, $icon, $status, $link);

        $this->db->trans_complete();
        $code = $result ? 200 : 500;
        $this->output_json(["data" => $result], $code);
    }

    public function update_foto()
    {
        $id = $this->input->post("id");
        $nama = $this->input->post("nama");
        $status = $this->input->post("status");
        $icon = $this->input->post("icon");
        $link = $this->input->post("link");
        $user_id = $this->id;
        $result = $this->model->update($id, $user_id, $nama, $icon, $status, $link);
        $code = $result ? 200 : 500;
        $this->output_json(["data" => $result], $code);
    }

    public function delete_foto()
    {
        $id = $this->input->post("id");
        $result = $this->model->delete($id);
        $code = $result ? 200 : 500;
        $this->output_json(["data" => $result], $code);
    }

    function __construct()
    {
        parent::__construct();
        $this->sesion->cek_session();
        $akses = ['Super Admin'];
        $get_lv = $this->session->userdata('data')['level'];
        if (!in_array($get_lv, $akses)) {
            redirect('my404', 'refresh');
        }
        $this->id = $this->session->userdata('data')['id'];
        $this->photo_path = './files/image/footer/';
        $this->load->model("admin/FooterModel", 'model');
        $this->default_template = 'templates/dashboard';
        $this->load->library('plugin');
        $this->load->helper('url');
    }
}
