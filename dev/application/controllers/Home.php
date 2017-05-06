<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	function __construct()
	{
 		parent::__construct();
		session_start();
		//session_destroy();
 		//$this->load->library('session');
		$this->load->database();
		$this->load->library('general_functions');
		$this->load->helper('url');

		#Models
		$this->load->model("order_model", "orders");
		
	}	


	public function index()
	{
		$this->load->view('index');
	}
	

	# Call print form ------------------------------------------------------
	public function printIt()
	{
		$this->load->view('print-now');
	}
	

	public function review()
	{
		//echo "<pre>";
		//print_r($_SESSION);
		$this->load->view('review');
	}
	

	# Order Validation and Review --------------------------------------------
	public function confirm_order()
	{
		if( $this->input->post('printorder') )
		{
			unset($_SESSION['file']);
			unset($_SESSION['user_info']);
			unset($_SESSION['data']);
    
    		$number_of_files = sizeof($_FILES['file']['tmp_name']);
    		$files = $_FILES['file'];
    		$errors = array();
    		
    		for($i=0;$i<count($files);$i++)
    		{
      			if($_FILES['file']['error'][$i] != 0) 
		  			$errors[$i][] = 'Couldn\'t upload file '.$_FILES['file']['name'][$i];
    		}
    		
    		if(sizeof($errors)==0)
    		{
	  			$number_of_files = sizeof($_FILES['file']['tmp_name']);
	  			$files = $_FILES['file'];
	  			$errors = array();
      			$this->load->library('upload');
      			$config['upload_path'] = DIR_WS_UPLOAD_IMAGES;
      			$config['allowed_types'] = IMAGE_ALLOWED_TYPES;
      
      			for ($i = 0; $i < count($files); $i++)
      			{
        			$_FILES['file']['name'] = $files['name'][$i];
        			$_FILES['file']['type'] = $files['type'][$i];
        			$_FILES['file']['tmp_name'] = $files['tmp_name'][$i];
        			$_FILES['file']['error'] = $files['error'][$i];
        			$_FILES['file']['size'] = $files['size'][$i];
        			//now we initialize the upload library
        			$this->upload->initialize($config);
        			// we retrieve the number of files that were uploaded
        			if ($this->upload->do_upload('file'))
        			{
          				$data['uploads'][$i] = $this->upload->data();
        			}
        			else
        			{
          				$data['upload_errors'][$i] = $this->upload->display_errors();
        			}
      			}
    		}
    		else
    		{
      			print_r($errors);
	  			exit;
    		}
       
       		if( !empty($data['uploads']) && isset($data['uploads']) )
       		{
	    		foreach( $data['uploads'] as $fileArray )
	    		{
					$_SESSION['file'][]=$fileArray['file_name'];
				}
	   		}
		
			$_SESSION['user_info']['name']=$this->input->post('name');
			$_SESSION['user_info']['email']=$this->input->post('email');
			$_SESSION['user_info']['contact']=$this->input->post('contact');
			$_SESSION['user_info']['alternate_contact']=$this->input->post('alternate_contact');
			$_SESSION['user_info']['vendor']=$this->input->post('vendor');
			$Mydata=array();
		
			foreach( $this->input->post('data') as $key=>$value )
			{
				foreach($value as $key1=>$value1){
					$Mydata['data'][$key][]=$value1;	
				}
			}
		
			$_SESSION['data']=$this->general_functions->reArrayData($Mydata['data']);
			
			if( !empty($_SESSION) )
			{
				redirect('review');
			}
		}
	}


	public function thankyou()
	{
		//echo "<pre>";
		//print_r($_SESSION);
		
		if( isset($_SESSION['user_info']) )
		{
			$orderid = $this->orders->insOrder();
			if( $orderid!="" && !empty($_SESSION['data']) )
			{
				$this->orders->insOrderDetail($orderid);
			}
		}
		//echo CI_VERSION;
		$this->load->view('thanku-page');
	}


	# Vendor login ----------------------------------------------------------
	public function login()
	{
		if( $this->input->post() )
		{
			$vemail = $this->input->post("log_usr");
			$vpass = $this->input->post("log_pass");

			if( $vemail!="" && $vpass!="" )
			{
				
			}
			else
			{
				$data['logErr'] = "Please fill all fields";
			}
		}

		$this->load->view('vendor-login', $data);
	}

}
