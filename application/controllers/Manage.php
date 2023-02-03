<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Manage extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('db_create_poll');
    }
    

    public function index()
    {        
		$this->load->view('frontent/common/header');
		$this->load->view('frontent/home');
		$this->load->view('frontent/common/footer');
    }
    public function privacy(){
        $this->load->view('frontent/common/header');
        $this->load->view('frontent/privacy');
        $this->load->view('frontent/common/footer');
    } 
    public function create_page(){
        $data['top_poll'] = $this->db_create_poll->top_poll();
        $data['recent_poll'] = $this->db_create_poll->recent_poll();
        $this->load->view('frontent/common/header');	
        $this->load->view('frontent/create_page',$data);	
        $this->load->view('frontent/common/footer');	
    }
    public function update($share_id){
        if($this->input->post('name') == 'one_vote_ip'){
            $data['ip'] = $this->input->post('status');
        }elseif($this->input->post('name') == 'm_private'){
            $data['private'] = $this->input->post('status');
        }elseif($this->input->post('name') == 'one_vote_session'){
            $data['session'] = $this->input->post('status');
        }elseif($this->input->post('name') == 'h_result'){
            $data['hide_result'] = $this->input->post('status');
        }elseif($this->input->post('name') == 'u_name'){
            $data['name'] = $this->input->post('status');
        }
        if($this->input->post('color')){
            $custom['text_color'] = $this->input->post('text_color');
            $custom['bg_color'] = $this->input->post('bg_color');
            $custom['text'] = $this->input->post('text');
            $custom['vote_text'] = $this->input->post('vote_text');
            $custom['result_text'] = $this->input->post('result_text');
            $custom['create_text'] = $this->input->post('create_text');
            $custom['other_share'] = $this->input->post('other_share');
            $data['custom_button'] = json_encode($custom,JSON_UNESCAPED_UNICODE);
        }
        if($this->input->post('end_date_name')){
            $data['end_date'] = $this->input->post('end_date_name');
        }
        if($this->input->post('custo')){
            $data['share_msg'] = $this->input->post('custo');
        }
        if($this->db_create_poll->db_update_poll($data,$share_id)){
            echo true;
        }else{
            echo 0;
        }
    }
    public function create_page_submit(){
        $this->form_validation->set_rules('title', 'Title', 'required');
        if($this->session->userdata('uid')){
            $data['uid'] = $this->session->userdata('uid');
        }else{
            $data['uid'] = 0;
        }
        $op1 = $this->input->post('option')[0];
        $op2 = $this->input->post('option')[1];
        if($this->form_validation->run() && $op1 && $op2){ 
            $poll['title'] = htmlspecialchars($this->input->post('title'));  
            if($_FILES['head_img']['name']){
                $poll['head_img'] = $this->image_upload('head_img');
            }
            $i=0;
            foreach ($this->input->post('option') as $value) {
                if($value){
                    $poll['option']['option_'.$i]['text'] = htmlspecialchars($value);
                    $poll['option']['option_'.$i]['option_img'] = '';
                    $poll['option']['option_'.$i]['option_count'] = 0;
                    $i++;
                }
            }
            $data['share_id'] = uniqid(11);
            $data['poll'] = json_encode($poll,JSON_UNESCAPED_UNICODE);
            if($this->input->post('m_private')){
                $data['private'] = htmlspecialchars($this->input->post('m_private'));
            }
            if($this->input->post('one_vote_ip')){
                $data['ip'] = htmlspecialchars($this->input->post('one_vote_ip'));
            }
            if($this->input->post('end_date')){
                $data['end_date'] = htmlspecialchars($this->input->post('end_date'));
            }
            if($this->input->post('u_name')){
                $data['name'] = htmlspecialchars($this->input->post('u_name'));
            }
            if($this->input->post('one_vote_session')){
                $data['session'] = htmlspecialchars($this->input->post('one_vote_session'));
            }
            if($this->input->post('h_result')){
                $data['hide_result'] = htmlspecialchars($this->input->post('h_result'));
            }
            if($this->input->post('cust_msg')){
                $data['share_msg'] =  htmlspecialchars($this->input->post('cust_msg'));
            }else{
                $data['share_msg'] = '{title} {link}';
            }
            $res = $this->db_create_poll->db_insert_poll($data);
            if($res){
                $this->session->set_userdata('user_id', $data['share_id']);
                redirect(base_url('manage/share_page/'.$data['share_id']));
            }

        }else{
            $this->session->set_flashdata('msg','Fields are empty');
            $url = $_SERVER['HTTP_REFERER'];
            redirect($url);
        }
    }
    public function share_page($share_id){
        if($this->session->userdata('user_id') == $share_id){
            
            $data['top_poll'] = $this->db_create_poll->top_poll();
            $data['recent_poll'] = $this->db_create_poll->recent_poll();
            $data['poll_data'] = $this->db_create_poll->fetch_poll($share_id,false);
            $data['poll'] = json_decode($data['poll_data']['poll']);
            if($data['poll_data']){
                $this->load->view('frontent/common/header',$data);
                $this->load->view('frontent/share',$data);
                $this->load->view('frontent/common/footer');
            }else{
                redirect();
            }
        }else{
            redirect(base_url('manage/user_share/'.$share_id));
        }
    }
    public function user_share($share_id){
        if($this->session->userdata('user_id') != $share_id){
            $data['top_poll'] = $this->db_create_poll->top_poll();
            $data['recent_poll'] = $this->db_create_poll->recent_poll();
            $data['poll_data'] = $this->db_create_poll->fetch_poll($share_id,true);
            $data['poll'] = json_decode($data['poll_data']['poll']);
            if($data['poll_data']){
                $this->load->view('frontent/common/header',$data);
                $this->load->view('frontent/user_share',$data);
                $this->load->view('frontent/common/footer');
            }else{
                redirect();
            }
        }else{
            redirect(base_url('manage/share_page/'.$share_id));
        }
    }
    public function result($share_id){
        $url = $_SERVER['HTTP_REFERER'];
        $pattern = "/user_share/i";
        $status = preg_match($pattern, $url);
        $stat = false;
        $poll_data = $this->db_create_poll->fetch_poll($share_id,$stat);
        if($poll_data['name'] == 'on' && !$status){
            $names = $this->db_create_poll->fetch_names($share_id);
        }
        $poll = json_decode($poll_data['poll']);
        // echo "<pre>";
        // print_r($poll->option);
        // die;
        $count =0;
        foreach($poll->option as $options)
        {
            $count += $options->option_count;
        }
        $final = '';
        foreach($poll->option as $p_data){
            if($count){
                $per = round(($p_data->option_count/$count) * 100,2);
            }else{
                $per = 0;
            }
            $final .= "<div class='child-sub'>
            <div class='flex items-center'>
                <div class='flex-grow flex items-center text-lg sm:text-base custom-input-text'>
                    <span>$p_data->text</span>
                </div>
                <div class='whitespace-nowrap ml-4 text-gray-500 custom-text'>
                    <span>($p_data->option_count votes)</span>
                </div>
            </div>
            <div class='progress'>
                    
                <div class='progress-bar bg-info' role='progressbar' style='width: $per%;' aria-valuenow=' $per ' aria-valuemin='0' aria-valuemax='100'> $per %</div>
            </div>
            </div>";
        }
        $final .= "<div class='py-2'><p class=''>Total: <span>$count</span></p></div>";
        if($poll_data['name'] == 'on' && !$status){
            $final .=  "<div class='result-names'>
            <table class='table thead-dark'>
                <thead>
                    <th>Names</th>
                    <th>Options</th>   
                </thead>
                <tbody>";
            foreach($names as $key){
                $option_m = $key['selected_option'] ;
                $final .= "<tr><td>".$key['name']."</td><td>".$poll->option->$option_m->text."</td></tr>";
            }
            $final .= "</tbody>
            </table>
        </div>";
        }
        $res = array('msg' => $final);
        echo json_encode($res);
    }
    public function response($share_id){
   
    $poll = $this->db_create_poll->fetch_poll($share_id,false);
    if($this->session->userdata('session') != $share_id || $poll['session'] != 'on'){
        if($poll['ip'] == 'on'){
            $ip = $this->get_client_ip();
        }else{
            $ip = $poll['ip'];
        }
        $name = $poll['name'];
        $op = $this->input->post('option');
        if($poll['name'] == 'on'){
            $name = htmlspecialchars($this->input->post('name'));
        }
        if($op != 'undefined'){
            $poll_data = json_decode($this->db_create_poll->fetch_poll($share_id,false)['poll']);
            $poll_data->option->$op->option_count +=1;
            $updated_poll = json_encode($poll_data,JSON_UNESCAPED_UNICODE) ;
            $res = $this->db_create_poll->update_poll($share_id,$op,$updated_poll,$ip,$name);
            if($res == 1){
                    $res = array('msg' => '<p class="text-success text-center">Voted</p>');
                    $this->session->set_userdata('vote',true);
                    if($poll['session'] == 'on'){
                        $this->session->set_userdata('session', $share_id);
                    }
            }elseif($res == 2){
                    $res = array('msg' => '<p class="text-danger text-center">You (or someone in your Wi-Fi/network) have voted on this poll.</p>');
            }else{
                    $res = array('msg' => '<p class="text-danger text-center">Error</p>');
            }
        }else{
                $res = array('msg' => '<p class="text-warning text-center">Please select a option</p>');
        }
    }else{
        $res = array('msg' => '<p class="text-danger text-center">Already Voted</p>');
    }
        echo json_encode($res);
    }
    public function image_upload($name){
        $configUpload['upload_path']    = './assets/image_poll';                  #the folder placed in the root of project
        $configUpload['allowed_types']  = 'gif|jpg|png|bmp|jpeg';       #allowed types description
        $configUpload['encrypt_name']   = true;                         #encrypt name of the uploaded file
        $this->load->library('upload', $configUpload);                  #init the upload class
        if(!$this->upload->do_upload('head_img'))
        {
            $uploadedDetails = $this->upload->display_errors();
        }
        else
        {
            $uploadedDetails  = $this->upload->data();              
        }           
        return $uploadedDetails['file_name']; 

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

/* End of file mana.php */

?>