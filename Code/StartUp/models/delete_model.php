<?php

class Delete_Model extends Model
{
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
		$sth = $this->db->prepare('DELETE FROM food WHERE id = "'.$id.'"');         
		$sth->execute();               
	}  
        
            
} // end class
