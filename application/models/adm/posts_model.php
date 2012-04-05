<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Posts_model extends CI_Model {

	public function add_new_post($data){
		$this->db->insert('posts', $data);
		redirect('admin');
	}
}