<?php 

class User_model extends CI_Model {

	function insertuser($data)
	{
		return $this->db->insert('users',$data);
	}
	
	function checkPassword($email,$password)
	{
        $query = $this->db->get_where('users', ['email' => $email]);
      
        if ($query->num_rows() > 0) {
            $user = $query->row();

            // Verify the provided password against the hashed password in the database
            if (password_verify($password, $user->password)) {
                // Password is correct
                return $user;
            }
        }

        // User not found or password is incorrect
        return false;

	}
	public function lock_user($user_id, $duration = 300) {
        $this->db->update('users', array('locked' => 1,'locked_until'=> time() + $duration), array('user_id' => $user_id));
    }

    public function unlock_expired_users() {
        $this->db->where('locked_until <', time());
        $this->db->update('users', array('locked' => 0));
    }
}