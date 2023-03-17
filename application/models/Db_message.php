<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Db_message extends CI_Model {

    public function contact_us($data){
        $this->db->insert('contact_us', $data);
        if($this->db->insert_id())
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function report_poll($data){
        $this->db->insert('poll_reports', $data);
        if($this->db->insert_id()){
            return true;
        }else{
            return false;
        }
        
    }
    public function check_report_poll($data){
        return $this->db->where($data)->get('poll_reports')->result_array();
    }



}

/* End of file Db_Message.php */
