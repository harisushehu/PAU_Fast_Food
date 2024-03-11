<?php

class Order extends Controller{
    
    function __construct() {
		parent::__construct();
                
                $this->view->js = array('order/js/default.js');
	}
	
	function index() {
		$this->view->render('order/index');	
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

