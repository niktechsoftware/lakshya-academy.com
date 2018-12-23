<?php
class Home extends CI_Controller{
	function index(){
		$data['title'] = "Welcome To Lakshya Academy";
		$data['body'] = "home";
		$this->load->view("include/template",$data);
	}
	
	function about(){
		$data['title'] = "Lakshya Academy :: About Us";
		$data['body'] = "about";
		$this->load->view("include/template",$data);
	}
	
	function course(){
		$data['title'] = "Lakshya Academy :: Courses";
		$data['body'] = "course";
		$this->load->view("include/template",$data);
	}
	
	function testSeries(){
		$data['title'] = "Lakshya Academy :: Test Series";
		$data['body'] = "testSeries";
		$this->load->view("include/template",$data);
	}
	
	function testSeriesmain(){
		$data['title'] = "Lakshya Academy :: Test Series";
		$data['body'] = "testSeriesmain";
		$this->load->view("include/template",$data);
	}
	
	
	
	function gallery(){
		$data['title'] = "Lakshya Academy :: Gallery";
		$data['body'] = "gallery";
		$this->load->view("include/template",$data);
	}
	
	function contact(){
		$data['title'] = "Lakshya Academy :: Contact";
		$data['body'] = "contact";
		$this->load->view("include/template",$data);
	}
	
	public function register()
	{
		
		$data['title'] = "Lakshya Academy :: Register";
	        $data['body'] = "register";
		$this->load->view("include/template",$data);
	
	
	}
	function result(){
		$id = $this->input->post("classv");
		$this->db->where("test_id",$id);
		$data['res'] = $this->db->get('result_test');
		$this->load->view("ajax/result",$data);
	}
	
	function message(){
		$name = $this->input->post("name");
		$email = $this->input->post("email");
		$mobile = $this->input->post("mobile");
		$msg = $this->input->post("message");
		
		$data = array(
			"name" => $name,
			"mobile" => $mobile,	
			"email" => $email,
			"msg" => $msg,
			"date" => date("Y-m-d")
		);
		
		$this->db->insert("inquiry",$data);
		redirect(base_url()."home/contact/true");
	}
	
	public function saveRegister(){
		
		$i = 'true';
		$j = 'true';
		
		$student_id=$this->input->post("student_id");
		$dt=date("y-m-d");
		$invoice = array(
				"invoice_no" => $student_id,
				"reason" => "New Admission",
				"invoice_date" => date("Y-m-d")
		);
		$this->db->insert("invoice_serial",$invoice);
		
		if($this->input->post("submitType") == 'student'){
			$isApprove = 'No';
		}
		elseif($this->input->post("submitType") == 'admin'){
			$isApprove = 'NO';
		}
		
		/*$photo_name = time().trim($_FILES['image']['name']);
		$this->load->library('upload');
		// Set configuration array for uploaded photo.
		$image_path = realpath(APPPATH . '../assets/images/stuImage');
		$config['upload_path'] = $image_path;
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['max_size'] = '120';
		$config['file_name'] = $photo_name;
		// Upload first photo and create a thumbnail of it.
		if (!empty($_FILES['image']['name'])) {
			$this->upload->initialize($config);
			if ($this->upload->do_upload('image')) {
				// ---------------------------------- Redirect Success Page ----------------------
				$i = 'true';
			}
			else{
				echo $this->upload->display_errors();
			}
		}
		
		$signature = time().trim($_FILES['signature']['name']);
		$this->load->library('upload');
		// Set configuration array for uploaded photo.
		$image_path = realpath(APPPATH . '../assets/images/stuImage');
		$config['upload_path'] = $image_path;
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['max_size'] = '100';
		$config['file_name'] = $signature;
		// Upload first photo and create a thumbnail of it.
		if (!empty($_FILES['signature']['name'])) {
			$this->upload->initialize($config);
			if ($this->upload->do_upload('signature')) {
				// ---------------------------------- Redirect Success Page ----------------------
				$j = 'true';
			}
			else{
				echo $this->upload->display_errors();
			}
		}*/
		
		if(($i == 'true') && ($j = 'true')){
			$data = array(
					//"student_id" => $this->input->post("student_id"),
					"name" => $this->input->post("name"),
					"fName" => $this->input->post("fname"),
					"address" => $this->input->post("address"),
					"city" => $this->input->post("city"),
					"state" => $this->input->post("state"),
					"pin" => $this->input->post("pin"),
					"mobile" => $this->input->post("mobile"),
					"dob" => date("Y-m-d", strtotime($this->input->post("dob"))),
					"heighQ" => $this->input->post("heighQ"),
					"courseApplied" => $this->input->post("courseApplied"),
					"timing" => $this->input->post("timing"),
					"gender" => $this->input->post("gender"),
					//"photo" => $photo_name,
					//"signature" => $signature,
					"email" => $this->input->post("email"),
					"password" => $this->input->post("password"),
					//"total_fee" => $this->input->post("total_fee"),
					//"fee_method" => $this->input->post("fee_method"),
					//"joinDate" => $dt,
					"joinTime" => date("h:i:s"),
					"isApprove" => $isApprove
			);
		
			if($this->db->insert("student_info",$data)){
				if($this->input->post("submitType") == 'student'){
					redirect("home/index");
				}
				elseif($this->input->post("submitType") == 'admin'){
					redirect("home/index");
				}
			}
		}
				
	}
}