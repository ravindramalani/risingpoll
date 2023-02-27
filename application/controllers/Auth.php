<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('uid')){
            redirect(base_url('dashboard'));
        }
        $this->load->model('db_auth');
    }
    public function login(){
        $this->load->view('frontent/login');
    }

    public function signup(){
        $this->load->view('frontent/signup');
    }
    public function check_login(){
        $this->form_validation->set_rules('txtpassword', 'Password', 'required');
        $this->form_validation->set_rules('txtemail', 'Email', 'valid_email|required');
        if($this->form_validation->run()){ 
            $data['email'] = $this->input->post('txtemail');
            $data['password'] = md5($this->input->post('txtpassword'));
            $login = $this->db_auth->login($data);
            if($login)
            {
                $this->session->set_userdata('uid',$login['id']);	
                $this->session->set_userdata('fname',$login['name']);
                redirect(base_url('dashboard'));
            }else{
                $this->session->set_flashdata('error','<div class="text-danger">Invalid login details.Please try again.</div>');
                redirect('auth/login');
            }
        }else{
            if(form_error('txtpassword')){
                $this->session->set_flashdata('password','<div class="text-danger">'.form_error('txtpassword').'</div>');
            }
            if(form_error('txtemail')){
                $this->session->set_flashdata('email','<div class="text-danger">'.form_error('txtemail').'</div>');
            }
            $url = $_SERVER['HTTP_REFERER'];
            redirect($url);
        }
    }
    public function register(){
        $this->form_validation->set_rules('txtname', 'Name', 'required');
        $this->form_validation->set_rules('txtemail', 'Email', 'is_unique[users.email]|valid_email|required');
        $this->form_validation->set_rules('txtpassword', 'Password', 'required');
        $this->form_validation->set_rules('accept', 'T&c ', 'required');
        if($this->form_validation->run()){ 
            $data['name'] = $this->input->post('txtname');
            $data['email'] = $this->input->post('txtemail');
            $data['password'] = md5($this->input->post('txtpassword'));
            $data['client_ip'] = $this->get_client_ip();
            if($this->db_auth->register($data))
            {
                $this->session->set_flashdata('error','Registered success');
                redirect('auth/login');
            }else{
                $this->session->set_flashdata('error','Invalid login details.Please try again.');
                redirect('signin');
            }
        }else{
            if(form_error('txtname')){
                $this->session->set_flashdata('name','<div class="text-danger">'.form_error('txtname').'</div>');
            }
            if(form_error('txtemail')){
                $this->session->set_flashdata('email','<div class="text-danger">'.form_error('txtemail').'</div>');
            }
            if(form_error('txtpassword')){
                $this->session->set_flashdata('password','<div class="text-danger">'.form_error('txtpassword').'</div>');
            }
            if(form_error('accept')){
                $this->session->set_flashdata('accept','<div class="text-danger">'.form_error('accept').'</div>');
            }
            $url = $_SERVER['HTTP_REFERER'];
            redirect($url);
        }
    }
    public function get_client_ip() {
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP'))
            $ipaddress = getenv('HTTP_CLIENT_IP');
        else if(getenv('HTTP_X_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if(getenv('HTTP_X_FORWARDED'))
            $ipaddress = getenv('HTTP_X_FORWARDED');
        else if(getenv('HTTP_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if(getenv('HTTP_FORWARDED'))
           $ipaddress = getenv('HTTP_FORWARDED');
        else if(getenv('REMOTE_ADDR'))
            $ipaddress = getenv('REMOTE_ADDR');
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }
}