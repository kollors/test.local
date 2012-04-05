<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Posts extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('adm/posts_model');
	}
	public function add(){
		$data['cat_id'] = $this->input->post('cat_id');
		$data['title'] = $this->input->post('title');
		$data['p_text'] = $this->input->post('p_text');
		$data['p_date'] = date('Y-m-d');
		$this->posts_model->add_new_post($data);
	}
}