<?php

class Contact_model extends CI_model{
    function create($formArray){
        $this->db->insert('contact',$formArray);
    }
    

}


?>