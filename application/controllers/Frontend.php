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
			redirect(base_url().'Frontend/contact');

			 

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

		    $this->load->library('form_validation');
		    $this->load->helper('form');
			// $this->form_validation->set_rules('username','User Name','trim|required|alpha');
			$this->form_validation->set_rules('username','Username','required|alpha');
			// $this->form_validation->set_rules('email','Email','trim|required|valid_email|is_unique[reg.email]');
			$this->form_validation->set_rules('email','Email','required|is_unique[reg.email]');
			$this->form_validation->set_rules('phoneno','Phone','required');
			$this->form_validation->set_rules('mobile', 'Mobile Number', 'trim|required|numeric'); 
			// $this->form_validation->set_rules('password','Password','trim|required|sha1');
			$this->form_validation->set_rules('password','Password','required');


			
			if($this->form_validation->run()==FALSE)
			{
				$this->load->view('templates/header');
				$this->load->view('signup');
				$this->load->view('templates/footer');
			}
			else
			{
				
				$data = array(
					'username'=>$this->input->post('username'),
					'email'=>$this->input->post('email'),
					'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
					'status'=>'1'
				);

				$this->load->model('user_model');
				$checking=$this->user_model->insertuser($data);
				
				if($checking)
				{
					$this->session->set_flashdata('error','Registered Successfully.! Go to login');
					$this->load->view('login');
				}
				else
				{
					$this->session->set_flashdata('error','Something went wrong');
					redirect(base_url('Frontend/registration'));
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
		 // Validate the login form data
		 $this->load->library('form_validation');
		 $this->load->helper('form');
        // Set the form validation rules
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        // If the form validation fails
		
        if ($this->form_validation->run() == FALSE) {
            // Display the login form
			$this->load->view('templates/header');
			$this->load->view('login');
			$this->load->view('templates/footer');
			
        } else {
            // Validate the user's credentials
            $email = $this->input->post('email');
            $password = $this->input->post('password');
			
            // Load the user model
            $this->load->model('User_model');
			
            // Get the user's data
            $user = $this->User_model->checkPassword($email,$password);
			$hashed_p=md5($password);
            // If the user exists and the password is correct
            if ($user) {
                // Log the user in
				$this->load->view('templates/header');
				$this->load->view('login', array('error' => 'Login successfully.'));
				$this->load->view('templates/footer');
            } else {
				$login_attempt_count = $this->session->userdata('login_attempt_count');
				if (!$login_attempt_count) {
					$login_attempt_count = 0;
				}
	
				// Increment the login attempt count
				$login_attempt_count++;
	
				// Set the login attempt count in the session
				$this->session->set_userdata('login_attempt_count', $login_attempt_count);
	
				// Check the login attempt count
				if ($login_attempt_count >= 3) {
					// Lock the user's account
					$this->user_model->lock_user($user['user_id'], time() + 300); // Lock the user for 5 minutes
	
					// Redirect the user to the login page with an error message
					$this->load->view('templates/header');
					$this->load->view('login', array('error' => 'Your account has been locked due to too many failed login attempts.'));
					$this->load->view('templates/footer');
						} 
				else{
					$this->load->view('templates/header');
					$this->load->view('login', array('error' => 'Invalid username or password.'));
					$this->load->view('templates/footer');
				}
                // Display an error message
                //$this->load->view('login', ['error' => 'Invalid username or password.']);
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
}





