<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kontak extends Render_Controller
{
    public function index()
    {
        // data
        $this->data['judul'] = $this->key_get($this->key_kontak_judul);
        $this->data['sub_judul'] = $this->key_get($this->key_kontak_sub_judul);
        $this->data['show'] = $this->key_get($this->key_kontak_show);

        // Page Settings
        $this->title = 'Kontak';
        $this->navigation = ['Kontak'];
        $this->title_show = false;
        $this->breadcrumb_show = false;
        $this->plugins = ['icheck', 'datatables'];

        // Breadcrumb setting
        $this->breadcrumb_1 = 'Home';
        $this->breadcrumb_1_url = base_url() . 'admin/home';
        $this->breadcrumb_3 = 'Kontak';
        $this->breadcrumb_3_url = '#';

        // content
        $this->content      = 'admin/kontak';

        // Send data to view
        $this->render();
    }

    public function update()
    {
        // judul
        $main = $this->input->post('main_judul');
        $show = $this->input->post('show_judul') == null ? 0 : 1;
        $judul = $this->key_set($this->key_kontak_judul, $main, $show);

        // judul
        $main = $this->input->post('main_sub_judul');
        $show = $this->input->post('show_sub_judul') == null ? 0 : 1;
        $sub_judul = $this->key_set($this->key_kontak_sub_judul, $main, $show);

        // perlihatkan konten
        $show_content = $this->key_set($this->key_kontak_show, $this->input->post('show_content') == null ? 0 : 1, null);

        $result = $show_content &&  $judul && $sub_judul;
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
        $this->photo_path = './files/image/kontak/';
        $this->load->model("admin/KontakModel", 'model');
        $this->default_template = 'templates/dashboard';
        $this->load->library('plugin');
        $this->load->helper('url');
    }
}
