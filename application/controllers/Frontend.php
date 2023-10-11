<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {

// Home =============>
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/index');
		$this->load->view('templates/footer');
	}

//about ============>
	public function about()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/about');
		$this->load->view('templates/footer');
	}




//products=========>


	public function products()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/products');
		$this->load->view('templates/footer');
	}
	public function product1()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/products/product1');
		$this->load->view('templates/footer');
	}
	public function product2()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/products/product2');
		$this->load->view('templates/footer');
	}
	public function product3()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/products/product3');
		$this->load->view('templates/footer');
	}
	public function product4()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/products/product4');
		$this->load->view('templates/footer');
	}
	public function product5()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/products/product5');
		$this->load->view('templates/footer');
	}
	public function product6()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/products/product6');
		$this->load->view('templates/footer');
	}


//products end=================================================


//Blogs Start============>



	public function blogs()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/blog');
		$this->load->view('templates/footer');
	}
	public function blog1()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/blogs/blog1');
		$this->load->view('templates/footer');
	}
	public function blog2()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/blogs/blog2');
		$this->load->view('templates/footer');
	}
	public function blog3()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/blogs/blog3');
		$this->load->view('templates/footer');
	}
	public function blog4()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/blogs/blog4');
		$this->load->view('templates/footer');
	}
	public function blog5()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/blogs/blog5');
		$this->load->view('templates/footer');
	}
	public function blog6()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/blogs/blog6');
		$this->load->view('templates/footer');
	}
	//blog end ========>


	//contact =======>

	public function contact()
	{
		$this->load->model('Contact_model');
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('phone_no','Phone_no','required');
		$this->form_validation->set_rules('subject','Subject','required');
		$this->form_validation->set_rules('message','Message','required');

		if($this->form_validation->run()==false){
			$this->load->view('templates/header');
			$this->load->view('pages/contact');
			$this->load->view('templates/footer');

		}else{

			 $formArray=array();
			 $formArray['name']=$this->input->post('name');
			 $formArray['email']=$this->input->post('email');
			 $formArray['phone_no']=$this->input->post('phone_no');
			 $formArray['subject']=$this->input->post('subject');
			 $formArray['message']=$this->input->post('message');
			 $formArray['created_at']= date('Y-m-d');

			 $this->Contact_model->create($formArray);
			 $this->session->set_flashdata('success','Thank you !! We will meet soon.');
			//  $this->session->set_flashdata('failure','contacted successfully !!!!.');
			 redirect(base_url().'index.php/Frontend/contact');

			 

		}




		
	}
	public function giveacall()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/giveacall');
		$this->load->view('templates/footer');
	}
	function registerNow()
	{

		print_r($this->input->post());
		die;
		if($_SERVER['REQUEST_METHOD']=='POST')
		{
			$this->form_validation->set_rules('username','User Name','required');
			$this->form_validation->set_rules('email','Email','required');
			$this->form_validation->set_rules('password','Password','required');

			if($this->form_validation->run()==TRUE)
			{
				$username = $this->input->post('username');
				$email = $this->input->post('email');
				$password = $this->input->post('password');

				$data = array(
					'username'=>$username,
					'email'=>$email,
					'password'=>sha1($password),
					'status'=>'1'
				);
				print_r($this->input->post());
				die;




				$this->load->model('user_model');
				$this->user_model->insertuser('reg',$data);
				$this->session->set_flashdata('success','Successfully User Created');
				redirect(base_url().'Frontend/login');
			}
		}
	}

	function login()
	{
		$this->load->view('templates/header');
		$this->load->view('login');
		$this->load->view('templates/footer');

	}

	function loginnow()
	{
		if($_SERVER['REQUEST_METHOD']=='POST')
		{
			$this->form_validation->set_rules('email','Email','required');
			$this->form_validation->set_rules('password','Password','required');
			if($this->form_validation->run()==TRUE)
			
			{
				$email = $this->input->post('email');
				$password = $this->input->post('password');
				$password = sha1($password);


				$this->load->model('user_model');
				$status = $this->user_model->checkPassword($password,$email);
				
				if($status!=false)
				{
					$username = $status->username;
					$email = $status->email;

					$session_data = array(
						'username'=>$username,
						'email' => $email,
					);

					$this->session->set_userdata('UserLoginSession',$session_data);

					redirect(base_url('Frontend/dashboard'));
				}
				else
				{
					$this->session->set_flashdata('error','Email or Password is Wrong');
					redirect(base_url('frontend/login'));
				}

			}
			else
			{
				$this->session->set_flashdata('error','Fill all the required fields');
				redirect(base_url('frontend/login'));
			}
		}
	}

	

	function registration()
	{
		$this->load->view('templates/header');
		$this->load->view('signup');
		$this->load->view('templates/footer');

	}
	function dashboard()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/giveacall');
		$this->load->view('templates/footer');

	}

	function logout()
	{
		session_destroy();
		redirect(base_url('index.php/Frontend/login'));
	}
	public function send_emails_to_subscribers() {
        // Call the send_mail function from the Subscription_model
        $this->Subscription_model->send_mail();
        
        // Optionally, you can redirect or display a success message
        $data['message'] = 'Emails sent successfully to subscribers.';
        $this->load->view('success_view', $data);
    }
	public function send_email() 
	{
		print_r($send);die();

		$send = send_mail('patilkirtiraj1617@gmail.com',"hellokjh");
		print_r($send);die();
			// Load the Email library and PHP Mailer library
			$this->load->library('email');
			
		
			// Load the SubscriberModel
			$this->load->model('Subscription_model');
		
			// Get the email address from the subscription form
			$email = $this->input->post('email'); // Assuming the form field is named 'email'
		    
			// Validate the email address (you can add more validation)
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				// Handle invalid email address
				echo 'Invalid email address.';
				return;
			}
		
			// Check if the email address is already subscribed
			if ($this->Subscription_model->isSubscribed($email)) {
				// Handle case where the email address is already subscribed
				echo 'Email address is already subscribed.';
				return;
			}
			else{
		
			// Insert the subscriber's email into the database
			$inserted = $this->Subscription_model->insertSubscriber($email);
			
			}
		
			if ($inserted) {
				// Send a confirmation email
				$this->Subscription_model->sendConfirmationEmail($email);
				
				// Display a success message or redirect
				echo 'Subscription successful. Check your email for confirmation.';
			} else {
				// Handle database insertion error
				echo 'Subscription failed. Please try again later.';
			}

			    
		

	}

	

}





