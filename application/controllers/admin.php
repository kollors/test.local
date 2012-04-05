<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('blog_model');
	}
	public function index(){
		$this->load->view('blocks/header');
		$this->load->view('adm/posts/new_post');
		$this->load->view('blocks/footer');
	}
}