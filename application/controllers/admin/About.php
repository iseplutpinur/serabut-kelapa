<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends Render_Controller
{
    public function index()
    {
        // data
        $this->data['judul'] = $this->key_get($this->key_about_judul);
        $this->data['detail'] = $this->key_get($this->key_about_detail);
        $this->data['foto'] = $this->key_get($this->key_about_foto);
        $this->data['show'] = $this->key_get($this->key_about_show);

        // Page Settings
        $this->title = 'About';
        $this->navigation = ['About Us'];
        $this->title_show = false;
        $this->breadcrumb_show = false;
        $this->plugins = ['summernote', 'icheck'];

        // Breadcrumb setting
        $this->breadcrumb_1 = 'Home';
        $this->breadcrumb_1_url = base_url() . 'admin/home';
        $this->breadcrumb_3 = 'About';
        $this->breadcrumb_3_url = '#';

        // content
        $this->content      = 'admin/about';

        // Send data to view
        $this->render();
    }

    public function update()
    {
        // simpan foto
        $temp_foto = $this->input->post("temp_foto");
        if (isset($_FILES['foto'])) {
            if ($_FILES['foto']['name'] != '') {
                $foto = $this->uploadImage('foto');
                if ($foto['status']) {
                    $foto = $foto['data'];
                    $this->deleteFile($temp_foto);
                } else {
                    $foto = $temp_foto;
                }
            } else {
                $foto = $temp_foto;
            }
        }

        $show = $this->input->post('show_foto') == null ? 0 : 1;
        $foto = $this->key_set($this->key_about_foto, $foto, $show);

        // judul
        $main = $this->input->post('main_judul');
        $show = $this->input->post('show_judul') == null ? 0 : 1;
        $judul = $this->key_set($this->key_about_judul, $main, $show);

        // detail
        $main = $this->input->post('main_detail',  false);
        $show = $this->input->post('show_detail') == null ? 0 : 1;
        $detail = $this->key_set($this->key_about_detail, $main, $show);

        // perlihatkan konten
        $show_content = $this->key_set($this->key_about_show, $this->input->post('show_content') == null ? 0 : 1, null);

        $result = $show_content && $foto && $judul && $detail;
        $this->output_json($result);
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
        $this->photo_path = './files/image/about/';
        $this->default_template = 'templates/dashboard';
        $this->load->library('plugin');
        $this->load->helper('url');
    }
}
