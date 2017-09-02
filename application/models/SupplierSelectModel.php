<?php

/**
* 
*/
class SupplierSelectModel extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();	
	}

	public function supplierSelection()
	{
		$this->db->select('*');
		$this->db->from('Suppliers');
		$this->db->join('Country','Suppliers.suppCountryID = Country.CountryID');
		$query = $this->db->get();
		$result = $query->result(); 
		return $result;
	}

	

}