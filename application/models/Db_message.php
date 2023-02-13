<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Db_message extends CI_Model {

    public function contact_us($data){
        $this->db->insert('contact_us', $data);
        if($this->db->affected_rows($data))
                {
                    $status = 1;
                }else{
                    $status = 0;
                }
    }



}

/* End of file Db_Message.php */
