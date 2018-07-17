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
		$this->load->view("app/nmgwebsite/view");
	}

}
?>