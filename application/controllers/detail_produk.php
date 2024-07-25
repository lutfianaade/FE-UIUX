<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_Produk extends CI_Controller {

    public function index()
    {
        $data['judul'] = 'Detail Produk';
        $this->load->view('template/header', $data);
        $this->load->view('page/detail_produk');
        $this->load->view('template/footer');
    }

}

/* End of file Controllername.php */
