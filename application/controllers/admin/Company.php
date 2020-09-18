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
            $result = $this->global_model->update('privacy_policy',[],$data);
            if ($result) {
                $this->_class('alert_class',"green");
                $this->_class('alert',"Privacy Policy Updated Successfully");
            }else{
                $this->_class('alert_class',"red");
                $this->_class('alert',"Unable to Update!");
            }
            _redirect_pre();
        }else{
            $data=$this->global_model->get_all('privacy_policy');
            $data=$data[0];
            $this->index('privacy_policy',$data);
        }   
    }

    public function terms_condition(){
       if($data=$this->input->post()){
            $result = $this->global_model->update('terms_condition',[],$data);
            if ($result) {
                $this->_class('alert_class',"green");
                $this->_class('alert',"Terms & Conditions Updated Successfully");
            }else{
                $this->_class('alert_class',"red");
                $this->_class('alert',"Unable to Update!");
            }
            _redirect_pre();
       }else{
        $data=$this->global_model->get_all('terms_condition');
        $data=$data[0];
        $this->index('terms_condition',$data);
       }
    }

    public function about(){
        if($data=$this->input->post()){
            $result = $this->global_model->update('about_us',[],$data);
            if ($result) {
                $this->_class('alert_class',"green");
                $this->_class('alert',"Updated Successfully");
            }else{
                $this->_class('alert_class',"red");
                $this->_class('alert',"Unable to Update!");
            }
            _redirect_pre();
       }else{
        $data=$this->global_model->get_all('about_us');
        $data=$data[0];
        $this->index('about',$data);
       }
    }
}
    
    
   