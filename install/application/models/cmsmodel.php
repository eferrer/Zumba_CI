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

    // A. GET CONTENT BY PAGE ID

    //==============================================================

    // A. 1. with the page ID hardcoded
    
     // A. 1. a. home page content

    public function getContentByPageIDh()
    {
        $sql = "SELECT contentDetails
                FROM tbContent
                WHERE pageID=1";
                
        return $this->db->query($sql);
    }


    // A. 1. b. about page: about me content

    public function getContentByPageIDa()
    {
        $sql = "SELECT contentDetails
                FROM tbContent
                WHERE pageID=2";
                
        return $this->db->query($sql);
    }
    
      // A. 1. c. Classes page all content

    public function getContentByPageIDc()
    {
        $sql = "SELECT contentDetails
                FROM tbContent
                WHERE pageID=3";
                
        return $this->db->query($sql);
    }
   
     //==============================================================

    // B. GET H1 BY PAGE ID

    //==============================================================

     // 1. with the page ID hardcoded
    
     // B. 1. a. home page main heading

    public function getMainHeadingByPageIDh()
    {
        $sql = "SELECT H1
                FROM tbContent
                WHERE pageID=1";
                
        return $this->db->query($sql);
    }
    
     // B. 1. b. about page main heading

    public function getMainHeadingByPageIDa()
    {
        $sql = "SELECT H1
                FROM tbContent
                WHERE pageID=2";
                
        return $this->db->query($sql);
    }

    // B. 1. c. classes page main headings

    public function getMainHeadingByPageIDc()
    {
        $sql = "SELECT H1
                FROM tbContent
                WHERE pageID=3";
                
        return $this->db->query($sql);
    }

    //==============================================================

    // C. GET H3 BY PAGE ID

    //==============================================================

    // 1. with the page ID hardcoded

    // A. 1. a. about page testimonials sub heading

    public function getSubHeadingByPageIDa()
    {
        $sql = "SELECT H3
                FROM tbContent
                WHERE pageID=2";
                
        return $this->db->query($sql);
    }
    // C. 1. b. classes page sub headings

    public function getSubHeadingByPageIDc()
    {
        $sql = "SELECT H3
                FROM tbContent
                WHERE pageID=3";
                
        return $this->db->query($sql);
    }

    //==============================================================

    // GET TAGLINES BY PAGE ID

    //==============================================================

     // 1. with the page ID hardcoded

    // A. 1. a. home page tagline

    public function getTaglineh()
    {
        $sql = "SELECT tagline
                FROM tbPages
                WHERE pageID=1";
                
        return $this->db->query($sql);
    }

    // A. 1. b. about page tagline

    public function getTaglinea()
    {
        $sql = "SELECT tagline
                FROM tbPages
                WHERE pageID=2";
                
        return $this->db->query($sql);
    }

    // A. 1. c. classes page tagline

    public function getTaglinec()
    {
        $sql = "SELECT tagline
                FROM tbPages
                WHERE pageID=3";
                
        return $this->db->query($sql);
    }

    // A. 1. d. gallery page tagline

    public function getTaglineg()
    {
        $sql = "SELECT tagline
                FROM tbPages
                WHERE pageID=4";
                
        return $this->db->query($sql);
    }

    // A. 1. e. contact me page tagline

    public function getTaglinecm()
    {
        $sql = "SELECT tagline
                FROM tbPages
                WHERE pageID=5";
                
        return $this->db->query($sql);
    }

   //==============================================================

    // GET NEEDS LIST

    //==============================================================

    public function getNeedsList()
    {
        $sql = "SELECT needsDetails
                FROM tbNeeds";
                
        return $this->db->query($sql);
    }








    //==============================================================
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