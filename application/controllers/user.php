<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
        
        function __construct() {
            parent::__construct();
            $this->_CI = & get_instance();
            $this->load->model('user_model');
            $this->load->library('session');
        }
	public function index()
	{
                $this->userlist();
	}
        public function userlist(){
            $logined = $this->session->userdata('logged_in');
                if($logined){ 
                   $data = $this->session->all_userdata();
                   $data['users'] = $this->user_model->userlist();
                   $data['web_info'] = $this->web_setting_model->web_info();
                   $this->load->view('userlist',$data);   
                }
                else{
                    redirect(base_url('index.php/login'));
                    exit();
                 }
        }
        public function user_add(){
            $logined = $this->session->userdata('logged_in');
                if($logined){ 
                   $data = $this->session->all_userdata();
                   $data['web_info'] = $this->web_setting_model->web_info();
                   $this->load->view('useraddform',$data);   
                }
                else{
                    redirect(base_url('index.php/login'));
                    exit();
                 }
        }
        public function add(){
            $logined = $this->session->userdata('logged_in');
                if($logined){
                    $lcid = $this->input->post('id');
                    if($lcid==""){
                        ///// Add User Information
                        $is_add = $this->user_model->datainsert();
                        if($is_add){
                           redirect(base_url('index.php/user'));
                           exit(); 
                        }
                        else
                        { 
                           redirect(base_url('index.php/user'));
                           exit();   
                        }
                      }
                    else
                        {
                        ///// Update User Informaion
                        $is_up = $this->user_model->dataupdate();
                        if($is_up){
                           redirect(base_url('index.php/user'));
                           exit(); 
                        }
                        else
                        { 
                           redirect(base_url('index.php/user'));
                           exit();   
                        }
                    }
                }
                else{
                    redirect(base_url('index.php/login'));
                    exit();
                 }
            }
        public function edit($id=1){
            $logined = $this->session->userdata('logged_in');
                if($logined){ 
                   $data = $this->session->all_userdata();
                   $data['userinfo'] = $this->user_model->userinfo($id);
                   $data['web_info'] = $this->web_setting_model->web_info();
                   $this->load->view('useraddform',$data);   
                }
                else{
                    redirect(base_url('index.php/login'));
                    exit();
                 }
        }
        public function delete($id){
            $logined = $this->session->userdata('logged_in');
                if($logined){ 
                   $is_del = $this->user_model->userdelete($id);
                        if($is_del){
                           redirect(base_url('index.php/user'));
                           exit(); 
                        }
                        else
                        { 
                           redirect(base_url('index.php/user'));
                           exit();   
                        }   
                }
                else{
                    redirect(base_url('index.php/login'));
                    exit();
                 }
        }
}