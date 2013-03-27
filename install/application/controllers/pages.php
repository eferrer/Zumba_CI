<?php

class Pages extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }

/** takes the first URI segment, selects the content for that page, and calls the views
 */

 //controller

function index()
{
	$data=array();

            $this->load->model('Cmsmodel');

	$data['menu'] = $this->Cmsmodel->getMenuParts();

	echo "SEGMENTS";
                          echo "SEGMENTS 1". $this->uri->segment(1);
                          echo "SEGMENTS 2". $this->uri->segment(2);
                          echo "SEGMENTS 3". $this->uri->segment(3);


                          
	//$data['content'] = $this->Cmsmodel->getContent();
	//$data['mainHeading'] = $this->Cmsmodel->getMainHeading();
	//$data['subHeading'] = $this->Cmsmodel->getSubHeading();
	//$data['tagline'] = $this->Cmsmodel->getTagline();

	// GET LIST OF TESTIMONIALS FOR ABOUT PAGE 
            	//$data['testimonialDetails'] = $this->Cmsmodel->getTestimonials();
            	//$data['name'] = $this->Cmsmodel->getName();
            
            	// GET PROMOTIONAL DETAILS
            	//$data['promoDetails'] = $this->Cmsmodel->getPromotion();


            	// LOAD THE VIEWS
            	$this->load->view('includes/startHTML', $data);
	
	//$pagename = $this->uri->segment(1).'View';
	//$this->load->view($pagename);
	
	$this->load->view('includes/endHTML');

}
	}
	
	
	
	
################################################################

//model
// get Content
// returns all the content blocks for a page identified by the fileName in the uri - 1, 2 0r 3?
// function getContent()
// {
// 	$sql = "SELECT content
// 	FROM tbContent
// 	WHERE pageID =
// 	('SELECT pageID FROM tbPages
// 	WHERE fileName = ' .$this->uri->segment(1) )";
	
	
// }










