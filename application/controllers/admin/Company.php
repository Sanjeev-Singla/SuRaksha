<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends MY_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('global_model');
        if (!$this->_is_logged_in('admin_id')) {
            _redirect('admin');
        }
    }

    public function index($load_view,$data = []){
        $data['data'] = $data;
        $this->load->view('admin/common/header');
        $this->load->view('admin/company/'.$load_view,$data);
        $this->load->view('admin/common/footer');
    }

    public function privacy_policy(){
        if($data=$this->input->post()){

        }else{
            $data=$this->global_model->get_all('privacy_policy');
            $this->index('privacy_policy',$data);
        }   
    }

    public function terms_condition(){
       if($data=$this->input->post()){

       }else{
        $data=$this->global_model->get_all('terms_condition');
        $this->index('terms_condition',$data);
       }
    }
}
    
    
   