<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->load->helper('url');
        	$this->load->helper('date');
	//	$this->load->database();
		$this->load->library('session');
	//	$this->load->library('encryption');
    //    $this->load->model('airline_model','air');
	}

	public function index()
	{
		$this->load->view('template/header2');
		$this->load->view('chat');
		$this->load->view('template/footer');
	}
	
}