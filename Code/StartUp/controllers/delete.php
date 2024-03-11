<?php

class Delete extends Controller{
    
    function __construct() {
		parent::__construct();
                
                $this->view->js = array('delete/js/default.js');
	}
	
	function index() {
		$this->view->render('delete/index');	
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

