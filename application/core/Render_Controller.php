<?php

// use PhpOffice\PhpSpreadsheet\Calculation\Logical\Boolean;

defined('BASEPATH') or exit('No direct script access allowed');

class Render_Controller extends CI_Controller
{
	protected $default_template;
	protected $title;
	protected $title_show = true;
	protected $template_type;
	protected $page_setting;
	protected $page_nav;
	protected $app_name;
	protected $copyright;
	protected $breadcrumb_show = true;
	protected $breadcrumb_1;
	protected $breadcrumb_1_url;
	protected $breadcrumb_2;
	protected $breadcrumb_2_url;
	protected $breadcrumb_3;
	protected $breadcrumb_3_url;
	protected $breadcrumb_4;
	protected $breadcrumb_4_url;
	protected $content;

	protected $navigation = array();
	protected $data = array();
	protected $plugins = array();
	private   $plugin_scripts = array();
	private   $plugin_styles = array();
	protected $debug = true;
	protected $photo_path = './files/';
	protected $navigation_type = 'admin';


	// key value =========================================================================================================
	// == home
	protected $key_home_logo = 'home_logo';
	protected $key_home_show = 'home_show';
	protected $key_home_judul_utama = 'home_judul_utama';
	protected $key_home_sub_judul = 'home_sub_judul';
	protected $key_home_foto_jumbotron = 'home_foto_jumbotron';
	protected $key_home_btn_title = 'home_btn_title';
	protected $key_home_btn_link = 'home_btn_link';
	protected $key_home_situs = 'home_situs';

	// == about
	protected $key_about_judul = 'about_judul';
	protected $key_about_show = 'about_show';
	protected $key_about_detail = 'about_detail';
	protected $key_about_foto = 'about_foto';

	// == galeri
	protected $key_galeri_show = 'galeri_show';
	protected $key_galeri_judul = 'galeri_judul';
	protected $key_galeri_sub_judul = 'galeri_sub_judul';

	// == feature
	protected $key_feature_show = 'feature_show';
	protected $key_feature_judul = 'feature_judul';
	protected $key_feature_sub_judul = 'feature_sub_judul';

	// == produk
	protected $key_produk_show = 'produk_show';
	protected $key_produk_judul = 'produk_judul';
	protected $key_produk_sub_judul = 'produk_sub_judul';

	// == testimoni
	protected $key_testimoni_show = 'testimoni_show';
	protected $key_testimoni_judul = 'testimoni_judul';
	protected $key_testimoni_sub_judul = 'testimoni_sub_judul';

	// == team
	protected $key_team_show = 'team_show';
	protected $key_team_judul = 'team_judul';
	protected $key_team_sub_judul = 'team_sub_judul';

	// == kontak
	protected $key_kontak_judul = 'kontak_judul';
	protected $key_kontak_sub_judul = 'kontak_sub_judul';
	protected $key_kontak_show = 'kontak_show';
	protected $key_kontak_koordinat = 'kontak_koordinat';

	// == footer
	protected $key_footer_show = 'footer_show';
	protected $key_footer_alamat = 'footer_alamat';
	protected $key_footer_copyright = 'footer_copyright';

	// == footer
	protected $key_pengaturan_title = 'pengaturan_title';
	protected $key_pengaturan_deskripsi = 'pengaturan_deskripsi';
	protected $key_pengaturan_icon = 'pengaturan_icon';

	// == vm
	protected $key_vm_show = 'vm_show';
	protected $key_vm_judul = 'vm_judul';
	protected $key_vm_sub_judul = 'vm_sub_judul';
	protected $key_vm_visi = 'vm_visi';
	protected $key_vm_misi = 'vm_misi';

	// key value =========================================================================================================
	protected function preRender()
	{
	}

	protected function render($template = NULL)
	{
		$this->preRender();
		$this->loadPlugins();

		if ($template == NULL) {
			$template = $this->default_template;
		}

		$this->navigation_type_front_array = [];
		if ($this->navigation_type == 'front') {
			$this->navigation_type_front_array = $this->getNavArray();
		}

		$navigation = [];
		switch ($this->navigation_type) {
			case 'admin':
				$navigation = $this->navigationHtml($this->default->menu());
				break;
			case 'front':
				$navigation = $this->navFront();
		}

		$navigation2 = [];
		switch ($this->navigation_type) {
			case 'front':
				$navigation2 = $this->navFront2();
				break;
		}

		$data = array(
			// Application
			'template_type' 	=> $this->template_type,
			'page_setting' 		=> $this->page_setting,
			'page_nav' 			=> $this->page_nav,
			'app_name' 			=> $this->app_name,
			'copyright' 		=> $this->copyright,


			// Breadcrumb
			'breadcrumb_show' 	=> $this->breadcrumb_show,
			'breadcrumb_1' 		=> $this->breadcrumb_1,
			'breadcrumb_1' 		=> $this->breadcrumb_1,
			'breadcrumb_2' 		=> $this->breadcrumb_2,
			'breadcrumb_3' 		=> $this->breadcrumb_3,
			'breadcrumb_4' 		=> $this->breadcrumb_4,
			'breadcrumb_1_url' 	=> $this->breadcrumb_1_url,
			'breadcrumb_2_url' 	=> $this->breadcrumb_2_url,
			'breadcrumb_3_url' 	=> $this->breadcrumb_3_url,
			'breadcrumb_4_url' 	=> $this->breadcrumb_4_url,


			// Content
			'plugin_styles' 	=> $this->plugin_styles,
			'plugin_scripts' 	=> $this->plugin_scripts,
			'title' 			=> $this->title,
			'title_show' 		=> $this->title_show,
			'navigation' 		=> $navigation,
			'navigation2' 		=> $navigation2,
			'content' 			=> $this->content,
			'navigation_array' 	=> $this->navigation
		);

		// frontend
		if ($this->navigation_type == 'front') {

			// list sosmed
			$this->load->driver('cache', array('adapter' => 'apc', 'backup' => 'file'));
			if (!$list_item = $this->cache->get($this->cache_list_item)) {
				$list_item = $this->db->select('link, name')
					->from('home_footer_list')->where('status', 1)
					->get()->result_array();
				$this->cache->save($this->cache_list_item, $list_item);
			}

			// list item
			if (!$sosmed = $this->cache->get($this->cache_sosmed)) {
				$sosmed = $this->db->select('icon, link, name')
					->from('home_sosmed')->where('status', 1)
					->get()->result_array();
				$this->cache->save($this->cache_sosmed, $sosmed);
			}


			$data['front'] = [
				'logo' => $this->key_get($this->key_logo),
				'list_head' => $this->key_get($this->key_footer_list_head),
				'contact' => $this->key_get($this->key_footer_contact),
				'copyright' => $this->key_get($this->key_footer_copyright),
				'description' => $this->key_get($this->key_footer_descritpion),
				'list_item' => $list_item,
				'sosmed' => $sosmed,
			];
		}

		$data = array_merge($data, $this->data);
		$data = $this->navigation_type == false ? $this->data : $data;


		// pengaturan
		$pengaturan = [
			'title' => $this->key_get($this->key_pengaturan_title),
			'icon' => $this->key_get($this->key_pengaturan_icon),
			'deskripsi' => $this->key_get($this->key_pengaturan_deskripsi),
			'copyright' => $this->key_get($this->key_footer_copyright),

		];

		$data = array_merge($data, ['pengaturan' => $pengaturan]);

		$this->load->view($template, $data);
	}


	protected function output_json($data, $code = null)
	{
		$code = $code == null ? 200 : $code;
		$this->output->set_content_type('application/json');
		$this->output->set_output(json_encode($data));
		$this->output->set_status_header($code);
	}


	private function loadPlugins()
	{
		if (empty($this->plugins)) return;

		$result 				= $this->plugin->load_plugins($this->plugins);
		$this->plugin_styles 	= $result['styles'];
		$this->plugin_scripts 	= $result['scripts'];
	}

	private function navigationHtml($navigation)
	{
		$menu_header = '<nav class="mt-2"><ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">';
		$menu_body = '';
		$menu_footer = '	</ul></nav>';
		$button_logout = '<li class="nav-item btn-logout"> <a href="#" class="nav-link "> <i class="nav-icon fas fa-sign-out-alt"></i><p>Logout</p> </a> </li>';
		$main_menu = $this->navigationToArray($navigation);
		foreach ($main_menu as $menu) {
			$menu_open = $menu['active_sub'] ? ' menu-open' : '';
			$menu_active = $menu['active'] ? ' active' : '';
			$menu_nama = $menu['menu_nama'];
			$menu_icon = $menu['menu_icon'];
			$menu_url = base_url($menu['menu_url']);
			$menu_have_sub = $menu['sub_menu'] ? '<i class="right fas fa-angle-left"></i>' : '';
			$sub_menu_header = '<ul class="nav nav-treeview">';
			$sub_menu_body = '';
			$sub_menu_footer = '</ul>';
			foreach ($menu['sub_menu'] as $sub_menu) {
				$sub_menu_active = $sub_menu['active'] ? ' active' : '';
				$sub_menu_nama = $sub_menu['menu_nama'];
				$sub_menu_url = base_url($sub_menu['menu_url']);
				$sub_menu_body .= '
					<li class="nav-item">
						<a href="' . $sub_menu_url . '" class="nav-link ' . $sub_menu_active . '">
							<i class="far fa-circle nav-icon"></i>
							<p>' . $sub_menu_nama . '</p>
						</a>
					</li>
				';
			}

			$sub_menu_html = $menu['sub_menu'] ? $sub_menu_header . $sub_menu_body . $sub_menu_footer : '';

			$menu_body .= '
				<li class="nav-item' . $menu_open . '">
					<a href="' . $menu_url . '" class="nav-link ' . $menu_active . '">
						<i class="nav-icon ' . $menu_icon . '"></i>
						<p>
						' . $menu_nama . '
						' . $menu_have_sub . '
						</p>
						</a>
						' . $sub_menu_html . '
				</li>
			';
		}
		$result = $menu_header . $menu_body . $button_logout . $menu_footer;
		return $result;
	}

	private function navigationToArray($menu)
	{
		$main_menu = [];
		foreach ($menu as $nav) {
			$main_menu_active = in_array($nav['menu_nama'], $this->navigation);
			$sub_menu_list = $this->default->sub_menu($nav['menu_id']);
			$sub_menu_in_active = false;
			$sub_menu_row = [];
			if ($sub_menu_list) {
				foreach ($sub_menu_list as $row) {
					$sub_menu_cek_aktif = in_array($row['menu_nama'], $this->navigation);;
					$sub_menu_row[] = array_merge($row, [
						'active' => $sub_menu_cek_aktif,
					]);
					if ($sub_menu_cek_aktif) {
						$sub_menu_in_active = true;
					}
				}
			}

			$main_menu[] = array_merge(
				$nav,
				[
					'active' => (bool) ($main_menu_active || $sub_menu_in_active),
					'active_sub' => (bool) $sub_menu_in_active,
					'sub_menu' => $sub_menu_row
				]
			);
		}
		return $main_menu;
	}

	public function create_pdf(array $data)
	{
		if (!isset($data['html'])) {
			$data['html'] = '';
		}

		if (!isset($data['orientation'])) {
			$data['orientation'] = 'potrait';
		}

		if (!isset($data['paper_size'])) {
			$data['paper_size'] = 'A4';
		}

		if (!isset($data['doc_name'])) {
			$data['doc_name'] = 'document';
		}

		$dompdf = new Dompdf\Dompdf();
		// instantiate and use the dompdf class
		$style = '
		<style>
		body {
			margin: 0;
			font-family: \"Source Sans Pro\",-apple-system,BlinkMacSystemFont,\"Segoe UI\",Roboto,\"Helvetica Neue\",Arial,sans-serif,\"Apple Color Emoji\",\"Segoe UI Emoji\",\"Segoe UI Symbol\";
			align-text:center;
		}
		table {
			font-family: Arial, Helvetica, sans-serif;
			border-collapse: collapse;
			width: 100%;
		}

		table td, table th {
			border: 1px solid #ddd;
			padding: 8px;
		}

		table tr:nth-child(even){background-color: #f2f2f2;}

		table tr:hover {background-color: #ddd;}

		table th {
			padding-top: 12px;
			padding-bottom: 12px;
			text-align: left;
			background-color: #93C5FD;
			color: black;
		}</style>';

		$html = "{$style}<body> {$data['html']} </body>";
		$dompdf->loadHtml($html);

		// (Optional) Setup the paper size and orientation
		$dompdf->setPaper($data['paper_size'], $data['orientation']);

		// Render the HTML as PDF
		$dompdf->render();

		$dompdf->set_option('defaultMediaType', 'all');
		$dompdf->set_option('isFontSubsettingEnabled', true);

		// Output the generated PDF to Browser
		$dompdf->stream("{$data['doc_name']}.pdf");
	}


	public function send_email($email = null, $content = null, $subject = null)
	{
		$config = array(
			'protocol' => 'POP3',
			'smtp_host' => '',
			'smtp_port' => 995,
			'smtp_user' => '',
			'smtp_pass' => '',
			'mailtype'  => 'html',
			'charset'   => 'iso-8859-1'
		);

		//Load email library
		$this->load->library('email', $config);

		// $this->email->attach($gambar);

		$this->email->set_newline("\r\n");

		$this->email->from('admin@kap.komunitashalal.com', "Audit System End to End");
		$this->email->to($email);

		$this->email->subject($subject);
		$this->email->message($content);
		return $this->email->send();
	}


	public function base64url_encode($data)
	{
		return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
	}

	public function base64url_decode($data)
	{
		return base64_decode(str_pad(strtr($data, '-_', '+/'), strlen($data) % 4, '=', STR_PAD_RIGHT));
	}

	public function uploadImage($name)
	{
		$config['upload_path']          = $this->photo_path;
		$config['allowed_types']        = '*';
		$config['file_name']            = md5(uniqid("iseplutpinur", true));
		$config['overwrite']            = true;
		$config['max_size']             = 8024;
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if ($this->upload->do_upload($name)) {
			return [
				'status' => true,
				'data' => $this->upload->data("file_name"),
				'message' => 'Success'
			];
		} else {
			return [
				'status' => false,
				'data' => null,
				'message' => $this->upload->display_errors('', '')
			];
		}
	}

	public function deleteFile($file)
	{
		$res_foto = true;
		if ($file != null && $file != '') {
			if (file_exists($this->photo_path . $file)) {
				$res_foto = unlink($this->photo_path . $file);
			}
		}
		return $res_foto;
	}


	public function navFront()
	{
		$result = $this->navigation_type_front_array;
		if (empty($result)) {
			return '';
		}

		$li = '';
		foreach ($result as $res) {
			if ($res['have_child']) {
				$li .= $this->haveChildHtml($res);
			} else {
				$li .= $this->navHtml($res);
			}
		}

		return $li;
	}

	public function navFront2()
	{
		$result = $this->navigation_type_front_array;

		if (empty($result)) {
			return '';
		}

		$li = '';
		foreach ($result as $res) {
			if ($res['have_child']) {
				$li .= $this->haveChildHtml2($res);
			} else {
				$li .= $this->navHtml2($res);
			}
		}
		return $li;
	}

	private function haveChildHtml($data)
	{
		$child_html = '';
		foreach ($data['child'] as $child) {
			$child_html .= '<li><a ' . ($child['active'] ? 'class="active"' : '') . ' href="' . $child['url'] . '">' . $child['nama'] . '</a></li>';
		}
		return '
			<li>
				<a ' . ($data['active'] ? 'class="active"' : '') . ' href="' . $data['url'] . '">
					<span class="menu-text">' . $data['nama'] . '</span>
					<i class="fa fa-angle-down"></i>
				</a>
				<ul class="dropdown-submenu dropdown-hover">
				' . $child_html . '
				</ul>
			</li>
		';
	}

	private function navHtml($data)
	{
		return '     <li>
                  <a ' . ($data['active'] ? 'class="active"' : '') . ' href="' . $data['url'] . '">
                    <span class="menu-text">' . $data['nama'] . '</span>
                  </a>
                </li>';
	}

	private function haveChildHtml2($data)
	{
		$child_html = '';
		foreach ($data['child'] as $child) {
			$child_html .= '<li><a ' . ($child['active'] ? 'class="active"' : '') . ' href="' . $child['url'] . '">' . $child['nama'] . '</a></li>';
		}
		return '<li class="menu-item-has-children"><a ' . ($data['active'] ? 'class="active"' : '') . ' href="' . $data['url'] . '">' . $data['nama'] . '</a>
				<ul class="dropdown">
				' . $child_html . '
				</ul>
			</li>
		';
	}

	private function navHtml2($data)
	{
		return '</li><li><a  ' . ($data['active'] ? 'class="active"' : '') . ' href="' . $data['url'] . '">' . $data['nama'] . '</a></li>';
	}

	private function getNavArray()
	{
		$parrents = $this->db->select('menu_id as id, menu_nama as nama, menu_url as url')
			->from('menu_front')
			->where('menu_menu_id', 0)
			->where('menu_status', 'Aktif')
			->order_by('menu_index')
			->get()->result_array();

		if ($parrents == null) {
			return [];
		}

		$now = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
		$now .= "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

		$rows = [];
		foreach ($parrents as $parrent) {
			$parrent['url'] = $parrent['url'] == '#' ? $parrent['url'] : base_url($parrent['url']);
			$parrent_active = $parrent['url'] == $now;
			$child_active = false;
			$child = $this->getChild($parrent['id']);
			$child_rows = [];
			$have_child = false;
			if (is_array($child)) {
				foreach ($child as $c) {
					$c['url'] = base_url($c['url']);
					$have_child = true;
					$active = $c['url'] == $now;
					$child_rows[] = array_merge($c, ['active' => $active]);
					if ($active) {
						$child_active = true;
					}
				}
			}
			$rows[] = array_merge($parrent, [
				'child' => $child_rows,
				'active' => ($parrent_active || $child_active),
				'have_child' => $have_child
			]);
		}
		return $rows;
	}

	private function getChild($id)
	{
		$child = $this->db->select('menu_id as id, menu_nama as nama, menu_url as url')
			->from('menu_front')
			->where('menu_menu_id', $id)
			->where('menu_status', 'Aktif')
			->get()->result_array();
		return $child;
	}

	public function key_get($key)
	{
		$this->load->driver('cache', array('adapter' => 'apc', 'backup' => 'file'));
		if (!$get = $this->cache->get($key)) {
			$get = $this->db->select("key, value1, value2")
				->from('key_value')->where('key', $key)->get();
			if ($get->num_rows() == 0) {
				$data = [
					'key' => $key,
					'value1' => null,
					'value2' => null,
					'created_by' => $this->session->userdata('data')['id'],
				];
				$this->db->insert("key_value",  $data);
				$get = $data;
			} else {
				$get = $get->row_array();
			}
			$this->cache->save($key, $get);
		}
		return $get;
	}

	public function key_set($key, $value1, $value2)
	{
		// delete cache
		$this->load->driver('cache', array('adapter' => 'apc', 'backup' => 'file'));
		$this->cache->delete($key);

		// query
		$get = $this->db->select("key")
			->from('key_value')->where('key', $key)->get();
		if ($get->num_rows() == 0) {
			$get = $this->db->insert("key_value", [
				'key' => $key,
				'value1' => $value1,
				'value2' => $value2,
				'created_by' => $this->session->userdata('data')['id'],
			]);
		} else {
			$get = $this->db->where('key', $key)->update('key_value', [
				'value1' => $value1,
				'value2' => $value2,
				'updated_by' => $this->session->userdata('data')['id'],
			]);
		}
		return $get;
	}


	function __construct()
	{
		parent::__construct();

		$this->app_name 		= $this->config->item('app_name');
		$this->copyright 		= $this->config->item('copyright');
		$this->page_setting 	= $this->config->item('page_setting');
		$this->page_nav 		= $this->config->item('page_nav');
		$this->template_type 	= $this->config->item('template_type');

		$this->load->library('plugin');
	}
}
