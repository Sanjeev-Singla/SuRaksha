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
        if ($data = $this->input->post()) {
            
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
                    $data['images'][] = $file_name;
                } 
            }

            $data['aminities'] = implode(",", $data['aminities']);

            
        }else{
            $this->index('properties');
        }
    }

    public function aminity(){
         $data=$this->global_model->get_all('aminities');
        $this->index('aminity',$data);
    }
    
}
