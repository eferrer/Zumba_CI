<?php

/** takes the first URI segment, selects the content for that page, and calls the views
 */

 //controller

function index()
{
	$data['menu'] = $this->cmsmodel->getMenuData();
	$data['aContent'] = $this->cmsmodel->getContent();
	
	$pagename = $this->uri->segment(1).'View';
	$this->load->view($pagename);
}
	
	
	
	
	
################################################################

//model
// get Content
// returns all the content blocks for a page identified by the fileName in the uri - 1, 2 0r 3?
function getContent()
{
	$sql = "SELECT content
	FROM tbContent
	WHERE pageID =
	('SELECT pageID FROM tbPages
	WHERE fileName = ' .$this->uri->segment(1) )";
	
	
}










