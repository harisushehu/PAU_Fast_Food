<?php

class Add_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function run()
	{
            $name = $_POST['name'];
            $type = $_POST['type'];
            $price = $_POST['price'];
                 
            $filename = $_FILES['image']['tmp_name'];
            $size = getimagesize($filename);
            
            if(getimagesize($_FILES['image']['tmp_name']) == FALSE )
            {
                echo "Please select an image";
                header('location: ../add');
            }
            else
            {           
                $image = addslashes($_FILES['image']['tmp_name']);
               // $name = addslashes($_FILES['image']['name']);
                $image = file_get_contents($image);
                $image = base64_encode($image);   
                
              $sth = $this->db->prepare("INSERT INTO food(name, type, price, image)
              VALUES('$name', '$type', '$price', '$image')");

             $sth->execute();
          
             if($sth)
             {
             
             echo "<script>alert('Image has been inserted successfully')</script>";        
           
             }
             else
             {
                 echo "<script>alert('Image not inserted')</script>";
             }
            
            }
             header('location: ../add'); 
             
            } // end run
            
} // end class