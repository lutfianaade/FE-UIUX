<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cpayment extends CI_Controller {

	public function index()
	{
		//Memuat view cpayment.php
		$this->load->view('page/cpayment');
	}
}
