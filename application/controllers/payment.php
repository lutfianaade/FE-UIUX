<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller {

	public function index()
	{
		//Memuat view payment.php
		$this->load->view('page/payment');
	}
}
