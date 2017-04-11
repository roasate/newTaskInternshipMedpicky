<?php

	Class SessionController extends CI_Controller
	
	{

	
		public function index()

		{
			$this->load->view('blog1');
			$this->load->model('Login_database');
		
		}

		public function user_login_process()

		{	

			$value = $this->input->post('userid');
			$flag=1;
			if ($flag) {
				$value1=$value;
				$flag=0;
			}
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			if ($this->form_validation->run() == FALSE) {
				if(isset($this->session->userdata['logged_in'])) {
					$this->load->model('Login_database');
					$this->Login_database->form_insert($this->session->userdata['logged_in']['username'],$value1);
					$this->load->view('LogoutForm');
				} else {
					$this->load->view('LoginForm');
				}
			} else {	
				$data = array(
					'username' => $this->input->post('username'),
					'password' => $this->input->post('password')
				);
				$this->load->model('Login_database');
				$result = $this->Login_database->login($data);
				if ($result == TRUE) {
					$username = $this->input->post('username');
					$a=$username;
					$result = $this->Login_database->read_user_information($username);
					if ($result != false) {
						$session_data = array(
						'username' => $result[0]->user_name,
						'email' => $result[0]->user_email,
					);
// Add user data in session
					$this->session->set_userdata('logged_in', $session_data);
					$this->load->model('Login_database');
					$this->Login_database->form_insert($this->session->userdata['logged_in']['username'],$value1);
					$this->load->view('LogoutForm');
					}
				} else {
				$data = array(
					'error_message' => 'Invalid Username or Password'
				);
				$this->load->view('LoginForm', $data);
				}
			}

		}

// Logout from admin page
		public function logout()

		{

			$sess_array = array('username' => '');
			$this->session->unset_userdata('logged_in', $sess_array);
			$data['message_display'] = 'Successfully Logout';
			$this->load->view('blog1', $data);
		
		}

	}	




