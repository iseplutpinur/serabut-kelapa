<?php
defined('BASEPATH') or exit('No direct script access allowed');

class VisiMisi  extends Render_Controller
{
    public function index()
    {
        // data
        $this->data['show'] = $this->key_get($this->key_vm_show);
        $this->data['judul'] = $this->key_get($this->key_vm_judul);
        $this->data['sub_judul'] = $this->key_get($this->key_vm_sub_judul);
        $this->data['visi'] = $this->key_get($this->key_vm_visi);
        $this->data['misi'] = $this->key_get($this->key_vm_misi);

        // Page Settings
        $this->title = 'Visi Dan Misi';
        $this->navigation = ['Visi dan Misi'];
        $this->title_show = false;
        $this->breadcrumb_show = false;
        $this->plugins = ['summernote', 'icheck'];

        // Breadcrumb setting
        $this->breadcrumb_1 = 'Home';
        $this->breadcrumb_1_url = base_url() . 'admin/visimisi';
        $this->breadcrumb_3 = 'VisiMisi ';
        $this->breadcrumb_3_url = '#';

        // content
        $this->content      = 'admin/visimisi';

        // Send data to view
        $this->render();
    }

    public function update()
    {
        // judul
        $main = $this->input->post('main_judul');
        $show = $this->input->post('show_judul') == null ? 0 : 1;
        $judul = $this->key_set($this->key_vm_judul, $main, $show);

        // sub_judul
        $main = $this->input->post('main_sub_judul');
        $show = $this->input->post('show_sub_judul') == null ? 0 : 1;
        $sub_judul = $this->key_set($this->key_vm_sub_judul, $main, $show);

        // visi
        $main = $this->input->post('main_visi',  false);
        $show = $this->input->post('show_visi') == null ? 0 : 1;
        $visi = $this->key_set($this->key_vm_visi, $main, $show);

        // misi
        $main = $this->input->post('main_misi',  false);
        $show = $this->input->post('show_misi') == null ? 0 : 1;
        $misi = $this->key_set($this->key_vm_misi, $main, $show);

        // perlihatkan konten
        $show_content = $this->key_set($this->key_vm_show, $this->input->post('show_content') == null ? 0 : 1, null);
        $result = $show_content && $visi && $judul && $misi && $sub_judul;
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
        $this->photo_path = './files/image/visimisi/';
        $this->default_template = 'templates/dashboard';
        $this->load->library('plugin');
        $this->load->helper('url');
    }
}
