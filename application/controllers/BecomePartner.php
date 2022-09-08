<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BecomePartner extends CI_Controller{
	function __construct()
	{
		parent::__construct();// you have missed this line.
	//	$this->load->database();
		include APPPATH . 'third_party\\razorpay-php\\Razorpay.php';
	}
	public function index()
	{
		$this->load->view('partnerform');
	}
	public function partners()
	{
		$this->load->model('partnerpage','pp');
		$details['record'] = $this->pp->userlist();
		//print_r($details);
		$this->load->view('partnerlist',$details);
	}
	public function interested()
	{
		$data = array(  
                        'name'     => $this->input->post('name'),  
                        'mobile'  => $this->input->post('mobile'),  
                        'city'   => $this->input->post('city')  
                        );
		if($data['mobile'] == "" || $data['mobile'] == " " || is_nan($data['mobile']) )
		{
			 header("location:../becomepartner");
			 exit();
		}
		 $sdata['selecteddata'] = $this->db->query("SELECT *, count(mobile) FROM partners WHERE mobile =".$data['mobile'])->result_array();
		 if(($sdata['selecteddata'][0]['count(mobile)']) == 0)
		{
			$sdata = $this->db->insert("partners",$data);
			if($sdata)
			{
				$partner_id = $this->db->insert_id();
				var_dump($partner_id);
			}
			// $sdata = $this->db->query("SELECT LAST_INSERT_ID()");

		}
		else
		{
			$this->load->view("additionaldetails-p", $sdata);	
		}
	}


}

?>