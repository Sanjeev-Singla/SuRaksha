<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Common extends MY_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('global_model');
        if(!$this->_is_logged_in('user_id')){
            _redirect('login');
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
    
    public function update_password(){
        if($data=$this->input->post()){
           
            $this->form_validation->set_error_delimiters("<p style='color:red;'>","</p>");
            if ($this->form_validation->run('user_change_password') == FALSE) {
                $this->index('update_password',"","","");
            }else{
                $pass  = sha1("encrypt".$data['current_password']);
                $npass =  sha1("encrypt".$data['new_password']);
                $rpass =  sha1("encrypt".$data['c_password']);
                $users= $this->global_model->select_single('users',['id'=>$this->_is_logged_in('user_id')]);
                
                if($pass==$users['password']){

                    if ($npass != $pass) {
                        $update = $this->global_model->update('users',['id'=>$users['id']],['password'=>$npass]);
                        if ($update == TRUE) {
                            $this->_msg('alert', 'Password Updated Successfully');
                            $this->_class('alert_class', 'success');
                            _redirect_pre();
                        }else{
                            $this->_msg('alert', 'Something Went wrong');
                            $this->_class('alert_class', 'danger');
                            _redirect('update-password');
                        }
                    }else{
                        $this->_msg('alert',"Current Password and New Password can't be same");
                        $this->_class('alert_class', 'danger');
                        _redirect('update-password');
                    }
                }else{
                    $this->_msg('alert', 'Incorrect Current Password');
                    $this->_class('alert_class', 'danger');
                    _redirect('update-password');
                }
            }
        }else{
            $this->index('update_password','Su-Raksha Update Password','');
        }
    }
   

    public function logout(){
        $this->session->unset_userdata('user_id');
        _redirect('login');
    }
}