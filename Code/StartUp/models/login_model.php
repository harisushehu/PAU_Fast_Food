<?php

class Login_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function run()
	{
            
		$sth = $this->db->prepare("SELECT id FROM users WHERE 
				login = :login AND password = MD5(:password)");
		$sth->execute(array(
			':login' => $_POST['login'],
			':password' => $_POST['password']
		));
                
                $adSth = $this->db->prepare("SELECT id FROM admins WHERE 
				login = :login AND password = MD5(:password)");
		$adSth->execute(array(
			':login' => $_POST['login'],
			':password' => $_POST['password']
		));
		
		//$data = $sth->fetchAll();
	
                $username = $_POST['login'];
                
		$count =  $sth->rowCount();   // checking from the user table (db)
                $adCount =  $adSth->rowCount(); // checking from admin table (db)
		
                       if($adCount > 0)
                       { 
                        //login as admin           
                        Session::init();   
			Session::set('admins', $username);
			header('location: ../waiting');
                       }
                       else if($count > 0)
                       {
                           //login as a user
                         Session::init();         
                         Session::set('users', $username);
                    
			header('location: ../index');  
                       }
		 else {
			header('location: ../login');
		}
             
	} // end run
	
} // end class