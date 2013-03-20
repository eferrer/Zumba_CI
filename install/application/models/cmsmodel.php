<?php

class Cmsmodel extends CI_Model{
    
    function __construct()
    {
        parent::__construct();
    }
    
    //==============================================================
    // Test 1. Test that the about controller is calling Cmsmodel correctly
    // WORKS!!
    
    //  public function getContentByPageID()
    // {
    //     return "This is something written in the cmsmodel";
    // }
    
    //==============================================================
    // Test 2. Test with the page ID hardcoded
    
    public function getContentByPageID()
    {
        $sql = "SELECT contentDetails
                FROM tbContent
                WHERE pageID=2";
                
        return $this->db->query($sql);
    }
    
    
    
    
    // public function getContentByPageID()
    // {
    //     // $id = ($this->uri->segment(3))?$this->uri->segment(3):1;
    //     // $arr = array('pageID'=>$this->uri->segment(3));
        
    //     $sql = "SELECT contentDetails
    //             FROM tbContent
    //             WHERE pageID='2'";
                
    //     return $this->db->query($sql);
    // }
    
    
} // end of class About