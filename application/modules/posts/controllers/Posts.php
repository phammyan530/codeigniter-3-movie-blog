<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends My_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->data['page_layout'] = 'archive';
		$config['base_url'] = site_url('blog/');
		$config['total_rows'] = 250;
		$config['per_page'] = 10;
		$config['uri_segment'] = 2;
		$config['num_links'] = 4;
     
		$param = array('page' => $this->uri->segment(2));
        $this->data['posts'] = json_decode($this->curl->simple_get($this->config->item('api_get_all_movies'), $param));
        $this->data['pagination'] = $this->bootstrap_pagination($config);
        $this->data['header'] = $this->load->view('themes/'.$this->theme.'/posts/header',$this->data, TRUE);        
		$this->load_theme('posts/index');
	}
	
	public function read($id){
		$this->data['page_layout'] = 'single'; 
		$param = array('id' => $id);
		$this->data['post'] = json_decode($this->curl->simple_get($this->config->item('api_get_movie_by_id'), $param));

		$this->data['header'] = $this->load->view('themes/'.$this->theme.'/posts/header',$this->data, TRUE);
		$this->data['page_title'] = $this->data['post']->movie;
		$this->load_theme('posts/read');
	}
	
	public function about(){
		$this->data['page_layout'] = 'single'; 
		$this->data['header'] = $this->load->view('themes/'.$this->theme.'/posts/header',$this->data, TRUE);
		$this->data['page_title'] = 'About us';
		$this->load_theme('posts/about');
	}
}
