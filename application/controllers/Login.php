<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->load->helper('url');
		$this->load->database();
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->model('login_model','login');
	}

	public function index()
	{
		$this->load->view('login');
	}
	
	public function validation(){
		$user = $this->input->post('user');
		$pwd = $this->input->post('pwd');
		$this->login->check($user,$pwd);
		//echo json_encode(array("status"=>TRUE));   
    	}
    	
    	public function logout(){
	        $this->session->unset_userdata('uid');
	        $this->session->sess_destroy();
	        redirect('login');
    	}
}
