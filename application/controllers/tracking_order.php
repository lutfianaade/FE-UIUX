<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tracking_Order extends CI_Controller {

    public function index()
    {
        $data['judul'] = 'Tracking Order';
        $this->load->view('template/header', $data);
        $this->load->view('page/tracking_order');
        $this->load->view('template/footer');
    }

}

/* End of file Controllername.php */
