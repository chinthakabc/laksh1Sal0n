<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of courses
 *
 * @author chinthaka
 */
class courses_controller extends CI_Controller{
    //put your code here
    
    function __construct() {
        parent::__construct();
    }
    
    public function index () {
        $this->load->view('courses') ;
    }
}
