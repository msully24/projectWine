<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->helper('url');
		$this->load->model('WineSelectModel');
		$data['products']=$this->WineSelectModel->wineSelection();
		$this->load->view('select_view',$data);
	}

	public function wineData($id)
	{
		$this->load->helper('url');
		$this->load->model('WineSelectModel');
		$data['products']=$this->WineSelectModel->oneWineSelection($id);
		$this->load->view('singleWine',$data);
	}

	public function supplierList()
	{
		$this->load->helper('url');
		$this->load->model('SupplierSelectModel');
		$data['suppliers']=$this->SupplierSelectModel->supplierSelection();
		$this->load->view('supplierList',$data);
	}

	public function regionList()
	{
		$this->load->helper('url');
		$this->load->model('RegionSelectModel');
		$data['regions']=$this->RegionSelectModel->RegionSelection();
		$this->load->view('regionList',$data);
	}

	public function newWineForm()
	{
		$this->load->helper('url');
		$this->load->model('WineSelectModel');
		$data['colors']=$this->WineSelectModel->colors();
		$this->load->view('wineForm', $data);

	}

	public function createWine()
	{
		$this ->load->helper(array('form','url'));
		$this->load->model('WineInsertModel');
		$productNumber = $this->input->post('productNumber');
		$productName = $this->input->post('productName');
		$productColor = $this->input->post('color');
		$productDate = $this->input->post('dateBought');
		
		$data =array(
			'prodNum' => $productNumber,
			'prodName' => $productName,
			'prodColorID' => $productColor,
			'prodDateBuy' => $productDate
			);
		$this->WineInsertModel->wineInsert($data);
		redirect('welcome/index');
		
		
	}
}
