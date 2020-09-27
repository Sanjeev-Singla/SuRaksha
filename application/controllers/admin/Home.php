<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
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
        $this->load->view('admin/'.$load_view,$data);
        $this->load->view('admin/common/footer');
    }
    
    public function home(){
        $data['total_for_rent'] = $this->global_model->count_rows('properties',["sale_rent"=>'Rent']);
        $data['total_for_sale'] = $this->global_model->count_rows('properties',["sale_rent"=>'Sale']);
        $data['available_for_rent'] = $this->global_model->count_rows('properties',['status'=>0,"sale_rent"=>'Rent']);
        $data['available_for_sale'] = $this->global_model->count_rows('properties',['status'=>0,"sale_rent"=>'Sale']);
        $data['sold'] = $this->global_model->count_rows('properties',['status'=>1,"sale_rent"=>'Sale']);
        $data['rented'] = $this->global_model->count_rows('properties',['status'=>1,"sale_rent"=>'Rent']);
        $this->index('home',$data);  
    }

    public function contact(){
        $data=$this->global_model->get_all('contact');
        $this->index('contact',$data);
    }

    public function contact_details($id){
        $data = $this->global_model->select_single("contact",["id"=>$id]);
        echo json_encode($data);
    }

    public function logout(){
        $this->session->sess_destroy();
        _redirect("admin");
    }
}