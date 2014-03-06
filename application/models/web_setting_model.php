<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Web_setting_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }
    public function web_info() {
        return $this->db->where('id',1)->get('web_setting')->row_array();
    }
}
