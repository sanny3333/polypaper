<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

public function report($section, $id=false){
		switch($section){
			case "view":
				// $users_data = $this->db->get("users")->result_array();
				// $page_data['page_title'] = "Users";
				// $page_data['user'] = $users_data;
				// $page_data['page'] = "userreport";
				$this->load->view('userreport',$page_data);
			break;

		}
	}

    public function reportcontact($section, $id=false){
		switch($section){
			case "view":
				$this->load->view('contactreport',$page_data);
			break;
            }
		}


    public function reportadmin($section, $id=false){
		switch($section){
			case "view":
				$this->load->view('adminreport',$page_data);
			break;
            }
		
		

		}


    public function reportsubscription($section, $id=false){
		switch($section){
			case "view":
				$this->load->view('subscriptionreport',$page_data);
			break;
            }
		
		

		}

		public function reportproduct($section, $id=false){
			switch($section){
				case "view":
					$this->load->view('productreport',$page_data);
				break;
				}
			}
			
		public function reportorder($section, $id=false){
			switch($section){
				case "view":
					$this->load->view('orderreport',$page_data);
				break;
				}
			}
	
}

?>