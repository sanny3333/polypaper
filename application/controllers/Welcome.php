<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function send_email() 
	{
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Email', 'required');
        // If the form validation fails
		
        // if ($this->form_validation->run() == FALSE) {
        //     // Display the login form
			
		// 	$this->load->view('templates/header');
		// 	$this->load->view('login');
		// 	$this->load->view('templates/footer');
			
        // } else {
            $email=$this->input->post('email');
            $data = array(
                
                'email'=>$email,
                'is_subscribed'=>'1'
            );
            $this->load->model('Subscription_model');
			
            // Get the user's data
            $user = $this->Subscription_model->save_data($data);
            // If the user exists and the password is correct
            if ($user) {
                // Log the user in
				$send=send_mail($email,"Thank you for subscribe to our website👍,visit again!!😊 & Thank you for choosing to stay connected with us.we're exicted to keep you informed and engaged with our website's content.If you have any question,feeback, or suggestions,please don't hesitate to reach out to us at[contact email]. we value your input and forward to serving you better.");
                redirect(base_url());
                die();
				
            } else {
				
					echo"failed";
                    die();
				}
			
            //}

       
		
	}


   
// application/controllers/AjaxController.php
// class AjaxController extends CI_Controller {
//     public function __construct() {
//         parent::__construct();
//         $this->load->model('Subscription_model');
//     }

//     public function submitData() {
//         $data = $this->input->post();
//         // Validate and process data
//         $insert_id = $this->Subscription_model->save_data($data);
//         print_r($data);
//         die;

//         if ($insert_id) {
//             $this->sendEmail($data); // Send email after successful data submission
//             $response = array('status' => 'success', 'message' => 'Data submitted and email sent');
//         } else {
//             $response = array('status' => 'error', 'message' => 'Data submission failed');
//         }

//         echo json_encode($response);
//     }

//     private function sendEmail($data) {
//         $this->load->library('email');
//         $this->email->from('your@gmail.com', 'Your Name');
//         $this->email->to('recipient@gmail.com');
//         $this->email->subject('New Data Submission');
//         $this->email->message('New data submitted: ' . print_r($data, true));

//         $this->email->send();
//     }
 }
?>
