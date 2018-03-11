<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_Model extends CI_Model{

		function __construct(){
			parent::__construct();
			
			$this->load->library('session');
		}

		public function check($user,$pwd)
		{	
			if(isset($user)){
				$users = $this->db->get_where("user_info",array("username ="=>$user,"password ="=>$pwd))->result();
				
				if(empty($users)){
					echo "No";					
				}else{
					$session = "";
					foreach ($users as $row)
					{
					    $session = $row->uid;
					}
	   				$this->session->set_userdata('uid',$session);
					echo "loggedIn"; 
				}
			}
		}		
	}
?>