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
    
    
}