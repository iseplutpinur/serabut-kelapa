<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends Render_Controller
{

	public function index()
	{
		// == home
		$this->data['home_logo'] = $this->key_get($this->key_home_logo);
		$this->data['home_show'] = $this->key_get($this->key_home_show);
		$this->data['home_judul_utama'] = $this->key_get($this->key_home_judul_utama);
		$this->data['home_sub_judul'] = $this->key_get($this->key_home_sub_judul);
		$this->data['home_foto_jumbotron'] = $this->key_get($this->key_home_foto_jumbotron);
		$this->data['home_btn_title'] = $this->key_get($this->key_home_btn_title);
		$this->data['home_situs'] = $this->key_get($this->key_home_situs);

		// == about
		$this->data['about_judul'] = $this->key_get($this->key_about_judul);
		$this->data['about_show'] = $this->key_get($this->key_about_show);
		$this->data['about_detail'] = $this->key_get($this->key_about_detail);
		$this->data['about_foto'] = $this->key_get($this->key_about_foto);

		// == galeri
		$this->data['galeri_show'] = $this->key_get($this->key_galeri_show);
		$this->data['galeri_judul'] = $this->key_get($this->key_galeri_judul);
		$this->data['galeri_sub_judul'] = $this->key_get($this->key_galeri_sub_judul);

		// == feature
		$this->data['feature_show'] = $this->key_get($this->key_feature_show);
		$this->data['feature_judul'] = $this->key_get($this->key_feature_judul);
		$this->data['feature_sub_judul'] = $this->key_get($this->key_feature_sub_judul);

		// == produk
		$this->data['produk_show'] = $this->key_get($this->key_produk_show);
		$this->data['produk_judul'] = $this->key_get($this->key_produk_judul);
		$this->data['produk_sub_judul'] = $this->key_get($this->key_produk_sub_judul);

		// == testimoni
		$this->data['testimoni_show'] = $this->key_get($this->key_testimoni_show);
		$this->data['testimoni_judul'] = $this->key_get($this->key_testimoni_judul);
		$this->data['testimoni_sub_judul'] = $this->key_get($this->key_testimoni_sub_judul);

		// == team
		$this->data['team_show'] = $this->key_get($this->key_team_show);
		$this->data['team_judul'] = $this->key_get($this->key_team_judul);

		// == kontak
		$this->data['kontak_show'] = $this->key_get($this->key_kontak_show);
		$this->data['kontak_judul'] = $this->key_get($this->key_kontak_judul);
		$this->data['kontak_koordinat'] = $this->key_get($this->key_kontak_koordinat);

		// == footer
		$this->data['footer_show'] = $this->key_get($this->key_footer_show);
		$this->data['footer_alamat'] = $this->key_get($this->key_footer_alamat);
		$this->data['footer_copyright'] = $this->key_get($this->key_footer_copyright);

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
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required', ['required' => 'Nama harus di isi']);
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', [
			'required' => 'Email harus di isi',
			'valid_email' => 'Email tidak valid',
		]);
		$this->form_validation->set_rules('pesan', 'Pesan', 'trim|required', ['required' => 'Pesan harus di isi']);
		if ($this->form_validation->run() == FALSE) {
			$this->output_json([
				'status' => false,
				'data' => null,
				'message' => validation_errors()
			], 400);
		} else {
			$nama = $this->input->post('nama');
			$email = $this->input->post('email');
			$pesan = $this->input->post('pesan');
			$result = $this->model->insertPesan($nama, $email, $pesan);

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