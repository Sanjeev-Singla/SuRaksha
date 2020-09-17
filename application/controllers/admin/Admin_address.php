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
    
    
    public function add_address(){
        if ($data = $this->input->post()) {
            $result = $this->global_model->add('admin_address',$data);
            if ($result) {
                $this->_class('alert_class',"green");
                $this->_class('alert',"Address Saved Successfully");
            }else{
                $this->_class('alert_class',"red");
                $this->_class('alert',"Unable to Save Address!");
            }
            _redirect_pre();
        }else{
            $data = $this->global_model->get_all('admin_address');
            $this->index('admin_address',$data);
        }
    }

    public function edit_admin_address($id){
        if ($data = $this->input->post()) {
            $result = $this->global_model->update('admin_address',['id'=>$id],$data);
            if ($result) {
                $this->_class('alert_class',"green");
                $this->_class('alert',"Address Updated Successfully");
            }else{
                $this->_class('alert_class',"red");
                $this->_class('alert',"Unable to Update Address!");
            }
            _redirect_pre();
        }else{
            $data = $this->global_model->select_single("admin_address",["id"=>$id]);
            echo json_encode($data);
        }
    }

    public function delete_admin_address($id){
        $result = $this->global_model->delete('admin_address',["id"=>$id]);
        if ($result) {
            $this->_class('alert_class',"green");
            $this->_class('alert',"Address Deleted Successfully");
        }else{
            $this->_class('alert_class',"red");
            $this->_class('alert',"Unable to Delete Address!");
        }
        _redirect_pre();
    }
}