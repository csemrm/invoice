<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Secure_Controller extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->_CI = & get_instance();
        $this->load->model('login_model');
        $this->load->library('session');

        $logined = $this->session->userdata('logged_in');

        if (!$logined) {
            redirect(site_url('login'));
        }
    }

}
