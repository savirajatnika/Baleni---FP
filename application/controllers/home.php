<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('M_login');
		$this->load->helper('url');

	}

	public function admin(){
		$this->load->view("admin/header");
		$this->load->view("admin/index");
		$this->load->view("admin/footer");
	}

	public function login()
	{
		$this->load->view("admin/login");
	}

	public function index()
	{
		$this->load->view("template/header");
		$this->load->view("home");
		$this->load->view("template/footer");
	}

	public function faq(){
		$this->load->view("template/header");
		$this->load->view("faq");
		$this->load->view("template/footer");
	}

	public function pricelist(){
		$this->load->view("template/header");
		$hehe = $this->mymodel->getMenu(); 
		$this->load->view("pricelist", array('hehe' => $hehe));
		$this->load->view("template/footer");
	}

	public function about(){
		$this->load->view("template/header");
		$this->load->view("about");
		$this->load->view("template/footer");
	}

	public function contact(){
		$this->load->view("template/header");
		$this->load->view("contact");
		$this->load->view("template/footer");
	}

	public function order(){
		$this->load->view("template/header");
		$this->load->view("order");
		$this->load->view("template/footer");
	}

}
