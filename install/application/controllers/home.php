<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

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
    
// public function makeMenu()
//     {
//             $data=array();

//             $this->load->model('Cmsmodel');
//             $data['home'] = $this->Cmsmodel->getFileNameh();
           
//             $this->load->view('includes/startHTML', $data);
            
//     }
    
    public function index()
    {
            $data=array();

            $this->load->model('Cmsmodel');
            // $data['content'] = $this->Cmsmodel->getContentByPageIDh();
            $data['content'] = $this->Cmsmodel->getContentByPageID();
            $data['mainHeading'] = $this->Cmsmodel->getMainHeadingByPageIDh();
            $data['tagline'] = $this->Cmsmodel->getTaglineh();

            $this->load->view('includes/startHTML');
            $this->load->view('homeView', $data);
            $this->load->view('includes/endHTML');
    }
    
    

    // public function indexmh()
    // {
    //         $data=array();

    //         $this->load->model('Cmsmodel');
    //         $data['mainHeading'] = $this->Cmsmodel->getMainHeadingByPageIDh();
            
    //         $this->load->view('includes/startHTML');
    //         $this->load->view('homeView', $data);
    //         $this->load->view('includes/endHTML');
    // }
    
    
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

} // end of class