<?php

	Class Search_Employee_Model extends CI_Model
	{

		/**
		 * [search description]
		 * @param  [type] $data [description]
		 * @return [type]       [description]
		 */
		public function search($data)
		{
				$condition = "user_name =" . "'" . $data[0] . "' AND " . "email =" . "'" . $data[1] . "' AND " . " 	date_of_birth =" . "'" . $data[2] . "' AND " . "date_of_registration =" . "'" . $data[3] . "' AND " . "user_id =" . "'" . $data[5] . "' AND " . "category =" . "'" . $data[4] . "'";
				// 			
				//$condition = "date_of_birth =" . "'" . $data[2] . "' AND " . "date_of_registration =" . "'" . $data[3] . "'";
				//$condition = "user_name =" . "'" . $data[0] . "' AND " . "email =" . "'" . $data[1] . "' AND " . "user_id =" . "'" . $data[5] . "' AND " . "category =" . "'" . $data[4] . "'";
				// 
				$this->db->select('*');
				$this->db->from('userTable');
				$this->db->where($condition);
				$this->db->limit(1);
				$query = $this->db->get();
				if ($query->num_rows() == 1) {
					return true;
				} else {
					return false;
				}
		}


	}