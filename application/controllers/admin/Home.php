<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends Render_Controller
{
    public function index()
    {
        $this->data['logo'] = $this->key_get($this->key_home_logo);
        $this->data['judul_utama'] = $this->key_get($this->key_home_judul_utama);
        $this->data['sub_judul'] = $this->key_get($this->key_home_sub_judul);
        $this->data['btn_title'] = $this->key_get($this->key_home_btn_title);
        $this->data['btn_link'] = $this->key_get($this->key_home_btn_link);
        $this->data['foto_jumbotron'] = $this->key_get($this->key_home_foto_jumbotron);
        $this->data['show'] = $this->key_get($this->key_home_show);

        // Page Settings
        $this->title = 'Home';
        $this->navigation = ['Home'];
        $this->title_show = false;
        $this->breadcrumb_show = false;
        $this->plugins = ['icheck'];

        // Breadcrumb setting
        $this->breadcrumb_1 = 'Home';
        $this->breadcrumb_1_url = base_url() . 'admin/home';
        $this->breadcrumb_3 = 'Home';
        $this->breadcrumb_3_url = '#';

        // content
        $this->content      = 'admin/home';

        // Send data to view
        $this->render();
    }

    public function update()
    {
        // simpan logo
        $temp_logo = $this->input->post("temp_logo");
        if (isset($_FILES['logo'])) {
            if ($_FILES['logo']['name'] != '') {
                $logo = $this->uploadImage('logo');
                if ($logo['status']) {
                    $logo = $logo['data'];
                    $this->deleteFile($temp_logo);
                } else {
                    $logo = $temp_logo;
                }
            } else {
                $logo = $temp_logo;
            }
        }


        $show = $this->input->post('show_logo') == null ? 0 : 1;
        $logo = $this->key_set($this->key_home_logo, $logo, $show);

        // judul utama
        $main = $this->input->post('main_judul_utama');
        $show = $this->input->post('show_judul_utama') == null ? 0 : 1;
        $judul_utama = $this->key_set($this->key_home_judul_utama, $main, $show);

        // sub judul
        $main = $this->input->post('main_sub_judul');
        $show = $this->input->post('show_sub_judul') == null ? 0 : 1;
        $sub_judul = $this->key_set($this->key_home_sub_judul, $main, $show);

        // sub judul
        $main = $this->input->post('main_btn_link');
        $btn_link = $this->key_set($this->key_home_btn_link, $main, null);

        // foto jumbotron
        $temp_jumbotron = $this->input->post("temp_jumbotron");
        if (isset($_FILES['jumbotron'])) {
            if ($_FILES['jumbotron']['name'] != '') {
                $jumbotron = $this->uploadImage('jumbotron');
                if ($jumbotron['status']) {
                    $jumbotron = $jumbotron['data'];
                    $this->deleteFile($temp_jumbotron);
                } else {
                    $jumbotron = $temp_jumbotron;
                }
            } else {
                $jumbotron = $temp_jumbotron;
            }
        }
        $show = $this->input->post('show_foto_jumbotron') == null ? 0 : 1;
        $foto_jumbotron = $this->key_set($this->key_home_foto_jumbotron, $jumbotron, $show);

        // tombol title
        $main = $this->input->post('main_btn_title', false);
        $show = $this->input->post('show_btn_title') == null ? 0 : 1;
        $btn_title = $this->key_set($this->key_home_btn_title, $main, $show);

        // perlihatkan konten
        $show_content = $this->key_set($this->key_home_show, $this->input->post('show_content') == null ? 0 : 1, null);

        $result = $show_content && $logo && $judul_utama && $sub_judul && $foto_jumbotron && $btn_title && $btn_link;
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
        $this->photo_path = './files/image/home/';
        $this->default_template = 'templates/dashboard';
        $this->load->library('plugin');
        $this->load->helper('url');
    }
}
