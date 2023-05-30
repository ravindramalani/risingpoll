<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Db_auth extends CI_Model 
{
    public function register($data){

        $this->db->insert('users', $data);
            if($this->db->insert_id())
            {
                return true;
            }else{
                return false;
            }
             
    }
    public function getuser(){
        
        $query=$this->db->get('users')->row_array();
    }
    public function login($data){
        $val = $this->db->where('email',$data['email'])->where('password',$data['password'])->get('users')->row_array();
        if($val!=NULL){
            return $val;
        }  
    }

    public function forgotpassword($email){
        $this->db->select('email');
        $this->db->from('users'); 
        $this->db->where('email', $email); 
        $query=$this->db->get();
        return $query->row_array();
    }

    public function sendpassword($data){

        $this->load->library('email');
        
       
        $email = $data['email'];
        $query1 = $this->db->query("SELECT * FROM users WHERE email = '".$email."'");
        $row->$query1->result_array();
        if($query1->num_rows() > 0){
            $plainpassowrd = "";
            $plainpassword = rand(000000,999999);
            $newpass['password'] = md5($plainpassword);
            $this->db->where('email',$email);
            $this->db->update('users',$newpass);
          //  $mail_message='Dear '.$row[0]['first_name'].','. "\r\n";
          //  $mail_message.='Thanks for contacting regarding to forgot password,<br> Your <b>Password</b> is <b>'.$passwordplain.'</b>'."\r\n";
          //  $mail_message.='<br>Please Update your password.';
          //  $mail_message.='<br>Thanks & Regards';
                   
           

       
             
    }
    else
    {  
     $this->session->set_flashdata('msg','Email not found try again!');
     redirect(base_url().'auth/Login','refresh');
    }
        
    }
}