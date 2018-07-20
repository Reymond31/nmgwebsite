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
		$data['landingpage'] = $this->load->view('app/nmgwebsite/landingpage', $data, true);
		$data['aboutus'] = $this->load->view('app/nmgwebsite/aboutus', $data, true);
		$data['services'] = $this->load->view('app/nmgwebsite/services', $data, true);
		$data['products'] = $this->load->view('app/nmgwebsite/products', $data, true);
		$data['contactus'] = $this->load->view('app/nmgwebsite/contactus', $data, true);
		$this->load->view('app/header', $data);
		$this->load->view('app/footer', $data);
		/*$this->load->view("app/nmgwebsite/view");*/
	}

}
?>