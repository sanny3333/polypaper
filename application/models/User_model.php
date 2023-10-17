<?php 

class User_model extends CI_Model {

	function insertuser($data)
	{
		return $this->db->insert('users',$data);
	}
	
	function checkPassword($username,$password)
	{
        
        $pass = hash('sha256', $password);
        //$query = $this->db->query'SELECT * FROM reg WHERE username='$username' OR email ='$username' AND password='$pass'';
        //$query = "SELECT * FROM reg WHERE username = '$username' OR email = '$username' AND password = '$pass'";
        $this->db->where('email', $username);
        $this->db->or_where('username', $username);
        $this->db->where('password', $pass);
        $query = $this->db->get('reg');
   
        //$this->db->where('email', $email);
        //$this->db->where('password', $pass);
        //$query = $this->db->get('reg');
        if ($query->num_rows() > 0) {
            
            return $query->row();

            }else{
                return false;

            }

        // User not found or password is incorrect
        

	}
	public function lock_user($user_id, $duration = 300) {
        $this->db->update('users', array('locked' => 1,'locked_until'=> time() + $duration), array('user_id' => $user_id));
    }

    public function unlock_expired_users() {
        $this->db->where('locked_until <', time());
        $this->db->update('users', array('locked' => 0));
    }
}