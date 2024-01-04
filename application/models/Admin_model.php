<?php
class Admin_model extends CI_Model {

// function insertuser($data)
// {
// return $this->db->insert('admin',$data);
// }


 function checkPassword($email,$password)

{
$this->db->where('email', $email);
$this->db->where('password', $password);
$query = $this->db->get('admin1');
if ($query->num_rows() > 0) {
return true;
}
else{
return false;
}


}
}
?>