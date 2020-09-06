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
    
    
   

    public function logout(){
        $this->session->unset_userdata('user_id');
        _redirect('login');
    }





}