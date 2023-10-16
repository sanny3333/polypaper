// controllers/SubscriptionController.php

class SubscriptionController extends CI_Controller {
public function __construct() {
parent::__construct();
$this->load->model('subscription_model');
}

public function index() {
$this->load->view('subscription_form');
}

public function subscribe() {
$email = $this->input->post('email');

// Validate email (you can add more validation)
$this->form_validation->set_rules('email', 'Email', 'required|valid_email');

if ($this->form_validation->run() == false) {
$this->load->view('subscription_form');
} else {
// Insert email into the database
$this->subscription_model->subscribe($email);

// Send confirmation email
$this->sendConfirmationEmail($email);

$data['message'] = 'Thank you for subscribing!';
$this->load->view('subscription_success', $data);
}
}

private function sendConfirmationEmail($email) {
// Implement code to send a confirmation email here
// You can use libraries like PHPMailer or built-in email functions
}
}
<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Subscription extends CI_Controller
{

    public function index()
    {
        $this->load->model('Subscription_model');
        $this->Subscription_model->save_data();
        $subscribe
        echo $subscribe;

    }

}

?>