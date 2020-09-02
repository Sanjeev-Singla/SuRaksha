<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MY_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('global_model');
    if($this->_is_logged_in('users_id')){
            _redirect('/');
        }

	}

	public function index($load_view,$title="", $description="", $keyword="", $data = []){
        $data['data'] = $data;
        $header['title'] = $title;
        $header['description'] = $description;
        $header['keyword'] = $keyword;
        $this->load->view('public/common/header',$header);
        $this->load->view('public/users/'.$load_view,$data);
        $this->load->view('public/common/footer');
    }
    
    public function register(){
        if($data=$this->input->post()){
         $this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
            if ($this->form_validation->run('user_register') == FALSE) {
                $this->index('register');
            }else{
                $data['password'] = sha1($data['password']);
                $data['ip'] = $this->input->ip_address();
                unset($data['confirm_password']);
                $add=$this->global_model->add('users', $data);
                $user_data = $this->global_model->select_single('users', $data);
                $this->_set_userdata('user_id', $user_data['id']);
                if($add==TRUE){
                }else{
                    $this->_msg('alert', 'Please try later');
                    $this->_class('alert_class', 'danger');
                    _redirect_pre();
                }
            }
        }else{
            $this->index('register');
        }

    }
    
}