<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends MY_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('global_model');

	}

	public function index($load_view,$title="", $description="", $keyword="", $data = []){
		$data['data'] = $data;
        $header['title'] = $title;
        $header['description'] = $description;
        $header['keyword'] = $keyword;
		$this->load->view('public/common/header',$header);
        $this->load->view('public/templates/'.$load_view,$data);
        $this->load->view('public/common/footer');
	}

	public function terms_conditions(){
		$data=$this->global_model->get_all('terms_condition');
        $data=$data[0];
        $this->index('terms_condition','Su-Raksha - Terms & Conditions','','',$data);
	}

	public function privacy_policy(){
        $data=$this->global_model->get_all('privacy_policy');
        $data=$data[0];
        $this->index('privacy_policy','Su-Raksha - Privacy Policy','','',$data);
    }
}