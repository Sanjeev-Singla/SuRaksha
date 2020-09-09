<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Property extends MY_Controller {
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
        $this->load->view('admin/property/'.$load_view,$data);
        $this->load->view('admin/common/footer');
    }

    public function properties(){
        $this->index('properties');
    }
    
}
