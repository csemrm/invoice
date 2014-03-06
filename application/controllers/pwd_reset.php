<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pwd_reset extends CI_Controller {
        
        function __construct() {
            parent::__construct();
            $this->_CI = & get_instance();
            $this->load->model('pwd_reset_model');
            
        }
	public function index()
	{
                if(isset($_POST['uname'])){
                 $data['info'] =  $this->pwd_reset_model->pwd_reset();
                 $data['web_info'] = $this->web_setting_model->web_info(); 
                 $this->load->view('pwd_reset',$data);
                }
                else{
                 $data['web_info'] = $this->web_setting_model->web_info();    
		 $this->load->view('pwd_reset',$data);
                }
	}
}