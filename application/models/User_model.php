<?php 

class User_model extends CI_Model {

	function insertuser($data)
	{
		return $this->db->insert('users',$data);
	}


	function checkPassword($email,$password)
	{
        $pass = hash('sha256', $password);
        $this->db->where('email', $email);
        $this->db->where('password', $pass);
        $query = $this->db->get('users');
        if ($query->num_rows() > 0) {
            return true;
        }
        else{
            return false;
        }

        // User not found or password is incorrect

	}

}