<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Properties extends MY_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('global_model');

	}

	 public function index($load_view="properties",$title="", $description="", $keyword="", $data = []){
        $data['data'] = $data;
        $header['title'] = $title;
        $header['description'] = $description;
        $header['keyword'] = $keyword;
        $this->load->view('public/common/header',$header);
        $this->load->view('public/templates/'.$load_view,$data);
        $this->load->view('public/common/footer');
    }

    public function properties(){
        $data = $this->global_model->get_all('properties',['status'=>0]);
        $this->index('properties','Su-Raksha','','',$data);
    }

    public function serach_property(){
        if ($data = $this->input->post()) {
            $title = $data['title'];
            $property_type = $data['property_type'];
            $location = $data['location'];
            $price = $data['price'];

            $property = $this->global_model->serach_property('properties',['price<=' => $price],['property_type'=>$property_type],['location'=>$location],['property_title'=>$title]);
            $this->index('properties','Su-Raksha','','',$property);
        }else{
            $this->properties();
        }
    }
}

