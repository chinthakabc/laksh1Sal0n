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
class treatments extends CI_Controller{
    //put your code here
    
    function __construct() {
        parent::__construct();
    }
    
    public function index () {
        $this->load->view('bridal/makeup');
    }
    
    public function bouquets () {
        $this->load->view('bridal/bouquets');
    }
    
    public function headdresses () {
        $this->load->view('bridal/headdresses');
    }
    
    public function dressdesign () {
        $this->load->view('bridal/dressdesign');
    }
    
    public function advices () {
        $this->load->view('bridal/advices');
    }
}
