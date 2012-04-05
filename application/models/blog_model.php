<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog_model extends CI_Model {

	public function get_all_posts()
	{
		$this->db->from('posts');
		$this->db->order_by('id', 'desc');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_cat_posts($cat_id)
	{
		$this->db->from('posts');
		$this->db->where('cat_id', $cat_id);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_sel_post($post_id)
	{
		$this->db->from('posts');
		$this->db->where('id', $post_id);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_posts_for_menu()
	{
		$this->db->select('id, title');
		$this->db->from('posts');
		$this->db->order_by('id', 'desc');
		$this->db->limit(5);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_cats_for_menu()
	{
		$this->db->select('id, title');
		$this->db->from('cats');
		$this->db->order_by('id', 'desc');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function add_new_comment($data){
		$this->db->insert('comments', $data);
		redirect('/blog/post/'.$data['post_id']);
	}
	public function get_all_comments($post_id){
		$this->db->from('comments');
		$this->db->where('post_id', $post_id);
		$this->db->order_by('id', 'desc');
		$query = $this->db->get();
		return $query->result_array();
	}
}

/* End of file posts_model.php */
/* Location: ./application/models/posts_model.php */