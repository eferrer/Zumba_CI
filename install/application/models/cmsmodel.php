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
    
    public function getContentByPageIDa()
    {
        $sql = "SELECT contentDetails
                FROM tbContent
                WHERE pageID=2";
                
        return $this->db->query($sql);
               // return  'steve woz here';
    }
    
    
    /*

    public function getContentByPageID()
    {
        $pageID = 1;
        if($this->uri->segment(3)){
            $pageID = this->uri->segment(3);
        }
        $sql = "SELECT contentDetails
                FROM tbContent
                WHERE pageID=$pageID";
                
        return $this->db->query($sql);
               // return  'steve woz here';
    }
*/
    // public function getContentByPageID()
    // {
    //     $pageID = 1;
    //     if($this->uri->segment(3)){
    //         $pageID = this->uri->segment(3);
    //     }
    //     $sql = "SELECT contentDetails
    //             FROM tbContent
    //             WHERE pageID=$pageID";
                
    //     return $this->db->query($sql);
               // return  'steve woz here';
    //}  
    
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