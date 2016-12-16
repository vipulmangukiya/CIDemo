<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

///--- Register  view --------------
	public function register()
	{
		$this->load->helper('url');
		$this->load->view("register");
		
	}
	public function forgot() {
		echo "Forgot Password <br><br><a href='../home'>Click to send Email</a>";
	}
	//--- new Register ---------------
	public function process () {
		$post  = $this->input->post();
		$this->load->model('Users_mo');
		if($err = $this->Users_mo->register_user($post)) {
			echo "Register Successfully<br><br><a href='../home'>Click to Login</a>";
		} else {
			echo "Wrong To Register <br><br><a href='../register'>Click to Login</a>";
		} 
	}
	//------check Login-----------------
	public function login() {
			$this->load->helper('url');
				$username = $this->input->post('email');
				$pwd	  = $this->input->post('re_pwd');
			$this->load->model('Users_mo'); 
			if($this->Users_mo->user_login($username,$pwd)) {
				header("Location: /CI");
			} 
			else {
				$this->session->set_flashdata('login_failed',"Indalid username/Password..");
				return redirect('/home');
			}
	}
	//---- Display All Register User----

	public function view() {
	$this->load->helper('url');
		$this->load->model('Users_mo'); 
		$data['users'] = $this->Users_mo->user_list();
		$this->load->view("user_list",$data);	
	}
	//---- Update Details show in from -----------
	public function update($id) {
		$this->load->helper('url');
		$this->load->model('Users_mo');
		$data['users'] = $this->Users_mo->update_profile($id);
		$this->load->view("update",$data);
	}

	//------ Update user profile deatils-----
	public function update_($id) {
		$this->load->helper('url');
		$this->load->model('Users_mo');
		
		
	}
?>
