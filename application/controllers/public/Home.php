<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
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
    
    public function home(){
        $data['properties'] = $this->global_model->select_all('properties',['status'=>0],9);
        $data['mohali_count'] = $this->global_model->count_rows('properties',['city'=>'Mohali','status'=>0]);
        $data['client_reviews'] = $this->global_model->select_all('client_reviews',[],9);

        $data['images'] = [];
        if (!empty($data['properties'])) {
            $properties = array_column($data['properties'], 'id');
            foreach ($properties as $key => $value) {
                $data['images'][] =  $this->global_model->select_single("property_image",['properties_id'=>$value]);
            }
            $data['images'] = array_column($data['images'],'property_image');
        }

        $about_us=$this->global_model->get_all('about_us');
        $data['about']=$about_us[0];
        $this->index('home',"SuRaksha- Home",'','',$data);
    }
}