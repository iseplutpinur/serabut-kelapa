<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends Render_Controller
{

	public function index()
	{
		// Page Settings
		$this->title = 'Home';
		$this->navigation = ['Home'];
		$this->plugins = ['datatables'];
		$this->load->library('libs');

		// Breadcrumb setting
		$this->breadcrumb_1 = 'Home';
		$this->breadcrumb_1_url = '#';
		if ($this->level == 'Super Admin') {
			// $this->data['product'] = $this->model->getSumProduct();
			// $this->data['category'] = $this->model->getSumCategory();
			// $this->data['color'] = $this->model->getSumColor();
			// $this->data['reveiw'] = $this->model->getSumREveiw();
			// $this->data['images'] = $this->model->getSumImages();
			// $this->data['whatsapp'] = $this->model->getSumWhatsapp();
			// $this->data['slider'] = $this->model->getSumSlider();
			// $this->data['testimoni'] = $this->model->getSumTestimoni();
			// $this->content = 'dashboard/admin';
		} else {
		}

		// Send data to view
		$this->render();
	}

	public function pilih()
	{
		$id_calon = $this->input->post('id');
		$id_pemilih = $this->id;
		$get = $this->db->select('nilai')->from('kpu_kunci')->where('id', 1)->get()->row_array();
		if ($get == null) {
			$this->db->insert('kpu_kunci', ['id' => 1, 'nilai' => 1]);
			$get = ['nilai' => 1];
		}
		$get = $get['nilai'];
		if ($get == 0) {
			$result = $this->model->pilihSimpan($id_pemilih, $id_calon);
			$this->output_json(true, 200);
		} else {
			$this->output_json(false, 200);
		}
	}

	function __construct()
	{
		parent::__construct();
		$this->sesion->cek_session();
		$this->default_template = 'templates/dashboard';
		$this->load->library('plugin');
		$this->load->helper('url');
		$this->level = $this->session->userdata('data')['level'];
		$this->id = $this->session->userdata('data')['id'];
		// Cek session

		// model
		$this->load->model("HomeModel", 'model');
	}
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */