<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of aboutUs
 *
 * @author chinthaka
 */
class aboutUs extends CI_Controller{
    //put your code here
    
    function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $this->load->view('about_us');
    }
    
    public function chairperson() {
        $this->load->view('chairperson');
    }
}
