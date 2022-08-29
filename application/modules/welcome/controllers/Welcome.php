<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function test()
	{
		$this->load->library(array('curl'));
		$result = json_decode($this->curl->simple_get($this->config->item('api_get_all_movies')));
		print_data($result);
	}
	

}
