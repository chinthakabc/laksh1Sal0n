<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of appointment_controller
 *
 * @author chinthaka
 */
class contactUs extends CI_Controller{
    //put your code here
    
    function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $this->load->view("contact_us");
    }
    
//    public function contact_us() {
//        $this->load->view("contact_us");
//    }
    
    public function appointment() {
        $this->load->view("appointment");
    }
    public function do_appointment () {
        //put your code here
        echo "under Construction";
    }
    
    public function career() {
        $this->load->view('career');
    }
}
