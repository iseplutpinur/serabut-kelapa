<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends Render_Controller
{

	public function index()
	{
		// == home
		$this->data['home_show'] = $this->key_get($this->key_home_show);
		if ($this->data['home_show']['value1'] == 1) {
			$this->data['home_logo'] = $this->key_get($this->key_home_logo);
			$this->data['home_judul_utama'] = $this->key_get($this->key_home_judul_utama);
			$this->data['home_sub_judul'] = $this->key_get($this->key_home_sub_judul);
			$this->data['home_foto_jumbotron'] = $this->key_get($this->key_home_foto_jumbotron);
			$this->data['home_btn_title'] = $this->key_get($this->key_home_btn_title);
			$this->data['home_btn_link'] = $this->key_get($this->key_home_btn_link);
			$this->data['home_situs'] = $this->key_get($this->key_home_situs);
		}


		// == about
		$this->data['about_show'] = $this->key_get($this->key_about_show);
		if ($this->data['about_show']['value1'] == 1) {
			$this->data['about_judul'] = $this->key_get($this->key_about_judul);
			$this->data['about_detail'] = $this->key_get($this->key_about_detail);
			$this->data['about_foto'] = $this->key_get($this->key_about_foto);
		}

		// == galeri
		$this->data['galeri_show'] = $this->key_get($this->key_galeri_show);
		if ($this->data['galeri_show']['value1'] == 1) {
			$this->data['galeri_judul'] = $this->key_get($this->key_galeri_judul);
			$this->data['galeri_sub_judul'] = $this->key_get($this->key_galeri_sub_judul);
			$this->data['galeri_items'] = $this->model->getGalery();
		}

		// == feature
		$this->data['feature_show'] = $this->key_get($this->key_feature_show);
		if ($this->data['feature_show']['value1'] == 1) {
			$this->data['feature_judul'] = $this->key_get($this->key_feature_judul);
			$this->data['feature_sub_judul'] = $this->key_get($this->key_feature_sub_judul);
			$this->data['feature_items'] = $this->model->getFeature();
		}
		// == produk
		$this->data['produk_show'] = $this->key_get($this->key_produk_show);
		if ($this->data['produk_show']['value1'] == 1) {
			$this->data['produk_judul'] = $this->key_get($this->key_produk_judul);
			$this->data['produk_sub_judul'] = $this->key_get($this->key_produk_sub_judul);
			$this->data['produk_items'] = $this->model->getProduk();
		}

		// == testimoni
		$this->data['testimoni_show'] = $this->key_get($this->key_testimoni_show);
		if ($this->data['testimoni_show']['value1'] == 1) {
			$this->data['testimoni_judul'] = $this->key_get($this->key_testimoni_judul);
			$this->data['testimoni_sub_judul'] = $this->key_get($this->key_testimoni_sub_judul);
			$this->data['testimoni_items'] = $this->model->getTestimoni();
		}

		// == team
		$this->data['team_show'] = $this->key_get($this->key_team_show);
		if ($this->data['team_show']['value1'] == 1) {
			$this->data['team_judul'] = $this->key_get($this->key_team_judul);
			$this->data['team_sub_judul'] = $this->key_get($this->key_team_sub_judul);
			$this->data['team_items'] = $this->model->getTeam();
		}

		// == kontak
		$this->data['kontak_show'] = $this->key_get($this->key_kontak_show);
		if ($this->data['kontak_show']['value1'] == 1) {
			$this->data['kontak_judul'] = $this->key_get($this->key_kontak_judul);
			$this->data['kontak_sub_judul'] = $this->key_get($this->key_kontak_sub_judul);
			$this->data['kontak_koordinat'] = $this->key_get($this->key_kontak_koordinat);
		}

		// == footer
		$this->data['footer_show'] = $this->key_get($this->key_footer_show);
		if ($this->data['footer_show']['value1'] == 1) {
			$this->data['footer_alamat'] = $this->key_get($this->key_footer_alamat);
			$this->data['footer_copyright'] = $this->key_get($this->key_footer_copyright);
			$this->data['footer_sosmed'] = $this->model->footer_sosmed();
			$this->data['home_logo'] = $this->key_get($this->key_home_logo);
		}

		// == Visi Misi
		$this->data['vm_show'] = $this->key_get($this->key_vm_show);
		if ($this->data['vm_show']['value1'] == 1) {
			$this->data['vm_judul'] = $this->key_get($this->key_vm_judul);
			$this->data['vm_sub_judul'] = $this->key_get($this->key_vm_sub_judul);
			$this->data['vm_visi'] = $this->key_get($this->key_vm_visi);
			$this->data['vm_misi'] = $this->key_get($this->key_vm_misi);
		}

		$this->data['whatsapp'] = $this->model->getNoWhatsapp();

		$this->content = 'front/home';
		$this->render();
	}

	public function detail($slug)
	{
		$this->title = "Home";
		$this->render();
	}

	public function input_pesan()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<li>', '</li>');
		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
		$this->form_validation->set_rules('subject', 'Subject', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('message', 'Message', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
			$this->output_json([
				'status' => false,
				'data' => null,
				'message' => validation_errors()
			], 400);
		} else {
			$first_name = $this->input->post('first_name');
			$last_name = $this->input->post('last_name');
			$email = $this->input->post('email');
			$subject = $this->input->post('subject');
			$message = $this->input->post('message');
			$result = $this->model->insertPesan($first_name, $last_name, $subject, $email, $message);

			$code = $result == null ? 404 : 200;
			$status = $result != null;
			$this->output_json([
				'status' => $status,
				'length' => 1,
				'data' =>  $result
			], $code);
		}
	}

	function __construct()
	{
		parent::__construct();
		$this->default_template = 'templates/main';
		$this->navigation_type = false;
		$this->load->model('HomeModel', 'model');
		$this->load->library('plugin');
		$this->load->helper('url');
	}
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */