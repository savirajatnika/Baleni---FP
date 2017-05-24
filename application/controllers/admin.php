<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Admin extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model('mymodel');
		$this->load->helper('url');

		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

 	public function form(){
 		$this->load->view("admin/header");
		$this->load->view("admin/form");
		$this->load->view("admin/footer");
	}

	public function lock_screen(){
		$this->load->view("admin/lock_screen");
	}

	public function bt(){
		$this->load->view("admin/header");
		$data =$this->mymodel->GetBarang();
		$this->load->view('admin/basic_tabel', array('data' => $data));
		$this->load->view("admin/footer");
	}

	/* public function index(){
		$data =$this->mymodel->GetBarang();
		$this->load->view('admin/tabel', array('data' => $data));
	} */

	public function tambahdata(){
		$this->load->view('admin/form');
	}

	public function do_insert(){
		$gambar=substr($this->do_upload(),1);
		$id = $_POST['id'];
		$nama_menu = $_POST['nama_menu'];
		$harga_menu = $_POST['harga_menu'];
		$deskripsi_menu = $_POST['deskripsi_menu'];
		
		
//		$image = $_POST['pic'];
		$data_insert = array(
			'id' => $id,
			'nama_menu' => $nama_menu,
			'harga_menu' => $harga_menu,
			'deskripsi_menu' => $deskripsi_menu,
			'gambar' => $gambar,
		//	'image' => $image,
			);
			$res = $this->db->insert('menu',$data_insert);
			if($res>=1){
				redirect('admin/form');
			}else{
				echo "<h2>Silahkan diulangi lagi. </h2>";
			}
	}

	public function do_upload(){
	$type = explode('.', $_FILES["pic"]["name"]);
		$type = $type[count($type)-1];
		$url = "./images/".uniqid(rand()).".".$type;
		if(in_array($type, array("jpg","jpeg","gif","png")))
			if(is_uploaded_file($_FILES["pic"]["tmp_name"]))
				if (move_uploaded_file($_FILES["pic"]["tmp_name"],$url));
					return $url;
		return "";
	}

	public function edit_data($id){
		$u = $this->mymodel->GetBarang("where id = '$id'");
		$data = array(
			"id" => $u[0]['id'],
			"nama_menu" => $u[0]['nama_menu'],
			"harga_menu" => $u[0]['harga_menu'],
			"deskripsi_menu" => $u[0]['deskripsi_menu'],

			);
		$this->load->view('admin/header');
		$this->load->view('admin/form_edit',$data);
		$this->load->view('admin/footer');
	}

	public function do_update(){
	//	echo "<pre>";
	//	print_r($_POST);
	//	echo "/<pre>";
		$id = $_POST['id'];
		$nama_menu = $_POST['nama_menu'];
		$harga_menu = $_POST['harga_menu'];
		$deskripsi_menu = $_POST['deskripsi_menu'];
		$data_update = array(
			'nama_menu' => $nama_menu,
			'harga_menu' => $harga_menu,
			'deskripsi_menu' => $deskripsi_menu,
			);
			$where = array('id' => $id);
			$res = $this->mymodel->UpdateData('menu',$data_update,$where);
			if($res>=1){
				redirect('admin/basic_tabel');
			}else{
				echo "<h2>Wah tidak berhasil yank</h2>";
			}
	}

	public function do_delete($nama_menu){
		$where = array('nama_menu' => $nama_menu);
		$res = $this->mymodel->DeleteData('menu',$where);
		if ($res>=1){
			die();
			echo "<h2> BISA </h2>";
	//		redirect('admin/form');
			//echo "<h2>Delete data suksesss yeay</h2>";
		}
	}
}

	/* public function create(){
			if ($submit="Submit"){
			$this->load->library('form_validation');
			$this->form_validation->set_rules('nama_menu', 'Nama Menu', 'required|max_length[240]');
			$this->form_validation->set_rules('harga_menu', 'Harga Menu', 'required|numeric[240]');
			$this->form_validation->set_rules('gambar', 'gambar');
			$this->form_validation->set_rules('deskripsi_menu','Deskripsi Menu','required|max_length[240]');

			if ($this->form_validation->run() == TRUE) {
				$data = $this->fetch_data_from_post();
			
				if (is_numeric($update_id)) {
					$this->_update($update_id, $data);
					}else {
						$this->_insert($data); 
					}
				
			}

		}

		if ((is_numeric($update_id)) && ($submit!="Submit")) {
			$data = $this->fetch_data_from_db($update_id); 
		}
		else {
			$data = $this->fetch_data_from_post(); 
		}

		$data['view_file'] = "create"; 
		$this->load->view("admin/form");
	} 

	public function fetch_data_from_post(){
		$data['nama_menu'] = $this->input->post('nama_menu', TRUE);
		$data['harga_menu'] = $this->input->post('harga_menu', TRUE);
		$data['path'] = $this->input->post('path', TRUE);
		$data['deskripsi_menu'] = $this->input->post('deskripsi_menu', TRUE);
		return $data;
	}

	public function fetch_data_from_db($update_id) {
		$query = $this->get_where($update_id);
		foreach ($query->result() as $row) {
			$data['nama_menu'] = $row->nama_menu; 
			$data['harga_menu'] = $row->harga_menu;
			$data['path'] = $row->path;
			$data['deskripsi_menu'] = $row->deskripsi_menu;
		}

		if (!isset($data)) {
			$data = ""; 
		}

		return $data;
	} */
