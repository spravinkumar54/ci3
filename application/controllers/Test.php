<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
	
	public function index()
	{
		$this->load->model('my_first');
		$name['user'] = $this->my_first->index();
		// var_dump($name);
	//	$name = $this->my_first;
		$this->load->view('printname',$name);
	}

}
?>