

<?php
class Subscription_model extends CI_Model {

    public function save_data($data)
    {
        // Insert or update data in your database table as needed
        // Return a success or error message

        if ($this->db->insert('subscriptions', $data)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}
?>
