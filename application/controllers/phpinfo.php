<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Phpinfo extends CI_Controller {

    public function index() {
        print("CodeIgniter " . CI_VERSION);
        phpinfo();
    }

}