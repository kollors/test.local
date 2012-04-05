<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('blog_model');
	}

	public function index()
	{
		$this->load->view('blocks/header');
		$content['result'] = $this->blog_model->get_all_posts();
		$this->load->view('posts/cat_posts', $content);
		$data['posts_menu'] = $this->blog_model->get_posts_for_menu();
		$data['cats_menu'] = $this->blog_model->get_cats_for_menu();
		$this->load->view('blocks/aside', $data);
		$this->load->view('blocks/footer');
	}

	public function cat($cat_id = 0)
	{
		$this->load->view('blocks/header');
		$content['result'] = $this->blog_model->get_cat_posts($cat_id);
		$this->load->view('posts/cat_posts', $content);
		$data['posts_menu'] = $this->blog_model->get_posts_for_menu();
		$data['cats_menu'] = $this->blog_model->get_cats_for_menu();
		$this->load->view('blocks/aside', $data);
		$this->load->view('blocks/footer');
	}

	public function post($post_id = 0)
	{
		$this->load->view('blocks/header');
		$content['result'] = $this->blog_model->get_sel_post($post_id);
		$content['comments'] = $this->blog_model->get_all_comments($post_id);
		$this->load->view('posts/sel_post', $content);
		$data['posts_menu'] = $this->blog_model->get_posts_for_menu();
		$data['cats_menu'] = $this->blog_model->get_cats_for_menu();
		$this->load->view('blocks/aside', $data);
		$this->load->view('blocks/footer');
	}

}

/* End of file blog.php */
/* Location: ./application/controllers/blog.php */