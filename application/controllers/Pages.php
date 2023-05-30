<?php
    
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
        
     public function learnhow(){
        $this->load->view('frontent/common/header');
        $this->load->view('frontent/learn');
        $this->load->view('frontent/common/footer');
     }

     public function forgotpassword_action(){
        $email = $this->input->post('txtemail');
        $this->load->model('db_auth');
        
      
        $findemail = $this->db_auth->forgotpassword($email);
        if($findemail){
        $this->db_auth->sendpassword($email);
        $this->load->library('phpmailer_lib');
        $mail = $this->phpmailer_lib->load();
        $mail->setFrom('risingpoll@gmail.com', 'CEO');
        $mail->addAddress($email);
        $mail->Subject = 'Forgot Password';
        $mail->Body = 'This is your new OTP for logging into your account.';
       
       if ($this->email->send()) {
           echo 'Email sent successfully.';
           $this->load->view('otp');
       } else {
           echo 'Email sending failed.';
       }
    }
        
        else{
         $this->session->set_flashdata('msg','Email not find');
         redirect('auth/forgotpassword_fail','refresh');
        }
     //  $this->load->view('forgotpassword');
     }
 
     public function privacypolicy(){
        $this->load->view('privacypolicy');
     }
     public function terms(){
        $this->load->view('terms');
     }

     public function otp(){
        $this->load->view('otp');
     }
}