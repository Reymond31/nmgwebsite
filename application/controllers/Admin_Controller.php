<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("nmgwebsite_model");


	}
	public function view()
	{
		
		$data['title'] = "NMG Resources Inc.";
		$data['content'] = $this->load->view('app/nmgwebsite/view', $data, true);
		$this->load->view('app/header', $data);
		$this->load->view('app/footer', $data);
		/*$this->load->view("app/nmgwebsite/view");*/
	}

}
?>