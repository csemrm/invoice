<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }
    public function index(){ 
    }
    public function userlist(){
        return $this->db->get('user')->result_array();
    }
    public function userinfo($id){
        return $this->db->where('id',$id)->get('user')->result_array();
    }
    public function datainsert(){
        $uinfo = $this->session->all_userdata();
        $exit = $this->db->where('user_name',$this->input->post('user_name'))->get('user')->num_rows();
        if($exit>=1){
            return false;
        }else{
        $data = array(
        'user_name' => $this->input->post('user_name'),
        'password' => $this->input->post('password'),
        'email' => $this->input->post('email'),
        'full_name' => $this->input->post('fname'),
        'active' => $this->input->post('status')
         );
        $this->db->insert('user', $data);
        return ($this->db->affected_rows() != 1) ? false : true;
        }
    }

    public function userdelete($id){
        $data = array(
            'id' => $id
        );
        $data2 = array(
            'active' => 0
        ); 
        $this->db->where($data)->update('user',$data2);
        return ($this->db->affected_rows() != 1) ? false : true;
    }
    public function dataupdate(){
        $uinfo = $this->session->all_userdata();
        $id = $this->input->post('id');
        $data = array(
            'password' => $this->input->post('password'),
            'email' => $this->input->post('email'),
            'full_name' => $this->input->post('fname'),
            'active' => $this->input->post('status')
                );
        $this->db->where('id',$id)->update('user', $data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }
}