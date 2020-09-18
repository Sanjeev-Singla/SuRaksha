<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends MY_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('global_model');

	}

	 public function index($load_view="about",$title="", $description="", $keyword="", $data = []){
        $data['data'] = $data;
        $header['title'] = $title;
        $header['description'] = $description;
        $header['keyword'] = $keyword;
        $this->load->view('public/common/header',$header);
        $this->load->view('public/templates/'.$load_view,$data);
        $this->load->view('public/common/footer');
    }
    
    public function about(){
        $about_us=$this->global_model->get_all('about_us');
        $client_reviews=$this->global_model->get_all('client_reviews');
        $data['about']=$about_us[0];
        $data['client_reviews']=$client_reviews;
        $this->index('about','Su-Raksha - About Us','','',$data);
    }
}