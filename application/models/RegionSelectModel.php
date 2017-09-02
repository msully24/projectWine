<?php

/**
* 
*/
class RegionSelectModel extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();	
	}

	public function RegionSelection()
	{
		$this->db->select('*');
		$this->db->from('Regions');
		$this->db->join('Country','Regions.regionCountryID = Country.CountryID');
		$query = $this->db->get();
		$result = $query->result(); 
		return $result;
	}

	

}