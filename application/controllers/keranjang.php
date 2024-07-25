<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keranjang extends CI_Controller {

    public function index()
    {
        $data['judul'] = 'Keranjang';
        $this->load->view('template/header', $data);
        $this->load->view('page/keranjang');
        $this->load->view('template/footer');
    }

}

/* End of file Controllername.php */
