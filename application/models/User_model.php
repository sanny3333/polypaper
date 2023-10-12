<?php 

class User_model extends CI_Model {

	function insertuser($data)
	{
		return $this->db->insert('reg',$data);
	}
	
	function checkPassword($email,$password)
	{
        $hashed_password = $this->db->get('reg', ['password'], ['username' => $username])->row()->password;

        // Verify the user's password.
        if (password_verify($password, $hashed_password))
         {
            return $query->row();
        }else {
            return null;
        }

	}
	public function lock_user($user_id, $duration = 300) {
        $this->db->update('reg', array('locked' => 1,'locked_until'=> time() + $duration), array('user_id' => $user_id));
    }

    public function unlock_expired_users() {
        $this->db->where('locked_until <', time());
        $this->db->update('reg', array('locked' => 0));
    }
}