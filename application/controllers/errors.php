<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of errors
 *
 * @author chinthaka
 */
class errors extends CI_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->output->set_status_header('404');
//        $data['content'] = 'error_404'; // View name 
        $this->load->view('errors/page_not_found'); //loading in my template 
    }

}
