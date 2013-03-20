<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {

    //==============================================================
    // Hardcode something for the content 
    // Display that something out in the about view
    // WORKS!!    

    // public function index()
    // {
    //         $data=array();
    //         $data['content'] = "this is the about view";
    //         $this->load->view('includes/startHTML');
    //         $this->load->view('aboutView', $data);
    //         $this->load->view('includes/endHTML');
    // }
    
    //==============================================================
    public function index()
    {
            $data=array();
        // if($this->uri->segment(3) == '1'){
            $this->load->model('Cmsmodel');
            //$data['content'] = $this->Cmsmodel->getContentByPageID();
            $data['content'] = "this is not the about view";
            $this->load->view('includes/startHTML');
            $this->load->view('aboutView', $data);
            $this->load->view('includes/endHTML');
        // }
        // else{
        //     $data['content'] = 'hardcoded';

        //     $this->load->view('includes/startHTML');
        //     $this->load->view("alternateView", $data);
        //     $this->load->view("includes/endHTML");
        // }
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */