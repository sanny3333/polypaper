<?php 

class User_model extends CI_Model {

	function insertuser($data)
	{
		return $this->db->insert('users',$data);
	}
	
	function checkPassword($email,$password)
	{
		$hpassword=md5($password);
		$query = $this->db->get_where('reg', ['email' => $email, 'password' => $hpassword]);
		
        if ($query->num_rows() > 0) {
            return $query->row();
        }else {
            return null;
        }

	}
	public function lock_user($user_id, $duration = 300) {
        $this->db->set('locked', 1);
        $this->db->set('locked_until', time() + $duration);
        $this->db->where('user_id', $user_id);
        $this->db->update('reg');
    }

    public function unlock_user($user_id) {
        $this->db->set('locked', 0);
        $this->db->where('user_id', $user_id);
        $this->db->update('reg');
    }

    public function unlock_expired_users() {
        $this->db->where('locked_until <', time());
        $this->db->update('reg', array('locked' => 0));
    }
}