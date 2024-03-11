<?php

class Waiting extends Controller{
    
    function __construct() {
		parent::__construct();
                
                $this->view->js = array('waiting/js/default.js');
	}
	
	function index() {
		$this->view->render('waiting/index');	
	}
    
	function xhrGetListings()
	{
		$this->model->xhrGetListings();
	}
	
	function xhrDeleteListing()
	{
		$this->model->xhrDeleteListing();
	}

    
}

