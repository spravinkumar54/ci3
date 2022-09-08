<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class PartnerPage extends CI_model{
	function __construct()
	{
		parent::__construct();// you have missed this line.
	//	$this->load->database();
	}
	
	public function userlist()
	{
		$details = $this->db->get('partners')->result_array();
		// print_r($details);
		// echo $this->db->last_query();
		return $details;
		
	}
	public function checkuserexist()
	{
		$details = $this->db->get_where('partners',array('mobile'=>mobile))->result_array();
		// print_r($details);
		// echo $this->db->last_query();
		return $details;
		
	}

}

?>