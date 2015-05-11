<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of treatments
 *
 * @author chinthaka
 */
class treatments extends CI_Controller {

    //put your code here

    function __construct() {
        parent::__construct();
        $this->load->model('crud');
    }

    public function index() {
        $this->load->view('bridal/makeup');
    }

    public function bouquets() {
        $this->load->view('bridal/bouquets');
    }

    public function headdresses() {
        $this->load->view('bridal/headdresses');
    }

    public function dressdesign() {
        $this->load->view('bridal/dressdesign');
    }

    public function advices() {
        $this->load->view('bridal/advices');
    }

    public function facial($id) {
        $data['pages'] = $this->crud->get_All('facial');
        $data['result'] = $this->crud->get_first('facial',$id);
        $this->load->view('facial/facial',$data);
        
    }
    
    
    public function facial_treatments($id) {
        $data['pages'] = $this->crud->get_All('facial_treatments');
        $data['result'] = $this->crud->get_first('facial_treatments',$id);
        $this->load->view('facial/facial_treatments',$data);
        
    }
    
    public function haircuts($id) {
        $data['pages'] = $this->crud->get_All('haircuts');
        $data['result'] = $this->crud->get_first('haircuts',$id);
        $this->load->view('haircuts/hair_cuts',$data);
    }
    
    public function hair_styles($id) {
        $data['pages'] = $this->crud->get_All('hair_styles');
        $data['result'] = $this->crud->get_first('hair_styles',$id);
        $this->load->view('hair_styles/hair_styles',$data);
    }
    
    public function hair_treatments($id) {
        $data['pages'] = $this->crud->get_All('hair_treatment');
        $data['result'] = $this->crud->get_first('hair_treatment',$id);
        $this->load->view('hair_treatments/hair_treatments',$data);
    }
    
    public function hair_removal($id) {
        $data['pages'] = $this->crud->get_All('hair_removal');
        $data['result'] = $this->crud->get_first('hair_removal',$id);
        $this->load->view('hair_removal/hair_removal',$data);
    }
    
    public function manicure($id) {
        $data['pages'] = $this->crud->get_All('manicure');
        $data['result'] = $this->crud->get_first('manicure',$id);
        $this->load->view('manicure/manicure',$data);
    }

}
