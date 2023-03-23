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
        $data['meta_title'] = 'RisingPoll: Create your poll';
        $data['meta'] = '
        <meta name="keywords" content="risingpoll,polls,how to create polls online, voting poll onine, how to create risingpoll, create poll on whatsapp, poll maker online,survey maker onine">
        <meta name="description" content="Create surveys, real-time polls and online voting at no cost with RisingPoll. Creating a poll with us only take few seconds and now you can create polls online without any registration.">
        <meta name="subject" content="Online voting polls">
        <meta name="copyright" content="Risingpoll.com">
        <meta name="language" content="En">
        <meta name="pagename" content="RisingPoll: Create your poll">
        <meta name="coverage" content="Worldwide">
        <meta name="distribution" content="Global">
        <meta name="target" content="all">
        <meta name="og:type" content="Online voting poll">
        <meta name="og:site_name" content="RisingPoll">
        <meta property="og:locale" content="en" />
        <meta name="og:description" content="Create surveys, real-time polls and online voting at no cost with RisingPoll. Creating a poll with us only take few seconds and now you can create polls online without any registration.">
        ';
		$this->load->view('frontent/common/header',$data);
		$this->load->view('frontent/home');
		$this->load->view('frontent/common/footer');
    }
    public function privacy(){
        $data['meta_title'] = 'Privacy Policy | RisingPoll - Data Collection, Usage, and Storage';
        $data['meta'] = '
        <meta name="keywords" content="risingpoll,polls,how to create polls online, voting poll onine, how to create risingpoll, create poll on whatsapp, poll maker online,survey maker onine,">
        <meta name="description" content="Protecting your privacy is important to us. Our privacy policy explains how we collect, store, and use your personal information, as well as your options for controlling your data. We take your privacy seriously and work to ensure that your information is kept secure and confidential. Contact us if you have any questions or concerns about our privacy policy.">
        <meta name="subject" content="Online voting polls">
        <meta name="copyright" content="Risingpoll.com">
        <meta name="language" content="En">
        <meta name="pagename" content="Privacy Policy | RisingPoll - Data Collection, Usage, and Storage">
        <meta name="coverage" content="Worldwide">
        <meta name="distribution" content="Global">
        <meta name="target" content="all">
        <meta name="og:type" content="Online voting poll">
        <meta name="og:site_name" content="RisingPoll">
        <meta property="og:locale" content="en" />
        <meta name="og:description" content="Protecting your privacy is important to us. Our privacy policy explains how we collect, store, and use your personal information, as well as your options for controlling your data. We take your privacy seriously and work to ensure that your information is kept secure and confidential. Contact us if you have any questions or concerns about our privacy policy.">
        ';
        $this->load->view('frontent/common/header',$data);
        $this->load->view('frontent/privacy');
        $this->load->view('frontent/common/footer');
    }
    public function about(){
        $data['meta_title'] = 'About Us | RisingPoll - Learn About Our Mission and Values';
        $data['meta'] = '
        <meta name="keywords" content="risingpoll,polls,how to create polls online, voting poll onine, how to create risingpoll, create poll on whatsapp, poll maker online,survey maker onine">
        <meta name="description" content="Learn more about Risingpoll.com and our mission to engage our audience using polls. Discover our values, team, and history, and how we strive to make a positive impact in our community. Get to know us better and join our community today!">
        <meta name="subject" content="Online voting polls">
        <meta name="copyright" content="Risingpoll.com">
        <meta name="language" content="En">
        <meta name="pagename" content="About Us | RisingPoll - Learn About Our Mission and Values">
        <meta name="coverage" content="Worldwide">
        <meta name="distribution" content="Global">
        <meta name="target" content="all">
        <meta name="og:type" content="Online voting poll">
        <meta name="og:site_name" content="RisingPoll">
        <meta property="og:locale" content="en" />
        <meta name="og:description" content="Learn more about Risingpoll.com and our mission to engage our audience using polls. Discover our values, team, and history, and how we strive to make a positive impact in our community. Get to know us better and join our community today!">
        ';
        $this->load->view('frontent/common/header',$data);
        $this->load->view('frontent/about');
        $this->load->view('frontent/common/footer');
    }
    public function terms(){
        $data['meta_title'] = 'Terms and Conditions - Risingpoll.com';
        $data['meta'] = '
        <meta name="keywords" content="risingpoll,polls,how to create polls online, voting poll onine, how to create risingpoll, create poll on whatsapp, poll maker online,survey maker onine">
        <meta name="description" content="Before creating polls and sharing your opinions on Risingpoll, its important to read and understand our terms and conditions. This page outlines our guidelines and expectations to ensure a positive and respectful experience for all users.">
        <meta name="subject" content="Online voting polls">
        <meta name="copyright" content="Risingpoll.com">
        <meta name="language" content="En">
        <meta name="pagename" content="Terms and Conditions - Risingpoll.com">
        <meta name="coverage" content="Worldwide">
        <meta name="distribution" content="Global">
        <meta name="target" content="all">
        <meta name="og:type" content="Online voting poll">
        <meta name="og:site_name" content="RisingPoll">
        <meta property="og:locale" content="en" />
        <meta name="og:description" content="Before creating polls and sharing your opinions on Risingpoll, its important to read and understand our terms and conditions. This page outlines our guidelines and expectations to ensure a positive and respectful experience for all users.">
        ';
        $this->load->view('frontent/common/header',$data);
        $this->load->view('frontent/terms');
        $this->load->view('frontent/common/footer');
    }
    public function contact(){
        $data['meta_title'] = 'Contact us - Risingpoll.com';
        $data['meta'] = '
        <meta name="keywords" content="risingpoll,polls,how to create polls online, voting poll onine, how to create risingpoll, create poll on whatsapp, poll maker online,survey maker onine">
        <meta name="description" content="Contact the Risingpoll team with any questions, feedback, or concerns you may have. Fill out our contact form or use the provided contact information to get in touch">
        <meta name="subject" content="Online voting polls">
        <meta name="copyright" content="Risingpoll.com">
        <meta name="language" content="En">
        <meta name="pagename" content="Contact us - Risingpoll.com">
        <meta name="coverage" content="Worldwide">
        <meta name="distribution" content="Global">
        <meta name="target" content="all">
        <meta name="og:type" content="Online voting poll">
        <meta name="og:site_name" content="RisingPoll">
        <meta property="og:locale" content="en" />
        <meta name="og:description" content="Contact the Risingpoll team with any questions, feedback, or concerns you may have. Fill out our contact form or use the provided contact information to get in touch">
        ';
        $this->load->view('frontent/common/header',$data);
        $this->load->view('frontent/contact');
        $this->load->view('frontent/common/footer');
    }
    
    public function faq(){
        $data['meta_title'] = 'Create a Poll - Free Poll Maker - Risingpoll.com';
        $data['meta'] = '
        <meta name="keywords" content="risingpoll,polls,how to create polls online, voting poll onine, how to create risingpoll, create poll on whatsapp, poll maker online,survey maker onine">
        <meta name="description" content="Create surveys, real-time polls and online voting at no cost with RisingPoll. Creating a poll with us only take few seconds and now you can create polls online without any registration.">
        <meta name="subject" content="Online voting polls">
        <meta name="copyright" content="Risingpoll.com">
        <meta name="language" content="En">
        <meta name="pagename" content="Create Online Poll - Risingpoll">
        <meta name="coverage" content="Worldwide">
        <meta name="distribution" content="Global">
        <meta name="target" content="all">
        <meta name="og:type" content="Online voting poll">
        <meta name="og:site_name" content="RisingPoll">
        <meta property="og:locale" content="en" />
        <meta name="og:description" content="Create surveys, real-time polls and online voting at no cost with RisingPoll. Creating a poll with us only take few seconds and now you can create polls online without any registration.">
        ';
        $this->load->view('frontent/common/header',$data);
        $this->load->view('frontent/faq');
        $this->load->view('frontent/common/footer');
    }


    public function disclaimer(){
        $data['meta_title'] = 'Disclaimer - Risingpoll.com';
        $data['meta'] = '
        <meta name="keywords" content="risingpoll,polls,how to create polls online, voting poll onine, how to create risingpoll, create poll on whatsapp, poll maker online,survey maker onine">
        <meta name="description" content="Our disclaimer page outlines the limitations of liability and disclaimers of warranties for the information provided on RisingPoll. Please read this page carefully before using our website.">
        <meta name="subject" content="Online voting polls">
        <meta name="copyright" content="Risingpoll.com">
        <meta name="language" content="En">
        <meta name="pagename" content="Disclaimer - Risingpoll.com">
        <meta name="coverage" content="Worldwide">
        <meta name="distribution" content="Global">
        <meta name="target" content="all">
        <meta name="og:type" content="Online voting poll">
        <meta name="og:site_name" content="RisingPoll">
        <meta property="og:locale" content="en" />
        <meta name="og:description" content="Our disclaimer page outlines the limitations of liability and disclaimers of warranties for the information provided on RisingPoll. Please read this page carefully before using our website.">
        ';
        $this->load->view('frontent/common/header',$data);
        $this->load->view('frontent/disclaimer');
        $this->load->view('frontent/common/footer');
    }
    
    
    public function create_page(){
        $data['meta_title'] = 'Create a Poll - Free Poll Maker - Risingpoll.com';
        $data['meta'] = '
        <meta name="keywords" content="risingpoll,polls,how to create polls online, voting poll onine, how to create risingpoll, create poll on whatsapp, poll maker online,survey maker onine">
        <meta name="description" content="Create surveys, real-time polls and online voting at no cost with RisingPoll. Creating a poll with us only take few seconds and now you can create polls online without any registration.">
        <meta name="subject" content="Online voting polls">
        <meta name="copyright" content="Risingpoll.com">
        <meta name="language" content="En">
        <meta name="pagename" content="Create Online Poll - Risingpoll">
        <meta name="coverage" content="Worldwide">
        <meta name="distribution" content="Global">
        <meta name="target" content="all">
        <meta name="og:type" content="Online voting poll">
        <meta name="og:site_name" content="RisingPoll">
        <meta property="og:locale" content="en" />
        <meta name="og:description" content="Create surveys, real-time polls and online voting at no cost with RisingPoll. Creating a poll with us only take few seconds and now you can create polls online without any registration.">
        ';
        $data['top_poll'] = $this->db_create_poll->top_poll();
        $data['recent_poll'] = $this->db_create_poll->recent_poll();
        $this->load->view('frontent/common/header',$data);	
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
            if($_POST['image_resize']) {
                $poll['head_img'] = $this->input->post('image_resize');
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
            $data['client_ip'] = $this->get_client_ip();
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
            $data['meta_title'] =  $data['poll']->title;
            $desc = 'What&#39;s your opinion? Vote now: ';
            foreach($data['poll']->option as $value){
                $desc .= $value->text.', ';
                
            }
            $data['meta'] = '
            <meta name="keywords" content="risingpoll,polls,how to create polls online, voting poll onine, how to create risingpoll, create poll on whatsapp, poll maker online,survey maker onine">
            <meta name="description" content="'.$desc.' ...">
            <meta name="subject" content="'.$data['meta_title'].'">
            <meta name="copyright" content="Risingpoll.com">
            <meta name="language" content="En">
            <meta name="pagename" content="'.$data['meta_title'].'">
            <meta name="coverage" content="Worldwide">
            <meta name="distribution" content="Global">
            <meta name="target" content="all">
            <meta name="og:type" content="'.$data['meta_title'].'">
            <meta name="og:site_name" content="RisingPoll">
            <meta property="og:locale" content="en" />
            <meta name="og:description" content="'.$desc.' ...">
            ';
            if($data['poll_data']){
                $this->load->view('frontent/common/header',$data);
                $this->load->view('frontent/share',$data);
                $this->load->view('frontent/common/footer');
            }else{
                redirect();
            }
        }else{
            redirect(base_url('poll/'.$share_id));
        }
    }
    
    public function user_share($share_id){
        if($this->session->userdata('user_id') != $share_id){
            $data['top_poll'] = $this->db_create_poll->top_poll();
            $data['recent_poll'] = $this->db_create_poll->recent_poll();
            $data['poll_data'] = $this->db_create_poll->fetch_poll($share_id,true);
            $data['poll'] = json_decode($data['poll_data']['poll']);
            $data['meta_title'] =  $data['poll']->title;
            $desc = 'What&#39;s your opinion? Vote now: ';
            foreach($data['poll']->option as $value){
                $desc .= $value->text.', ';
                
            }
            $data['meta'] = '
            <meta name="keywords" content="risingpoll,polls,how to create polls online, voting poll onine, how to create risingpoll, create poll on whatsapp, poll maker online,survey maker onine">
            <meta name="description" content="'.$desc.'...">
            <meta name="subject" content="'.$data['meta_title'].'">
            <meta name="copyright" content="Risingpoll.com">
            <meta name="language" content="En">
            <meta name="pagename" content="'.$data['meta_title'].'">
            <meta name="coverage" content="Worldwide">
            <meta name="distribution" content="Global">
            <meta name="target" content="all">
            <meta name="og:type" content="'.$data['meta_title'].'">
            <meta name="og:site_name" content="RisingPoll">
            <meta property="og:locale" content="en" />
            <meta name="og:description" content="'.$desc.'...">
            ';
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
    public function delete_user_side_poll($share_id)
    {
        if($this->session->userdata('user_id') == $share_id){
            $this->db_create_poll->delete_poll_user_side($share_id);
            redirect('manage/create_page');
        }else{
            show_404();
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
        // check ip
        
        $status_ip = false;
        if($poll['ip'] == 'on'){
            $ip = $this->get_client_ip();
            $ip_res = $this->db_create_poll->check_ip($ip,$share_id);
            if($ip_res){
                $status_ip = true;
            }
        }else{
            $ip = $poll['ip'];
        }

        // end ip


        if(!$status_ip){
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
                }else{
                        $res = array('msg' => '<p class="text-danger text-center">Error</p>');
                }
            }else{
                    $res = array('msg' => '<p class="text-warning text-center">Please select a option</p>');
            }
        }else{
            $res = array('msg' => '<p class="text-danger text-center">You (or someone in your Wi-Fi/network) have voted on this poll.</p>');
        }
    }else{
        $res = array('msg' => '<p class="text-danger text-center">Already Voted</p>');
    }
        echo json_encode($res);
    }
    public function image_upload(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $dataUrl = $_POST['image'];
            $uploadDir = './assets/image_poll/';
            $image_name = uniqid();
            $uploadPath = $uploadDir . $image_name . '.png'; // Generate a unique filename for the uploaded file

            // Get the image from the data URL and resize it
            $image = imagecreatefromstring(base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $dataUrl)));
            $resizedImage = imagescale($image, 350); // Resize the image to a width of 800 pixels
            imagedestroy($image);
            // Save the resized image to disk
            if ($resizedImage !== false && imagepng($resizedImage, $uploadPath , 9)) {
                imagedestroy($resizedImage);
                echo json_encode(array('status' => true, "msg" => $image_name.'.png' ));
            } else {
                echo json_encode(array('status' => false, "msg" => '<p class="text-center text-danger">Error</p>' ));
            }
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
    public function contact_support(){
       $this->form_validation->set_rules('email', 'email', 'trim|required');
       $this->form_validation->set_rules('message', 'message', 'required');
       $this->form_validation->set_rules('subject', 'subject', 'required');
       $this->form_validation->set_rules('name', 'name', 'required');
       
       if ($this->form_validation->run() == TRUE) {
            $data['contact_email'] = htmlspecialchars($this->input->post('email'));
            $data['contact_message'] = htmlspecialchars($this->input->post('message'));
            $data['contact_subject'] = htmlspecialchars($this->input->post('subject'));
            $data['contact_name'] = htmlspecialchars($this->input->post('name'));
            $this->load->model('db_message');
            if($this->db_message->contact_us($data)){
                $this->session->set_flashdata('contact_msg','<p class="text-success">Thank you for your message! We will get back to you as soon as possible</p>');
                $url = $_SERVER['HTTP_REFERER'];
                redirect($url);
            }else{
                $this->session->set_flashdata('contact_msg','<p class="text-danger">Unable to submit your request. We will resolve this issue as soon as possible</p>');
                $url = $_SERVER['HTTP_REFERER'];
                redirect($url.'#contact_form');
            }

       } else {
            $this->session->set_flashdata('contact_field_message','Fields are empty');
            $url = $_SERVER['HTTP_REFERER'];
            redirect(substr($url,0,count($url)-2).'#contact_form');
       }
       
    }
    public function report_poll($share_id){
        $data['report_id'] = $this->input->post('option');
        $data['share_id'] = $share_id;
        $data['ip'] = $this->get_client_ip();
        if($this->session->userdata('uid')){
            $data['uid'] = $this->session->userdata('uid');
        }
        $this->load->model('db_message');
        if($this->db_message->report_poll($data)){
            $data['report'] = '<p class="py-3 px-2 text-center text-success">Thank you for reporting this poll. We take reports seriously and will investigate the issue as soon as possible. If we find that this poll violates our terms of service, we will take appropriate action to remove it. We appreciate your help in keeping our community safe and respectful</p>';
        }else{
            $data['report'] = '<p class="py-3 px-2 text-center text-danger">We are facing some issue while reporting.</p>';

        }
        echo json_encode($data);
    }
    public function reports($share_id){
        $temp['share_id'] = $share_id;
        $temp['ip'] = $this->get_client_ip();
        $this->load->model('db_message');
        if(!$this->db_message->check_report_poll($temp)){
            $data['report'] = '<div class="modal-body text-left" >
            <div class="reporthdng"><input type="radio" value="1" name="report" ><label> Sexual content </label></div>
            <div class="reporthdng"><input type="radio" value="2" name="report" ><label> Violent or repulsive content </label></div>
            <div class="reporthdng"><input type="radio" value="3" name="report" ><label> Hateful or abusive content </label></div>
            <div class="reporthdng"><input type="radio" value="4" name="report" ><label> Harassment or bullying </label></div>
            <div class="reporthdng"><input type="radio" value="5" name="report" ><label> Harmful or dangerous acts </label></div>
            <div class="reporthdng"><input type="radio" value="6" name="report" ><label> Misinformation </label></div>
            <div class="reporthdng"><input type="radio" value="7" name="report" ><label> Child abuse </label></div>
            <div class="reporthdng"><input type="radio" value="8" name="report" ><label> Promotes terrorism </label></div>
            <div class="reporthdng"><input type="radio" value="9" name="report" ><label> Spam or misleading </label></div>
            <div class="reporthdng"><input type="radio" value="10" name="report" ><label> Infringes my rights </label></div>
            <div class="reporthdng"><input type="radio" value="11" name="report" ><label> Captions issue </label></div>
            <div class="reporthdng"><input type="radio" value="12" name="report" ><label> None of these are my issue </label></div>
        </div>
        <div class="modal-footer">
            <button id="report_poll" onclick="report_poll()" type="button" class="btn btn-danger">Submit</button>
        </div>';
        }else{
            $data['report'] = '<p class="py-3 text-center text-success">Thank you for reporting this poll. We have already received a report for this poll and are investigating the issue. We appreciate your concern and are working to resolve the issue as soon as possible. If you have any additional information to share, please <a href="'.base_url('contact_us').'">Contact us</a>. Thank you for helping us keep our community safe and respectful.</p>';
        }
        
    echo json_encode($data);
    }
    public function email_newsletter()
    {

        $this->form_validation->set_rules('email_newsletter', 'Email', 'trim|required|valid_email');

        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('contact_msg', validation_errors());
            $url = $_SERVER['HTTP_REFERER'];
            redirect($url);
            return;
        }

        $email = $this->input->post('email_newsletter');

        if ($this->db_create_poll->email_newsletter($email)) {
            $this->session->set_flashdata('contact_msg', '<p class="text-success">Thank you for subscribing!</p>');
        } else {
            $this->session->set_flashdata('contact_msg', '<p class="text-danger">Sorry, we were unable to subscribe you. Please try again later.</p>');
        }
        $url = $_SERVER['HTTP_REFERER'];
        redirect($url);
    }
}

/* End of file mana.php */

?>