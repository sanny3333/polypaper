

<?php
class Subscription_model extends CI_Model {

    public function save_data($data)
    {
        // Insert or update data in your database table as needed
        // Return a success or error message

        if ($this->db->insert('subscriptions', $data)) {
            return array('email' => 'Data saved successfully.');
        } else {
            return array('email' => 'Error saving data.');
        }
    }
}
?>

