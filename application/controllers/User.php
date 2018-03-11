<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->load->helper('url');
		$this->load->database();
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->model('user_model','user');
	}

    	public function change_pass(){
	       	$id = $this->input->post('pid');
	       	$opwd = $this->input->post('opwd');
		$data = array(
			'password' => $this->input->post('pwd')			
		);
		$this->user->change_pass($id,$opwd,$data);
    	}
}
