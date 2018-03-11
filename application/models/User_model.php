<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Model extends CI_Model{

		function __construct(){
			parent::__construct();
			
			$this->load->library('session');
		}		
		
		public function change_pass($id,$opwd,$data){						
			if(isset($opwd)){
				$users = $this->db->get_where("user_info",array("password"=>$opwd))->result();
				if(empty($users)){
					echo "No";
				}else{					
					$this->db->where('uid',$id);			
					$this->db->update('user_info',$data);					
					echo "Yes";
				}
			}
		}		
	}
?>