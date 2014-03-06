<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }

    function login($data) {


        $this->db->select('id, user_name, password');
        $this->db->from('user');
        $this->db->where('user_name', $data['user_name']);
        $this->db->where('password', sha1($this->config->item('encryption_key') . $data['password']));
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            $data = $query->result_array();

            return $data[0];
        } else {

            return false;
        }
    }

}
