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