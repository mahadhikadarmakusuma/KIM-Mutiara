<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('SiteUmum');
	}
	public function index()
	{
		//$this->load->view('user/master_site');
		$data['dashboard'] = $this->db->order_by('id', 'desc')->get('postingan_tb')->result_array();
		$data['tautan'] = $this->SiteUmum->getDataTautan()->result_array();
		$this->template->load('user/include/master_site', 'user/dashboard', $data);
	}
	public function prestasi()
	{
		$this->template->load('user/include/master_site', 'user/prestasi');
	}
	public function profile()
	{
		$this->template->load('user/include/master_site', 'user/profile');
	}
}
