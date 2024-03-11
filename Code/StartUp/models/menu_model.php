<?php

class Menu_Model extends Model {
    
public function __construct()
	{
		parent::__construct();
                
	}
    
         function xhrGetListings()
	{
		$sth = $this->db->prepare('SELECT * FROM food');
		$sth->setFetchMode(PDO::FETCH_ASSOC);
		$sth->execute();
		$data = $sth->fetchAll();
		echo json_encode($data);
	}
           
        function xhrDeleteListing()
	{
		$id = $_POST['id'];
               
                $sth = $this->db->prepare('SELECT * FROM food WHERE id = "'.$id.'"');
                $sth->execute();
                $data = $sth->fetch();
                $order = $data['name'];
                $type = $data['type'];
                $price = $data['price'];
                
                Session::init();
                $username = $_SESSION['users'];

                $sth1 = $this->db->prepare('SELECT * FROM users WHERE login = "'.$username.'" ');
                $sth1->execute();
                $data1 = $sth1->fetch();
                $name = $data1['name'];
                $money = $data1['money'];
                
                if(intval($money) > intval($price))
                {
                $newPrice = intval($money) - intval($price);
                    
                $sth2 = $this->db->prepare("INSERT INTO `order` (`name`, `order`, `type`) VALUES('$name','$order','$type')");         
		$sth2->execute();
                
                $sth3 = $this->db->prepare('UPDATE users SET money = "'.$newPrice.'" WHERE login = "'.$username.'"');         
		$sth3->execute();  
                }
                else
                {
                    echo "<script>alert('Sorry you dont have enough balance)</script>";
                }
        
	}  
   
}