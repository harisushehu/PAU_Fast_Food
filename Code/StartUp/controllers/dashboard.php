<?php

class Dashboard extends Controller {

	function __construct() {
		parent::__construct();
     
		Session::init();
		$logged = Session::get('users');
                $adLogged = Session::get('admins');
		if ($logged == false || $adLogged == false) {
			Session::destroy();
			header('location: ../login');
			exit;
		}   
	}
	
	function logout()
	{
		Session::destroy();
		header('location: ../login');
		exit;
	}
            
}