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
        $query = $this->db->get('reg');
        if ($query->num_rows() > 0) {
            return $query->row();

            }else{
                return false;

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