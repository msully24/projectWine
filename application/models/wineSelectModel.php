<?php

/**
* 
*/
class WineSelectModel extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();	
	}

	public function wineSelection()
	{
		$this->db->select('prodID,
							prodName,
							prodNum,
							prodDateBuy, colorProd.colprodDesc');
		$this->db->from('Products');
		$this->db->join('colorProd','Products.prodColorID = colorProd.colprodID');
		$query = $this->db->get();
		$result = $query->result();  
		return $result;
	}

	public function oneWineSelection($id)
	{

		$array = array('prodID' => $id);
		$this->db->select('prodID, prodNum, prodName, colorProd.colprodDesc, prodPack, Regions.regionName, prodBottleChargePerson, prodNoRequest, prodIDSupplier, prodDateBuy, prodQtyBuy, 
		prodFormat, prodPriceBuy, prodLabelCharge, prodBottleCharge, prodSellPrice, prodSoldOut,prodAvailable,prodComment');
		$this->db->from('Products');
		$this->db->join('colorProd','Products.prodColorID = colorProd.colprodID');
		// $this->db->join('Packaging','Products.prodPack = Packaging.packID'); this works in DB but doesnt run in file? 
		$this->db->join('Regions','Products.prodRegionID = Regions.regionID');
		$this->db->where($array);
		$query = $this->db->get();
		$result = $query->result(); 
		return $result;
	}
	public function colors()
	{
		$this->db->select('*');
		$this->db->from('colorProd');
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}

}