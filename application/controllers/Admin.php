<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	// public function __construct() {
	// 	parent::__construct();
	// 	$this->load->library('session');
	
	// 	// Check if admin is not logged in, redirect to login page
	// 	if (!$this->session->userdata("admin_uid")) {
	// 		redirect(base_url().'admin');  // Adjust the URL to the actual login URL
	// 	}
	// }
	
	function index()
	 {

		if($this->input->post()){
			$email = $this->input->post('email');
			$password =sha1($this->input->post('password'));

			$result = $this->db->get_where('admin1',array('email'=>$email, 'password'=>$password, 'account_status'=>1, 'role'=>'SUADMIN'))->result_array();
			$uid = $result[0]['id'];
			$first_name = $result[0]['first_name'];
			$last_name = $result[0]['last_name'];
			$email = $result[0]['email'];


			$this->session->set_userdata("admin_uid",$uid);
			$this->session->set_userdata("admin_first_name",$first_name);
			$this->session->set_userdata("admin_last_name",$last_name);
			$this->session->set_userdata("admin_email",$email);

			
		}
	if($this->session->userdata["admin_uid"]){
		// redirect to dashboard
		$page_data['page_title'] = "Dashboard";
		$page_data['page'] = "dashboard";
		$this->load->view('admin/index',$page_data);
	}else{
		$page_data['page_title'] = "Login Admin";
		$this->load->view('admin/login',$page_data);
	}

	}

	public function users($section, $id=false){
		switch($section){
			case "view":
				$users_data = $this->db->get("users")->result_array();
				$page_data['page_title'] = "Users";
				$page_data['user'] = $users_data;
				$page_data['page'] = "users/view";
				$this->load->view('admin/index',$page_data);
			break;

			case "add":
				// if ($this->input->post()){}
				$users_data = $this->db->get_where("users",array('id'=>$id))->result_array();
				$page_data['user_data'] = $users_data;
				$page_data['page_title'] = 'Add User';
				$page_data['page'] = "users/form";
				$this->load->view('admin/index',$page_data);
				break;
			case "delete":
				if($id){
					$this->db->where('id',$id);
					$this->db->delete('users');
					redirect("admin/users");

				}
			break;
		}
	}


	public function contact($section, $id=false){
		switch($section){
			case "view":
				$users_data = $this->db->get("contact")->result_array();
				$page_data['page_title'] = "contact";
				$page_data['contacts'] = $users_data;
				$page_data['page'] = "contact/view";
				$this->load->view('admin/index',$page_data);
			break;
			case "add":
				// if ($this->input->post()){}
				$users_data = $this->db->get_where("contact",array('id'=>$id))->result_array();
				$page_data['user_data'] = $users_data;
				$page_data['page_title'] = 'Add Contact';
				$page_data['page'] = "contact/form";
				$this->load->view('admin/index',$page_data);
				break;
			case "delete":
				if($id){
					$this->db->where('id',$id);
					$this->db->delete('contact');
					redirect("admin/contact");

				}
			break;
		}
	}


	public function admin($section, $id=false){
		switch($section){
			case "view":
				$users_data = $this->db->get("admin1")->result_array();
				$page_data['page_title'] = "Admin";
				$page_data['admin'] = $users_data;
				$page_data['page'] = "admint/view";
				$this->load->view('admin/index',$page_data);
			break;
			case "delete":
				if($id){
					$this->db->where('id',$id);
					$this->db->delete('admin1');
					redirect("admin/admint");

				}
			break;
		}
	}


	public function subscription($section, $id=false){
		switch($section){
			case "view":
				$users_data = $this->db->get("subscriptions")->result_array();
				$page_data['page_title'] = "subscription";
				$page_data['subscriptions'] = $users_data;
				$page_data['page'] = "subscription/view";
				$this->load->view('admin/index',$page_data);
			break;
			case "delete":
				if($id){
					$this->db->where('id',$id);
					$this->db->delete('subscription');
					redirect("admin/subscription");

				}
			break;
		}
	}
		


	function profile($action, $id=false){
			switch($action){
				case "view":
				$profile_data = $this->db->get("admin1")->result_array();
				$page_data['page_title'] = "Profile";
				$page_data['admin1'] = $profile_data;
				$page_data['page'] = "profile/view";
				$this->load->view('admin/index',$page_data);
			break;
					

				case "edit":
					if($this->input->post()){
						$data = array(
							first_name  => $this->input->post('first_name'),
							last_name  => $this->input->post('last_name'),
							email  => $this->input->post('email'),
							role  => $this->input->post('role')
						);
						$this->db->where('id',$id);
						$this->db->update('admin1',$data);
					}
				$profile_data = $this->db->get_where("admin1",array('id'=>$id))->result_array();
				$page_data['profile_data'] = $profile_data;
				$page_data['page_title'] = "profile/view";
				$this->load->view('admin/index',$page_data);
					break;
				}

	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url().'admin');

	}

	public function product($section, $id=false){
		switch($section){
			case "view":
				$users_data = $this->db->get("product")->result_array();
				$page_data['page_title'] = "product";
				$page_data['products'] = $users_data;
				$page_data['page'] = "product/view";
				$this->load->view('admin/index',$page_data);
			break;
			
			case "add":
				// if ($this->input->post()){}
				$users_data = $this->db->get_where("product",array('product_id'=>$product_id))->result_array();
				$page_data['product'] = $users_data;
				$page_data['page_title'] = 'Add product';
				$page_data['page'] = "product/form";
				$this->load->view('admin/index',$page_data);
				break;

			case "delete":
				if($id){
					$this->db->where('id',$id);
					$this->db->delete('product');
					redirect("admin/product");

				}
			break;
		}
	}

	
	
	public function order($section, $id=false){
		switch($section){
			case "view":
				$users_data = $this->db->get("orders")->result_array();
				$page_data['page_title'] = "order";
				$page_data['orders'] = $users_data;
				$page_data['page'] = "order/view";
				$this->load->view('admin/index',$page_data);
			break;

			case "delete":
				if($id){
					$this->db->where('id',$id);
					$this->db->delete('orders');
					redirect("admin/order");

				}
			break;
		}
	}
	

}

?>