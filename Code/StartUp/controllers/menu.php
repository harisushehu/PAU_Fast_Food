<?php

class Menu extends Controller {

	function __construct() {
		parent::__construct();
                
                $this->view->js = array('menu/js/default.js');
	}
	
	function index() {
		$this->view->render('menu/index');	
	}
        
	function xhrGetListings()
	{
		$this->model->xhrGetListings();
	}
	
	function xhrDeleteListing()
	{
		$this->model->xhrDeleteListing();
	}
 
        function   xhrGetUsers()
	{
		$this->model->xhrGetUsers();
	}
}