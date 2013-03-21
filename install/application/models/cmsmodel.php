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

    // GET CONTENT BY PAGE ID

    //==============================================================

    // 1. with the page ID hardcoded
    
     // 1. a. home page content

    public function getContentByPageIDh()
    {
        $sql = "SELECT contentDetails
                FROM tbContent
                WHERE pageID=1";
                
        return $this->db->query($sql);
    }


    // 1. b. about page: about me content

    public function getContentByPageIDa()
    {
        $sql = "SELECT contentDetails
                FROM tbContent
                WHERE pageID=2";
                
        return $this->db->query($sql);
    }
    
      // 1. b. Classes page all content

    public function getContentByPageIDc()
    {
        $sql = "SELECT contentDetails
                FROM tbContent
                WHERE pageID=3";
                
        return $this->db->query($sql);
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