<?php

class Add extends Controller{
    
    function __construct() {
		parent::__construct();
	}
	
	function index() {
		$this->view->render('add/index');	
	}
    
        function run()
	{
	$this->model->run();
	}
	
    
}
