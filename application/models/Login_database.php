<?php

Class Login_Database extends CI_Model
{

	public function login($data)
	{

		$condition = "user_name =" . "'" . $data['username'] . "' AND " . "user_password =" . "'" . $data['password'] . "'";
		$this->db->select('*');
		$this->db->from('user_login');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();

		if ($query->num_rows() == 1)
		{
			return true;
		}
		else
		{
		return false;
		}
	}

	public function read_user_information($username)
	{

		$condition = "user_name =" . "'" . $username . "'";
		$this->db->select('*');
		$this->db->from('user_login');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();

		if ($query->num_rows() == 1)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}
	function form_insert($username,$data){
// Inserting in Table(students) of Database(college)
$this->db->from('user_login');
		$condition = "user_name =" . "'" . $username . "'";


$this->db->set('user_data',$data);
$this->db->where($condition);
$this->db->update('user_login');
}


}

?>

