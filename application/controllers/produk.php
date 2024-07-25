<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

    public function index()
    {
        $data['judul'] = 'Produk';
        $this->load->view('template/header', $data);
        $this->load->view('page/produk');
        $this->load->view('template/footer');
    }

}

/* End of file Controllername.php */
