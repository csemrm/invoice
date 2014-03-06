<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pwd_reset_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }
    public function pwd_reset() {
        $uname = $this->input->post('uname');
        $data = array(
            'user_name' => $uname
        );
        $query = $this->db->where($data)->get('user');
        if($query){
            $res_num = $query->num_rows();
            if($res_num>0)
            {
                // User Email Found
                $res_array = $query->row_array();
                $fullname = $res_array['full_name'];
                $email = $res_array['email'];
                $user = $res_array['user_name'];
                $password = $res_array['password'];
                
                //// Send Email to User Start.
                $query2 = $this->db->where('id',1)->get('web_setting');
                $res_array2 = $query2->row_array();
                $from = $res_array2['email'];
                $from_name = $res_array2['com_name'];
                $to = $email;
                $subject = "Password Recovery";
                $message = "Dear $fullname,\r\n\r\nYou or someone request for Password Recovery.\r\nYour Account Details-\r\nUserName: $user\r\nPassword: $password\r\n\r\nThank you\r\n$from_name";
                $headers = 'From: '. $from . "\r\n" .
                    'Reply-To: '. $from . "\r\n" .
                    'X-Mailer: PHP/' . phpversion();
                ///mail($to, $subject, $message, $headers);
                //// Send Email To User End..
                $msg = "Password Send To $to";
            }
            else
            {
                $msg = "User Name Not Found.";
                /// User Email Not Found
            }
        }
        else{$msg = "Facing Some Problem.Try Later.";}
        return $msg;
    }
}
