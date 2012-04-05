<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comments extends CI_Controller {
	
	function add()
	{
		$data['post_id'] = $this->input->post('post_id');
		$data['c_name'] = $this->input->post('c_name');
		$data['c_text'] = $this->input->post('c_text');
		$data['c_date'] = date('Y-m-d');
		$this->load->model('blog_model');
		$this->blog_model->add_new_comment($data);
	}
}