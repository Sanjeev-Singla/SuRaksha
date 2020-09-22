<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_address extends MY_Controller {
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
        $this->load->view('admin/admin_info/'.$load_view,$data);
        $this->load->view('admin/common/footer');
    }
    
    
    public function address(){
        if ($data = $this->input->post()) {
            $result = $this->global_model->update('admin_address',[],$data);
            if ($result) {
                $this->_class('alert_class',"green");
                $this->_class('alert',"Address Updated Successfully");
            }else{
                $this->_class('alert_class',"red");
                $this->_class('alert',"Unable to Update Address!");
            }
            _redirect_pre();
        }else{
            $data = $this->global_model->get_all("admin_address");
            $data = $data[0];
            $this->index('admin_address',$data);
        }
    }

    public function social_link(){
        if ($data = $this->input->post()) {
            $result = $this->global_model->update('admin_social',[],$data);
            if ($result) {
                $this->_class('alert_class',"green");
                $this->_class('alert',"Link Saved Successfully");
            }else{
                $this->_class('alert_class',"red");
                $this->_class('alert',"Unable to Save Link!");
            }
            _redirect_pre();
        }else{
            $data = $this->global_model->get_all('admin_social');
            $data= $data[0];
            $this->index('social_link',$data);
        }
    }
}