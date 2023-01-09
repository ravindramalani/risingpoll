<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('uid')){
            redirect(base_url('auth/login'));
        }
        $this->load->model('db_create_poll');
    }
    public function index(){
        $data['signal'] = true;
        $data['polls'] = $this->db_create_poll->fetch_poll_all();
        $data['view'] = 0;
        foreach($data['polls'] as $key){
           $data['view'] += $key['view'] ;
        }
        $this->load->view('frontent/common/header',$data);
        $this->load->view('frontent/common/sidebar',$data);
		$this->load->view('frontent/dashboard',$data);
		$this->load->view('frontent/common/footer');
    }
    public function delete_poll($share_id){
        if($this->db_create_poll->delete_poll($share_id)){
            $url = $_SERVER['HTTP_REFERER'];
            redirect($url);
        }else{

        }
    }
    public function logout(){
        $this->session->unset_userdata('uid');
        $this->session->unset_userdata('fname');
        redirect(base_url('auth/login'));
    }
    public function update_user(){
        $this->form_validation->set_rules('txtname', 'Name', 'required');
        $this->form_validation->set_rules('txtemail', 'Email', 'valid_email|required');
        if($this->form_validation->run()){
            $data['name'] = $this->input->post('txtname');
            $data['email'] = $this->input->post('txtemail');
            if($this->input->post('txtpassword')){
                $data['password'] = md5($this->input->post('txtname'));
            }
            if($this->db_create_poll->db_update_user($data)){
                $this->session->set_flashdata('error','Updated');
                $url = $_SERVER['HTTP_REFERER'];
                redirect($url);
            }else{
                $this->session->set_flashdata('error','Fill all fields');
                $url = $_SERVER['HTTP_REFERER'];
                redirect($url);
            }
        }else{
            $this->session->set_flashdata('error','Fill all fields');
            $url = $_SERVER['HTTP_REFERER'];
            redirect($url);
        }
    }
    public function profile(){
        $data['signal'] = true;
        $data['profile'] = $this->db_create_poll->profile();
        $data['view'] = 0;
        $data['polls'] = $this->db_create_poll->fetch_poll_all();
        foreach($data['polls'] as $key){
           $data['view'] += $key['view'] ;
        }
        $this->load->view('frontent/common/header',$data);
        $this->load->view('frontent/common/sidebar',$data);
		$this->load->view('frontent/profile',$data);
		$this->load->view('frontent/common/footer');
    }
    
}