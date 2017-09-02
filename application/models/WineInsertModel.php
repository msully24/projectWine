<?php

/**
* 
*/
class WineInsertModel extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();	
	}

	public function wineInsert($data)
	{
		$this->load->database();
		$this->db->insert('Products', $data);
	}
}