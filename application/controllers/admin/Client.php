<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends MY_Controller {
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
        $this->load->view('admin/client/'.$load_view,$data);
        $this->load->view('admin/common/footer');
    }
    
    public function client_reviews(){
        if ($data = $this->input->post()) {
            $result = $this->global_model->add('client_reviews',$data);
            if ($result) {
                $this->_class('alert_class',"green");
                $this->_class('alert',"Reviews Submitted Successfully");
            }else{
                $this->_class('alert_class',"red");
                $this->_class('alert',"Unable to Submit Reviews!");
            }
            _redirect_pre();
        }else{
            $data = $this->global_model->get_all('client_reviews');
            $this->index('reviews',$data);
        }
    }

    public function edit_client_review($id){
        if ($data = $this->input->post()) {
            $result = $this->global_model->update('client_reviews',['id'=>$id],$data);
            if ($result) {
                $this->_class('alert_class',"green");
                $this->_class('alert',"Reviews Submitted Successfully");
            }else{
                $this->_class('alert_class',"red");
                $this->_class('alert',"Unable to Update Reviews!");
            }
            _redirect_pre();
        }else{
            $data = $this->global_model->select_single("client_reviews",["id"=>$id]);
            echo json_encode($data);
        }
    }

    public function delete_client_review($id){
        $result = $this->global_model->delete('client_reviews',["id"=>$id]);
        if ($result) {
            $this->_class('alert_class',"green");
            $this->_class('alert',"Comments Deleted Successfully");
        }else{
            $this->_class('alert_class',"red");
            $this->_class('alert',"Unable to Delete Comments!");
        }
        _redirect_pre();
    }
}