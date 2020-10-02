<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MY_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('global_model');
        if($this->_is_logged_in('user_id')){
            _redirect('/');
        }
	}

	public function index($load_view,$title="", $data = [], $description="", $keyword=""){
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
                $this->index('register','Su-Raksha - Register');
            }else{
                $data['password'] = sha1("encrypt".$data['password']);
                $data['ip'] = $this->input->ip_address();
                unset($data['confirm_password']);
                $add=$this->global_model->add('users', $data);
                if($add){
                    $this->_msg('alert', 'Your are Registered Successfully');
                    $this->_class('alert_class', 'success');
                    _redirect('login');
                }else{
                    $this->_msg('alert', 'Please try later');
                    $this->_class('alert_class', 'danger');
                    _redirect_pre();
                }
            }
        }else{
            $this->index('register','Su-Raksha - Register');
        }
    }

    public function login(){
        if ($data = $this->input->post()) {
           $data['password'] = sha1("encrypt".$data['password']);
            $this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
            if ($this->form_validation->run('signin') == FALSE) {
                  $this->index('login');
            }else{
                if ($user_data = $this->global_model->select_single('users',['email'=>$data['email']])) {
                    if ($data['password'] == $user_data['password']) {
                        $this->_set_userdata('user_id', $user_data['id']);
                        $this->_msg('alert', 'Login Successfully');
                        $this->_class('alert_class', 'success');
                        _redirect('login');
                    }else{
                        $this->_msg('alert', 'Incorrect E-mail');
                        $this->_class('alert_class', 'danger');
                        _redirect_pre();
                    }
                } else {
                    $this->_msg('alert', 'Incorrect Password');
                    $this->_class('alert_class', 'danger');
                    _redirect_pre();
                }
            }
        }else{
             $this->index('login');
        }
    }

    public function forgot_password(){
        if ($data = $this->input->post()) {
            $this->load->helper('string');
            $forgot_token = random_string('alnum', 30);
            $link = base_url("reset-password?email=").$data['email'].'&token='.$forgot_token;
            $result = $this->global_model->update('users',$data,['forgot_token'=>$forgot_token]);
            if ($result) {
                $this->_msg('alert', 'Email Sent to your Email Id to reset password');
                $this->_class('alert_class', 'success');
            }else{
                $this->_msg('alert', 'Incorrect E-mail');
                $this->_class('alert_class', 'danger');
            }
            _redirect_pre();
        }else{
            $this->index("forgot-password",'Su-Raksha - Forgot Password');
        }
    }

    public function reset_password(){
        if ($data = $this->input->post()) {
            $this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
            if ($this->form_validation->run('reset_password') == FALSE) {
                $this->index('reset-password','Su-Raksha - Reset Password');
            }else{
                $data['password'] = sha1("encrypt".$data['password']);
                $email = $this->input->get('email');
                unset($data['confirm_password']);
                $update=$this->global_model->update('users',['email'=>$email] ,['forgot_token'=>"",'password'=>$data['password']]);
                if($update){
                    $this->_msg('alert', 'Password Reset Successfully');
                    $this->_class('alert_class', 'success');
                    _redirect('login');
                }else{
                    $this->_msg('alert', 'Please try later');
                    $this->_class('alert_class', 'danger');
                    _redirect_pre();
                }
            }
        }else{
            $data = $this->input->get();
            $user_data = $this->global_model->select_single('users',['forgot_token'=>$data['token'],'email'=>$data['email']]);
            if ($user_data) {
                $this->_msg('alert', 'Reset Your Password');
                $this->_class('alert_class', 'success');
                $this->index('reset-password','Su-Raksha - Reset Password');
            }else{
                $this->_msg('alert', 'Invalid token or Expired');
                $this->_class('alert_class', 'danger');
                _redirect('login');
            }
        }
    }
}