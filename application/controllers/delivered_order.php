<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delivered_Order extends CI_Controller {

    public function index()
    {
        $data['judul'] = 'Delivered Order';
        $this->load->view('template/header', $data);
        $this->load->view('page/delivered_order');
        $this->load->view('template/footer');
    }

}

/* End of file Controllername.php */
