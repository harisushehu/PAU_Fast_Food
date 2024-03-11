<?php

class Order_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}
            
     function xhrGetListings()
	{
                Session::init();
                $username = $_SESSION['users'];
                
                $sth = $this->db->prepare('SELECT * FROM `users` WHERE login = "'.$username.'" ');
                $sth->execute();
                $data = $sth->fetch();
                $name = $data['name'];
                
                $sth1 = $this->db->prepare('SELECT * FROM `order` WHERE name = "'.$name.'" ');
		$sth1->setFetchMode(PDO::FETCH_ASSOC);
		$sth1->execute();
		$data1 = $sth1->fetchAll();
		echo json_encode($data1);
	}
	
	 function xhrDeleteListing()
	{
		$id = $_POST['id'];
               
                $sth = $this->db->prepare('SELECT * FROM `order` WHERE id = "'.$id.'"');
                $sth->execute();
                $data = $sth->fetch();
                $name = $data['order'];
                $type = $data['type'];
                
                
                $sth1 = $this->db->prepare('SELECT * FROM `food` WHERE name = "'.$name.'" AND type = "'.$type.'"');
                $sth1->execute();
                $data1 = $sth1->fetch();
                $price = $data1['price'];
                   
                Session::init();
                $username = $_SESSION['users'];

                $sth2 = $this->db->prepare('SELECT * FROM `users` WHERE login = "'.$username.'" ');
                $sth2->execute();    
                $data2 = $sth2->fetch();
                $money = $data2['money'];
                
                $newPrice = intval($money) + intval($price);
                
                $sth3 = $this->db->prepare('UPDATE users SET money = "'.$newPrice.'" WHERE login = "'.$username.'"');         
		$sth3->execute(); 
                
                $sth4 = $this->db->prepare('DELETE FROM `order` WHERE id = "'.$id.'"');         
		$sth4->execute();  
	}  
        
            
} // end class
