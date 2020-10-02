<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MY_Controller {
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
        $this->load->view('admin/users/'.$load_view,$data);
        $this->load->view('admin/common/footer');
    }
    
   
    public function users(){
        $data=$this->global_model->get_all('users');
        $this->index('users',$data);
    }

    public function user_details($id){
        $data['user_details']=$this->global_model->select_single("users",["id"=>$id]);
        $table1 = "properties";
        $table2 = "add_to_fav";
        $join_str = "properties.id = add_to_fav.property_id";
        $data['add_to_fav'] = $this->global_model->join_2table($table2,$table1,$join_str,['add_to_fav.user_id'=>$id]);
        $this->index('user_detail',$data);
    }
}