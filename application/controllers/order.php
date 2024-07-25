<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

    public function index()
    {
        $data['judul'] = 'Order List';
        $this->load->view('template/header', $data);
        $this->load->view('page/order');
        $this->load->view('template/footer');
    }

}

/* End of file Controllername.php */
