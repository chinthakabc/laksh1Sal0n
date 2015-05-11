<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of crud
 *
 * @author chinthaka
 */
class crud extends CI_Model{
    //put your code here
    
    function __construct() {
        parent::__construct();
    }
    
    function get_first ($tbl_name,$id){
        $this->db->select("*");
        $this->db->from($tbl_name);
        $this->db->where('id',$id);
        $query = $this->db->get();
        
        return $query->result_array() ;
    }
    
    function get_All ($tbl_name) {
        $this->db->select("id,title");
        $this->db->from($tbl_name);
        
        $query = $this->db->get();
        
        return $query->result_array() ;
    }
}
