<?php 

class User_model extends CI_Model {

	function insertuser($data)
	{
		return $this->db->insert('reg',$data);
	}


	function checkPassword($email,$password)
	{
        $pass = hash('sha256', $password);
        $this->db->where('email', $email);
        $this->db->where('password', $pass);
        $query = $this->db->get('users');
		//print_r($this->db->last_query());die()
        if ($query->num_rows() > 0) {
            return $query->row();

            }else{
                return $this->db->last_query();

            }

        // User not found or password is incorrect
        return false;

	}

}