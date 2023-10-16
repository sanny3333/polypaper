<?php 

class User_model extends CI_Model {

	function insertuser($data)
	{
		return $this->db->insert('users',$data);
	}
	
	function checkPassword($email,$password)
	{
<<<<<<< HEAD
        $query = $this->db->get_where('users', ['email' => $email]);
      
        if ($query->num_rows() > 0) {
            $user = $query->row();

            // Verify the provided password against the hashed password in the database
            if (password_verify($password, $user->password)) {
                // Password is correct
                return $user;
            }
        }
=======
        $pass = hash('sha256', $password);
        $this->db->where('email', $email);
        $this->db->where('password', $pass);
        $query = $this->db->get('reg');
        if ($query->num_rows() > 0) {
            return $query->row();

            }else{
                return false;

            }
>>>>>>> 07563fec3af5e235f6fb18eeee3ea1a0bf8a92db

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