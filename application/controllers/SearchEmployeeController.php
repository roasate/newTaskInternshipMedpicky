<?php 


class SearchEmployeeController extends CI_Controller
	{
	
		/**
		 * [index description]
		 * @return [type] [description]
		 */
		public function index()
		{
		    $this->load->view('search_employee_view');	
		   	$this->load->model('Search_employee_model');
		}   	

		/**
		 * [search description]
		 * @return [type] [description]
		 */
		public function search()
		{
			$this->form_validation->set_rules('user_name', 'User_name', 'required');
			$this->form_validation->set_rules('email', 'Password', 'required');
			$this->form_validation->set_rules('dob', 'User_name', 'required');
			$this->form_validation->set_rules('registration_date', 'Password', 'required');
			$this->form_validation->set_rules('category', 'User_name', 'required');
			$this->form_validation->set_rules('user_id', 'Password', 'required');						
			if ($this->form_validation->run() == FALSE) {
		    $this->load->view('search_employee_view');
		    echo "enter all details";	
			} else {
				$results = array($this->input->post('user_name'),$this->input->post('email'),$this->input->post('dob'),$this->input->post('registration_date'),$this->input->post('category'),$this->input->post('user_id'));
				$len =count($results);
				 $this->load->model('Search_employee_model');
				$result = $this->Search_employee_model->search($results);
				if($result) {
					echo "success";
				} else {
					echo "fail";
				}
			}	
		}
	
	}