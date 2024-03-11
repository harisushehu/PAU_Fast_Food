<?php

class Update_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function run()
	{
            $name = $_POST['name'];
            $type = $_POST['type'];
            
            if(strcmp($name, '') == 0 || strcmp($type, '') == 0)
            {        
                echo "<script>alert('Please specify the food you want to update')</script>";  
                header('location: ../update');
            }
                    
            $newName = $_POST['newName'];
            $newType = $_POST['newType'];   
            $newPrice = $_POST['newPrice'];
            
            if(strcmp($name, '') != 0 || strcmp($type, '') != 0 && strcmp($newName, '') == 0 && strcmp($newType, '') == 0 && strcmp($newPrice, '') == 0 )
            {
                echo "<script>alert('Please enter what is it that you want to update')</script>";
                header('location: ../update');
            }
            
            if(strcmp($newName, '') != 0 && strcasecmp($newType, '') == 0 && strcmp($newPrice, '') == 0 )
               {
                 $sth = $this->db->prepare("UPDATE food SET name = '$newName' WHERE name = '$name' AND type = '$type'");
                 $sth->execute();
                 
                 $sth1 = $this->db->prepare("UPDATE `order` SET order = '$newName' WHERE order = '$name' AND type = '$type'");
                 $sth1->execute();
               }
               else if(strcasecmp($newType, '') != 0 && strcmp($newName, '') == 0 && strcmp($newPrice, '') == 0 )
               {                                            
                   $sth = $this->db->prepare("UPDATE food SET type = '$newType' WHERE name = '$name' AND type = '$type'"); 
                   $sth->execute();
                   $sth11 = $this->db->prepare("UPDATE `order` SET `type`= $newType WHERE `order`=$name AND `type`=$type");
                   $sth11->execute();
               }
               else if(strcmp($newPrice, '') != 0 && strcasecmp($newType, '') == 0 && strcmp($newName, '') == 0 )
               {
                   $sth = $this->db->prepare("UPDATE food SET price = '$newPrice' WHERE name = '$name' AND type = '$type'");
                   $sth->execute();
               }          
               else if(strcmp($newName, '') != 0 && strcasecmp($newType, '') != 0 && strcmp($newPrice, '') == 0 )
               {
                   $sth = $this->db->prepare("UPDATE food SET name = '$newName', type = '$newType'  WHERE name = '$name' AND type = '$type'");
                   $sth->execute();
               }
               else if(strcmp($newName, '') != 0 && strcasecmp($newPrice, '') != 0 && strcmp($newType, '') == 0 )
               {
                   $sth = $this->db->prepare("UPDATE food SET name = '$newName', price = '$newPrice'  WHERE name = '$name' AND type = '$type'");
                   $sth->execute();
               }
               else if(strcmp($newType, '') != 0 && strcasecmp($newPrice, '') != 0 && strcmp($newName, '') == 0 )
               {
                   $sth = $this->db->prepare("UPDATE food SET type = '$newType', price = '$newPrice'  WHERE name = '$name' AND type = '$type'");
                   $sth->execute();
               }
               else if(strcmp($newName, '') != 0 && strcasecmp($newType, '') != 0 && strcmp($newPrice, '') != 0 )
               {
                   $sth = $this->db->prepare("UPDATE food SET name = '$newName', type = '$newType', price = '$newPrice'  WHERE name = '$name' AND type = '$type'");
                   $sth->execute();
               }
                 
            $filename = $_FILES['newImage']['tmp_name'];
            $size = getimagesize($filename);
            
            if(getimagesize($_FILES['newImage']['tmp_name']) == FALSE )
            {
               ;
            }
            else
            {  
                $image = addslashes($_FILES['newImage']['tmp_name']);
               // $name = addslashes($_FILES['image']['name']);
                $image = file_get_contents($image);
                $image = base64_encode($image);  
                
                $sth = $this->db->prepare("UPDATE food SET image = '$image' WHERE name = '$name' AND type = '$type'");
                $sth->execute();
            }
            
            header('location: ../update'); 
             
            } // end run
            
} // end class