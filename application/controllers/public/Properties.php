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

    public function properties_single($id){
        if($data=$this->input->post()){

        }else{
            $data=$this->global_model->select_single('properties',['id'=>$id]);
            $this->index('properties_single','Su-Raksha','','',$data);
        }

    }

    public function add_remove_favourite($id){
        $user_id = $this->session->userdata('user_id');
        $user_id = 1;
        $property = $this->global_model->select_single('add_to_fav',['property_id'=>$id,'user_id'=>$user_id]);
        if (!empty($property)) {
            $result = $this->global_model->delete('add_to_fav',['property_id'=>$id,'user_id'=>$user_id]);
            if ($result) {
                echo "Removed from Favourite";
            }else{
                echo "Unable to Remove";
            }
        }else{
            $result = $this->global_model->add("add_to_fav",['property_id'=>$id,'user_id'=>$user_id]);
            if ($result) {
                echo "Added to Favourite";
            }else{
                echo "Unable to Add to Favourite";
            }
        }
    }
}

