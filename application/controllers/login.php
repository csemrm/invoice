<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->_CI = & get_instance();
        $this->load->model('login_model');
        $this->load->library('session');
    }

    public function index() {

        $logined = $this->session->userdata('logged_in');
        $data['web_info'] = $this->web_setting_model->web_info();



        if (!empty($_POST)) {
            $user = $this->login_model->login($_POST);


            if (is_array($user) && $user !== FALSE) {
                $this->session->set_userdata('logged_in', $user);
                redirect(site_url('invoice'));
            }

            $data['info'] = 'error';


            $this->load->view('login', $data);
        } else {
            $this->load->view('login', $data);
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect(site_url('login'));
        exit();
    }

}
