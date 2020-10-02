<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Properties extends MY_Controller {

    private $num_rows = 1;

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

    public function properties($page = 0){
        $data['fav_props'] = $this->global_model->get_all('add_to_fav',['user_id'=>$this->_is_logged_in("user_id")]);
        $data['fav_props'] = array_column($data['fav_props'], 'property_id');

        $row_count = $this->global_model->count_rows('properties',['status'=>0]);
        $data['properties'] = $this->global_model->select_all('properties',['status'=>0],9,$page);
        $data['links_pagination'] = $this->_properties_pagination("properties",9,$row_count,3);

        $data['images'] = [];
        if (!empty($data['properties'])) {
            $properties = array_column($data['properties'], 'id');
            foreach ($properties as $key => $value) {
                $data['images'][] =  $this->global_model->select_single("property_image",['properties_id'=>$value]);
            }
            $data['images'] = array_column($data['images'],'property_image');
        }
        //echo "<pre>";print_r($data['properties']);die();
        $this->index('properties','Su-Raksha - Properties','','',$data);
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
        if(!$this->_is_logged_in('user_id')){
            return false;
        }
        $user_id = $this->session->userdata('user_id');
        $property = $this->global_model->select_single('add_to_fav',['property_id'=>$id,'user_id'=>$user_id]);
        if (!empty($property)) {
            $result = $this->global_model->delete('add_to_fav',['property_id'=>$id,'user_id'=>$user_id]);
            if ($result) {
                $data['class'] = "fa fa-heart-o";
                $data['message'] = "Removed from Favourite";
                echo json_encode($data);
            }else{
                $data['message'] = "Unable to Remove";
                echo json_encode($data); 
            }
        }else{
            $result = $this->global_model->add("add_to_fav",['property_id'=>$id,'user_id'=>$user_id]);
            if ($result) {
                $data['class'] = "fa fa-heart text-danger";
                $data['message'] = "Added to Favourite";
                echo json_encode($data);
            }else{
                $data['message'] = "Unable to Add to Favourite";
                echo json_encode($data);
            }
        }
    }

    public function favourite_properties($page = 0){
        if(!$this->_is_logged_in('user_id')){
            _redirect('login');
        }

        $table1 = "properties";
        $table2 = "add_to_fav";
        $join_str = "properties.id = add_to_fav.property_id";
        $row_count = $this->global_model->count_rows("add_to_fav",["add_to_fav.user_id"=>$this->_is_logged_in("user_id")]);
        $data['fav_properties'] = $this->global_model->join_2table($table2,$table1,$join_str,["add_to_fav.user_id"=>$this->_is_logged_in("user_id"),'properties.status'=>0],$this->num_rows,$page);
        $data['links_pagination'] = $this->_pagination("favourite-properties",$this->num_rows,$row_count,3);
        $this->index('favourite_properties','Su-Raksha - Favourite Properties','','',$data);
    }
}

