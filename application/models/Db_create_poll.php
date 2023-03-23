<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Db_create_poll extends CI_Model 
{
    public function db_insert_poll($data){
        $this->db->insert('poll_table', $data);
        if($this->db->insert_id()){
            return $this->db->insert_id();
        }else{
            return false;
        }
        
    }
    public function fetch_poll_all(){
        return $this->db->where('uid',$this->session->userdata('uid'))->get('poll_table')->result_array();  
    }
    public function fetch_poll($share_id,$status){
        if($status){
            $this->db->query("UPDATE poll_table SET view = view + 1 WHERE share_id = '$share_id'");
        }
        return $this->db->where('share_id',$share_id)->get('poll_table')->row_array();  
    }
    public function check_ip($ip,$share_id){
        if($this->db->where('share_id',$share_id)->where('ip_address',$ip)->get('ip_address_tbl')->row_array()){
            return true;
        }else{
            return false;
        }
    }
    public function update_poll($share_id,$op,$data,$ip=null,$name=null){
        $status = 0;
        if($ip){
            if($name){
                $this->db->query("UPDATE poll_table SET  poll = '$data' WHERE share_id = '$share_id'");
                $info = array('share_id'=>$share_id , 'ip_address' => $ip,'name' => $name,'selected_option' => $op);
                $this->db->insert('ip_address_tbl', $info);
            }else{ 
                $this->db->query("UPDATE poll_table SET  poll = '$data' WHERE share_id = '$share_id'");
                $info = array('share_id'=>$share_id , 'ip_address' => $ip);
                $this->db->insert('ip_address_tbl', $info);
            }
            if($this->db->affected_rows())
            {
                $status = 1;

            }else{
                $status = 0;
            }
        }
        else{
            if($name){
                $this->db->query("UPDATE poll_table SET  poll = '$data' WHERE share_id = '$share_id'");
                $info = array('share_id'=>$share_id,'name' => $name,'selected_option' => $op);
                $this->db->insert('ip_address_tbl', $info);
            }else{
                $this->db->query("UPDATE poll_table SET  poll = '$data' WHERE share_id = '$share_id'");
            }
            if($this->db->affected_rows())
            {
                $status = 1;
            }else{
                $status = 0;
            }
        }
        return $status;
        
    }
    public function db_update_poll($data,$share_id){
        $this->db->where(array('share_id'=>$share_id,'uid'=>$this->session->userdata('uid')))->update('poll_table', $data);
        if($this->db->affected_rows()){
            return true;
        }else{
            return false;
        }
    }
    public function recent_poll(){
        return $this->db->where('private','')->order_by("id", "desc")->get('poll_table', 6)->result_array();
    }
    public function top_poll(){
        return $this->db->where('private','')->order_by("view", "desc")->get('poll_table', 9)->result_array();
    }
    public function profile(){
        return $this->db->where(array('id'=>$this->session->userdata('uid')))->get('users')->row_array();
    }
    public function delete_poll($share_id){
        $this->db->trans_start();
        $this->db->where(array('share_id'=>$share_id,'uid'=>$this->session->userdata('uid')))->delete('poll_table');
        $this->db->where(array('share_id'=>$share_id))->delete('ip_address_tbl');
        $this->db->where(array('share_id'=>$share_id))->delete('view_count');
        $this->db->trans_complete();
        if($this->db->trans_status()){
            return true;
        }else{
            return false;
        }
    }
    public function delete_poll_user_side($share_id){
        $this->db->trans_start();
        $this->db->where(array('share_id'=>$share_id))->delete('poll_table');
        $this->db->where(array('share_id'=>$share_id))->delete('ip_address_tbl');
        $this->db->where(array('share_id'=>$share_id))->delete('view_count');
        $this->db->trans_complete();
        if($this->db->trans_status()){
            return true;
        }else{
            return false;
        }
    }
    public function fetch_names($share_id){
        return $this->db->where('selected_option is NOT NULL', NULL, FALSE)->where('share_id',$share_id)->get('ip_address_tbl')->result_array();
    }
    public function db_update_user($data){
        $this->db->trans_start();
        $this->db->where(array('id'=>$this->session->userdata('uid')))->update('users',$data);
        $this->db->trans_complete();
        if($this->db->trans_status()){
            return true;
        }else{
            return false;
        }
    }
    public function email_newsletter($email)
    {
        $data = array(
            'email' => $email
        );

        return $this->db->insert('newsletter_emails', $data);
    }

    
}