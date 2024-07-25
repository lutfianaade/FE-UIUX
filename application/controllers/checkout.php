<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

    public function index()
    {
        $data['judul'] = 'Checkout';
        $this->load->view('template/header', $data);
        $this->load->view('page/checkout');
        $this->load->view('template/footer');
    }

}

/* End of file Controllername.php */
