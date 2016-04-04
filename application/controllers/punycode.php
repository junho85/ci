<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Punycode extends CI_Controller {

    public function index() {
        $this->load->view('header');
        $this->load->view('punycode');
        $this->load->view('footer');
    }

}