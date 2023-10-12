<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function send_email() 
	{

		$send = send_mail('sanrajchougale1429@gmail.com',"hi");
		print_r($send);die();
	}
}


// application/controllers/AjaxController.php
class AjaxController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('YourModel');
    }

    public function submitData() {
        $data = $this->input->post();
        // Validate and process data
        $insert_id = $this->YourModel->insertData($data);

        if ($insert_id) {
            $this->sendEmail($data); // Send email after successful data submission
            $response = array('status' => 'success', 'message' => 'Data submitted and email sent');
        } else {
            $response = array('status' => 'error', 'message' => 'Data submission failed');
        }

        echo json_encode($response);
    }

    private function sendEmail($data) {
        $this->load->library('email');
        $this->email->from('your@gmail.com', 'Your Name');
        $this->email->to('recipient@gmail.com');
        $this->email->subject('New Data Submission');
        $this->email->message('New data submitted: ' . print_r($data, true));

        $this->email->send();
    }
}
