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
			if ($this->input->post('user_name') == "" && $this->input->post('user_id') == "" && $this->input->post('category') == "" && $this->input->post('email') == "" && $this->input->post('dob') == "" && $this->input->post('registration_date') == ""  ){
		        $this->load->view('search_employee_view');	
		    	$this->load->model('Search_employee_model');

			}	elseif ((preg_match('/^[a-zA-Z]{3,}$/', $this->input->post('user_name')) || $this->input->post('user_name') == "") && preg_match('/^[0-9]{0,}$/', $this->input->post('user_id')) && preg_match('/^[a-zA-Z]{0,}$/', $this->input->post('category')) &&(filter_var($this->input->post('email'), FILTER_VALIDATE_EMAIL)) || $this->input->post('email')=="" && (preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$this->input->post('dob')) || $this->input->post('registration_date') == "" )&& (preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$this->input->post('dob')) || $this->input->post('dob') == "" )) { 
			// for english chars + numbers only
 			// valid username, alphanumeric & longer than or equals 5 chars
				$results = array($this->input->post('user_name'),$this->input->post('email'),$this->input->post('dob'),$this->input->post('registration_date'),$this->input->post('category'),$this->input->post('user_id'));
				$len =count($results);
			// echo $results[5];die;
				 $this->load->model('Search_employee_model');
				$result['data'] = $this->Search_employee_model->search($results);
			// if($result) {
			// 	echo "success";
			// } else {
			// 	echo "fail";
			// }
			//echo count($result);die;
				
				$this->load->view('result_view', $result);   
				 									   
			} else {
				echo "Enter valid details";
				$this->load->view('search_employee_view');	
			}


				
		}
	
	}