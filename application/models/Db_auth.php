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
    public function login($data){
        $val = $this->db->where('email',$data['email'])->where('password',$data['password'])->get('users')->row_array();
        if($val!=NULL){
            return $val;
        }  
    }
}