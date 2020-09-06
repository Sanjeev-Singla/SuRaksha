<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends MY_Controller {
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

    public function contact(){
        if($data=$this->input->post()){
           $this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
           if ($this->form_validation->run('contact') == FALSE) {
                $this->index('contact','Su-Raksha - Contact');
            }else{
                $data['ip'] = $this->input->ip_address();
                $add=$this->global_model->add('contact', $data);
                if($add){
                    $this->_msg('alert', 'Your Message sends successfully');
                    $this->_class('alert_class', 'success');
                    _redirect('contact');
                }else{
                    $this->_msg('alert', 'Please try later');
                    $this->_class('alert_class', 'danger');
                    _redirect_pre('contact');
                }
            }
        }else{
            $this->index('contact','Su-Raksha - Contact');
        }
    }
}