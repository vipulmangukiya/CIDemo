<?php 

	class Users_mo extends CI_Model {
    
		public function __construct(){
			$this->load->database();

		}

		public function user_login($username,$pwd) {
			
			$res = $this->db->where(['user_email'=>$username,'user_password'=>$pwd])
							->get('user_info');   
			if($res->num_rows()) { return true; } else { return false; }
		}
		public function register_user($data) {
			return $this->db->insert('user_info',$data);

		}
		//-----Fetch All USer Info---
		public function user_list(){
			$res =  $this->db->query("SELECT *FROM user_info");
			return $res->result_array();
		}
		//--- fetch User List Update requets -----
		public function update_profile($id) {
			$res =  $this->db->query("SELECT *FROM user_info where user_id=$id");
			return $res->result_array();
		}
	}

?>