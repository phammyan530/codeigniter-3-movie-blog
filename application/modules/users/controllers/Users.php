<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
		$this->lang->load('auth');	
		$this->data['parent_menu'] = 'user';
	}

	public function signin(){
		if($this->ion_auth->logged_in()) {
			redirect('admin');
		}
		
		$this->data['page_title'] = 'Sign In';
		//validate form input
		$this->form_validation->set_rules('identity', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == true)
		{
			//check to see if the user is logging in
			//check for "remember me"
			$remember = (bool) $this->input->post('remember');

			// if ($this->ion_auth->login($this->input->post('identity'), $this->input->post('password'), $remember))
			if (true)
			{
				//if the login is successful
				//redirect them back to the home page
				$this->session->set_flashdata('message', message_box($this->ion_auth->messages(),'success'));
				redirect('admin', 'refresh');
			}
			else
			{
				//if the login was un-successful
				//redirect them back to the login page
				$this->session->set_flashdata('message', message_box($this->ion_auth->errors(),'danger'));
				redirect('signin', 'refresh'); //use redirects instead of loading views for compatibility with MY_Controller libraries
			}
		}

		$this->load_admin('users/signin', false);
	}

	public function signout(){
		$this->ion_auth->logout();
		$this->session->set_flashdata('message',message_box('You have signed out successfully','success'));
		redirect('signin', 'refresh');
	}

	


}
