<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengaturan extends Render_Controller
{
    public function index()
    {
        $this->data['title_peng'] = $this->key_get($this->key_pengaturan_title);
        $this->data['deskripsi_peng'] = $this->key_get($this->key_pengaturan_deskripsi);
        $this->data['icon_peng'] = $this->key_get($this->key_pengaturan_icon);

        // Page Settings
        $this->title = 'Pengaturan';
        $this->navigation = ['Home'];
        $this->title_show = false;
        $this->breadcrumb_show = false;
        $this->plugins = ['icheck'];

        // Breadcrumb setting
        $this->breadcrumb_1 = 'Home';
        $this->breadcrumb_1_url = base_url() . 'admin/pengaturan';
        $this->breadcrumb_3 = 'Pengaturan';
        $this->breadcrumb_3_url = '#';

        // content
        $this->content      = 'admin/pengaturan';

        // Send data to view
        $this->render();
    }

    public function update()
    {
        // simpan icon
        $temp_icon = $this->input->post("temp_icon");
        if (isset($_FILES['icon'])) {
            if ($_FILES['icon']['name'] != '') {
                $icon = $this->uploadImage('icon');
                if ($icon['status']) {
                    $icon = $icon['data'];
                    $this->deleteFile($temp_icon);
                } else {
                    $icon = $temp_icon;
                }
            } else {
                $icon = $temp_icon;
            }
        }

        // foto favicon
        $temp_favicon = $this->input->post("temp_favicon");
        if (isset($_FILES['favicon'])) {
            if ($_FILES['favicon']['name'] != '') {
                $favicon = $this->uploadImage('favicon');
                if ($favicon['status']) {
                    $favicon = $favicon['data'];
                    $this->deleteFile($temp_favicon);
                } else {
                    $favicon = $temp_favicon;
                }
            } else {
                $favicon = $temp_favicon;
            }
        }
        $icon = $this->key_set($this->key_pengaturan_icon, $icon, $favicon);

        // judul utama
        $main = $this->input->post('main_title');
        $app = $this->input->post('main_aplikasi');
        $title = $this->key_set($this->key_pengaturan_title, $main, $app);

        $deskripsi = $this->input->post('main_deskripsi');
        $title = $this->key_set($this->key_pengaturan_deskripsi, $deskripsi, null);


        $result = $icon && $title;
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
        $this->photo_path = './files/image/pengaturan/';
        $this->default_template = 'templates/dashboard';
        $this->load->library('plugin');
        $this->load->helper('url');
    }
}
