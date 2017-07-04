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
				$i = 1;	
				$flag = 1;
				$condition = "";
				// $condition = "user_name LIKE" . "'%" . $data[0] . "%' AND " . "email =" . "'" . $data[1] . "' AND " . " 	date_of_birth =" . "'" . $data[2] . "' AND " . "date_of_registration =" . "'" . $data[3] . "' AND " . "user_id =" . "'" . $data[5] . "' AND " . "category =" . "'" . $data[4] . "'";
				// 			
				//$condition = "date_of_birth =" . "'" . $data[2] . "' AND " . "date_of_registration =" . "'" . $data[3] . "'";
				//$condition = "user_name =" . "'" . $data[0] . "' AND " . "email =" . "'" . $data[1] . "' AND " . "user_id =" . "'" . $data[5] . "' AND " . "categANDy =" . "'" . $data[4] . "'";
				// 
				foreach ($data as $value) {
					if($value == "" || $value == "None") {

					} else {
						if ($flag == 0) {
							$condition = $condition." AND ";
						}
						switch ($i) {
							case 1:
								$condition = $condition . "user_name LIKE" . "'%" . $data[0] . "%'";$flag = 0;
								break;
							case 2:
								$condition = $condition . "email =" . "'" . $data[1] . "'";$flag = 0;
								break;
							case 3:
								$condition = $condition . "date_of_birth =" . "'" . $data[2] . "'";$flag = 0;
								break;									
							case 4:
								$condition = $condition . "date_of_registration =" . "'" . $data[3] . "'";$flag = 0;
								break;
							case 6:
								$condition = $condition . "user_id =" . "'" . $data[5] . "'";$flag = 0;
								break;
							case 5:
								$condition = $condition . "category =" . "'" . $data[4] . "'";$flag = 0;
								break;	
							case 7:
								$condition = $condition . "blood_group =" . "'" . $data[6] . "'";$flag = 0;
																
									
							
							default:
								# code...
								break;
						}
					}
					$i++;
				}
				$this->db->select('*');
				$this->db->from('userTable');
				$this->db->where($condition);
				$query = $this->db->get();
				// if ($query->num_rows() == 1) {
				// 	return true;
				// } else {
				// 	return false;
				// }
				return $query->result();
		}


	}
