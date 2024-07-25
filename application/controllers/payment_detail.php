<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class payment_detail extends CI_Controller {

	public function index()
	{
		//Memuat view payment_detail.php
		$this->load->view('page/payment_detail');
	}
}
