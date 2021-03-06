<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_product extends CI_Controller {


	public function __construct()
	{	
		parent::__construct();
		$this->load->model('m_product');
		$this->load->helper('url');

	}

	public function index()
	{
		

	}
	public function carseat()
	{
	$data = array(
			'title' => 'Babyfirst - Carseat',
			'product' => $this->m_product->get_data('carseat')
		);
		$this->load->view('head',$data);
		$this->load->view('v_product',$data);
		$this->load->view('footer');
	}
	public function fashion()
	{
	$data = array(
			'title' => 'Babyfirst - Fashion',
			'product' => $this->m_product->get_data('fashion')
		);
		$this->load->view('head',$data);
		$this->load->view('v_product',$data);
		$this->load->view('footer');
	}
	public function shoes()
	{
	$data = array(
			'title' => 'Babyfirst -Shoes',
			'product' => $this->m_product->get_data('shoes')
		);
		$this->load->view('head',$data);
		$this->load->view('v_product',$data);
		$this->load->view('footer');
	}
	public function stroller()
	{
	$data = array(
			'title' => 'Babyfirst',
			'product' => $this->m_product->get_data('stroller')
		);
		$this->load->view('head',$data);
		$this->load->view('v_product',$data);
		$this->load->view('footer');
	}
		public function toys()
	{
	$data = array(
			'title' => 'Babyfirst',
			'product' => $this->m_product->get_data('toys')
		);
		$this->load->view('head',$data);
		$this->load->view('v_product',$data);
		$this->load->view('footer');
	}
}

