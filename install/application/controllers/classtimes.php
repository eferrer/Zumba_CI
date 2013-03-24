<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Classtimes extends CI_Controller {

    //==============================================================
    // Hardcode something for the content 
    // Display that something out in the about view
    // WORKS!!    

    // public function index()
    // {
    //         $data=array();
    //         $data['content'] = "this is the about view";
    //
    //         $this->load->view('includes/startHTML');
    //         $this->load->view('aboutView', $data);
    //         $this->load->view('includes/endHTML');
    // }
    
    //==============================================================
    // Test 1. Test that the about controller is calling Cmsmodel correctly
    // WORKS!!
    
    // public function index()
    // {
    //         $data=array();

    //         $this->load->model('Cmsmodel');
    //         $data['content'] = $this->Cmsmodel->getContentByPageID();
            
    //         $this->load->view('includes/startHTML');
    //         $this->load->view('aboutView', $data);
    //         $this->load->view('includes/endHTML');
    // }
    
    //==============================================================
    // Test 2. Test with the page ID hardcoded
    

    public function index()
    {
            $data=array();

            $this->load->model('Cmsmodel');
            $data['content'] = $this->Cmsmodel->getContentByPageIDc();
            $data['mainHeading'] = $this->Cmsmodel->getMainHeadingByPageIDc();
            $data['subHeading'] = $this->Cmsmodel->getSubHeadingByPageIDc();
            $data['tagline'] = $this->Cmsmodel->getTaglinec();
            $data['needsDetails'] = $this->Cmsmodel->getNeedsList();
            
            $this->load->view('includes/startHTML');
            $this->load->view('classesView', $data);
            $this->load->view('includes/endHTML');
    }
    
    
    //  public function index()
    // {
    //         $data=array();
    //     // if($this->uri->segment(3) == '1'){
    //         $this->load->model('Cmsmodel');
    //         $data['content'] = $this->Cmsmodel->getContentByPageID();
            
    //         $this->load->view('includes/startHTML');
    //         $this->load->view('aboutView', $data);
    //         $this->load->view('includes/endHTML');
        // }
        // else{
        //     $data['content'] = 'hardcoded';

        //     $this->load->view('includes/startHTML');
        //     $this->load->view("alternateView", $data);
        //     $this->load->view("includes/endHTML");
        // }
    //}

} //end of class
