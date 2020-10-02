<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Property extends MY_Controller {

    private $num_rows = 1;

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

    public function properties($page = 0){
        if ($data = $this->input->post()) {
            $data['aminities'] = implode(",", $data['aminities']);
            $properties_id = $this->global_model->add("properties",$data);

            if ($properties_id) {

                $config = [ 
                    'upload_path' => './assets/admin/uploads/images/properties', 
                    'allowed_types' => 'jpg|JPG|png|PNG|jpeg|JPEG', 
                    'max_size' => '204800'
                ];

                for ($i=0; $i < count($_FILES['images']['name']); $i++) { 
                    $this->load->library('upload', $config);
                    if(!empty($_FILES['images']['name'][$i])) {

                        $_FILES['image']['name']= $_FILES['images']['name'][$i];
                        $_FILES['image']['type']= $_FILES['images']['type'][$i];
                        $_FILES['image']['tmp_name']= $_FILES['images']['tmp_name'][$i];
                        $_FILES['image']['error']= $_FILES['images']['error'][$i];
                        $_FILES['image']['size']= $_FILES['images']['size'][$i]; 

                        $this->upload->do_upload('image');
                        $file_data = $this->upload->data();
                        $file_name = $file_data['raw_name'] . $file_data['file_ext'];
                        $image['property_image'] = $file_name;
                        $image['properties_id'] = $properties_id;
                        $this->global_model->add("property_image",$image);
                    } 
                }
                $this->_class("alert_class",'green');
                $this->_msg("alert","Property Added Successfully");
            }else{
                $this->_class("alert_class",'red');
                $this->_msg("alert","Unable to Add Property");
            }
            _redirect('admin/properties');
        }else{
            if ($search = $this->input->get('search')) {
                $row_count = $this->global_model->serach_property_table_count("properties",['price'=>$search],['residence_type'=>$search],['sale_rent'=>$search],['property_type'=>$search],['location'=>$search],['property_title'=>$search],['status'=>0]);
                $data['properties'] = $this->global_model->serach_property_table('properties',['price'=>$search],['residence_type'=>$search],['sale_rent'=>$search],['property_type'=>$search],['location'=>$search],['property_title'=>$search],['status'=>0],$this->num_rows,$page);
            }else{
                $row_count = $this->global_model->count_rows("properties",["status"=>0]);
                $data['properties'] = $this->global_model->select_all('properties',["status"=>0],$this->num_rows,$page);
            }
            $data['links_pagination'] = $this->_pagination("admin/properties",$this->num_rows,$row_count,3);
            $data["aminities"]=$this->global_model->get_all('aminities');
            $data["cities"]=$this->global_model->get_all('cities');
            $this->index('properties',$data);
        }
    }

    public function delete_property($id){
        $this->global_model->delete("properties",['id'=>$id]);
        $images = $this->global_model->get_all("property_image",['properties_id'=>$id]);
        foreach ($images as $key => $image) {
            @unlink(base_url."assets/admin/uploads/images/properties/".$image["property_image"]);
        }
        $this->global_model->delete("property_image",['properties_id'=>$id]);
        $this->_class("alert_class",'green');
        $this->_msg("alert","Property Deleted Successfully");
        _redirect_pre();
    }

    public function sold_property($id){
        $result = $this->global_model->update("properties",['id'=>$id],["status"=>1]);
        if ($result) {
            $this->_class("alert_class",'green');
            $this->_msg("alert","Property Sold Successfully");
        }else{
            $this->_class("alert_class",'red');
            $this->_msg("alert","Error! Please Try Sometime Later");
        }
        _redirect_pre();
    }

    public function aminity($page = 0){
        if ($data = $this->input->post()) {
            $result = $this->global_model->add('aminities',$data);
            if ($result) {
                $this->_class('alert_class','green');
                $this->_msg('alert',"Adminity Added Successfully");
            }else{
                $this->_class('alert_class','red');
                $this->_msg('alert',"Unable to Add Aminity!");
            }
            _redirect_pre();
        }else{
            $row_count = $this->global_model->count_rows("aminities");
            $data['aminities']=$this->global_model->select_all('aminities',[],$this->num_rows,$page);
            $data['links_pagination'] = $this->_pagination("admin/aminities",$this->num_rows,$row_count,3);
            $this->index('aminity',$data);
        }
    }
    
    public function delete_aminity($id){
        $result = $this->global_model->delete('aminities',['id'=>$id]);
        if ($result) {
            $this->_class('alert_class','green');
            $this->_msg('alert',"Adminity Deleted Successfully");
        }else{
            $this->_class('alert_class','red');
            $this->_msg('alert',"Unable to Delete Aminity!");
        }
        _redirect_pre();
    }

    public function city($page = 0){
        if ($data = $this->input->post()) {
            $result = $this->global_model->add('cities',$data);
            if ($result) {
                $this->_class('alert_class','green');
                $this->_msg('alert',"City Added Successfully");
            }else{
                $this->_class('alert_class','red');
                $this->_msg('alert',"Unable to Add City!");
            }
            _redirect_pre();
        }else{
            $row_count = $this->global_model->count_rows("cities");
            $data['cities']=$this->global_model->select_all('cities',[],$this->num_rows,$page);
            $data['links_pagination'] = $this->_pagination("admin/cities",$this->num_rows,$row_count,3);
            $this->index('cities',$data);
        }
    }

    public function delete_city($id){
        $result = $this->global_model->delete('cities',['id'=>$id]);
        if ($result) {
            $this->_class('alert_class','green');
            $this->_msg('alert',"City Deleted Successfully");
        }else{
            $this->_class('alert_class','red');
            $this->_msg('alert',"Unable to Delete City!");
        }
        _redirect_pre();
    }

    public function edit_property($id){
        if ($data = $this->input->post()) {
            if ($data['flat_type'] == 'Raw') {
                $data['aminities'] = "";
            }else{
                $data['aminities'] = implode(',', $data['aminities']);
            }
            $result = $this->global_model->update('properties',['id'=>$id],$data);
            if ($result) {
                $this->_class("alert_class",'green');
                $this->_msg("alert","Property Updated Successfully");
            }else{
                $this->_class("alert_class",'red');
                $this->_msg("alert","Unable to Update Property");
            }
            _redirect('admin/properties');
        }else{
            $data['property'] = $this->global_model->select_single('properties',['id'=>$id,'status'=>0]);
            if (!empty($data['property'])) {
                $data['property']['aminities'] = explode(",", $data['property']['aminities']);
                $data["aminities"] = $this->global_model->get_all('aminities');
                $data["cities"] = $this->global_model->get_all('cities');
                $this->index('edit-property',$data);
            }else{
                $this->_class("alert_class",'red');
                $this->_msg("alert","Property is not Available");
                _redirect('admin/properties');
            }
        }
    }

    public function sold_rented($page = 0){
        $row_count = $this->global_model->count_rows("properties",["status"=>1]);
        $data['properties'] = $this->global_model->select_all('properties',["status"=>1],$this->num_rows,$page);
        $data['links_pagination'] = $this->_pagination("admin/properties",$this->num_rows,$row_count,3);
        $data["aminities"]=$this->global_model->get_all('aminities');
        $data["cities"]=$this->global_model->get_all('cities');
        $this->index('sold_rented',$data);
    }

    public function unblock_property($id){
        $result = $this->global_model->update("properties",['id'=>$id],["status"=>0]);
        if ($result) {
            $this->_class("alert_class",'green');
            $this->_msg("alert","Property Unblocked Successfully");
        }else{
            $this->_class("alert_class",'red');
            $this->_msg("alert","Error! Please Try Sometime Later");
        }
        _redirect_pre();
    }
}
