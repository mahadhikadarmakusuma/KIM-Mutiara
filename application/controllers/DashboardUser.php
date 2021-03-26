<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DashboardUser extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		{
			$this->load->helper('url');
			$this->load->library('template');
			$this->load->model('SiteUmum');
		} 
	} 

	public function pemerintahanSiteUmum()
    {
    	$data['tautan'] = $this->SiteUmum->getDataTautan()->result_array();
    	$data['posting'] = $this->SiteUmum->getDataPemerintahan('umum')->result_array();
        $this->template->load('user/master', 'user/umum', $data);
    } 
    public function kelembagaanSiteUmum()
    {
        $data['kelembagaan'] =  $this->SiteUmum->getDataKelembagaan()->result_array();
    	$data['tautan'] = $this->SiteUmum->getDataTautan()->result_array();
    	$this->template->load('user/master', 'user/kelembagaan', $data);
    }

    public function keamananSiteUmum()
    {
        $data['keamanan'] = $this->SiteUmum->getDataKeamanan()->result_array();
    	$data['tautan'] = $this->SiteUmum->getDataTautan()->result_array();
    	$this->template->load('user/master', 'user/keamanan', $data);
    }

    public function seniSiteUmum()
    {
        $data['seni'] = $this->SiteUmum->getDataSeni()->result_array();
        $data['tautan'] = $this->SiteUmum->getDataTautan()->result_array();
        $this->template->load('user/master', 'user/seni', $data);   
    }

    public function pemberdayaanSiteUmum()
    {
        $data['pemberdayaan'] = $this->SiteUmum->getDataPemberdayaan()->result_array();
        $data['tautan'] = $this->SiteUmum->getDataTautan()->result_array();
        $this->template->load('user/master', 'user/pemberdayaan', $data);   
    }

    public function ekonomiSiteUmum()
    {
        $data['ekonomi'] = $this->SiteUmum->getDataEkonomi()->result_array();
        $data['tautan'] = $this->SiteUmum->getDataTautan()->result_array();
        $this->template->load('user/master', 'user/ekonomi', $data);   
    }

    public function pendidikanSiteUmum()
    {
        $data['pendidikan'] = $this->SiteUmum->getDataPendidikan()->result_array();
        $data['tautan'] = $this->SiteUmum->getDataTautan()->result_array();
        $this->template->load('user/master', 'user/pendidikan', $data);   
    }

    public function kesehatanSiteUmum()
    {
        $data['kesehatan'] = $this->SiteUmum->getDataKesehatan()->result_array();
        $data['tautan'] = $this->SiteUmum->getDataTautan()->result_array();
        $this->template->load('user/master', 'user/kesehatan', $data);   
    }

    public function kulinerSiteUmum() 
    {
        $data['kuliner'] = $this->SiteUmum->getDataKuliner()->result_array();
        $data['tautan'] = $this->SiteUmum->getDataTautan()->result_array();
        $this->template->load('user/master', 'user/kuliner', $data);   
    }

    public function prestasiSiteUmum() 
    {
        $data['prestasi'] = $this->db->order_by('id', 'desc')->get('prestasi_tb')->result_array();
        $data['tautan'] = $this->SiteUmum->getDataTautan()->result_array();
        $this->template->load('user/master', 'user/prestasi', $data);   
    }
    public function tentangSiteUmum() 
    {
        $data['tentang'] = $this->db->get('tentang_tb')->result_array();
        $data['tautan'] = $this->SiteUmum->getDataTautan()->result_array();
        $this->template->load('user/master', 'user/tentang', $data);   
    }
    public function umkmSiteUmum() 
    {
        $data['umkm'] = $this->SiteUmum->getDataUmkm()->result_array();
        $data['tautan'] = $this->SiteUmum->getDataTautan()->result_array();
        $this->template->load('user/master', 'user/umkm', $data);   
    }
    //====================================================================================================================================
    public function dashboardSiteUmum()
    {
        
        $data['dashboard'] = $this->db->order_by('id', 'desc')->get('postingan_tb')->result_array();
        $data['tautan'] = $this->SiteUmum->getDataTautan()->result_array();
        $this->template->load('user/master', 'user/dashboard', $data);   
    }

    //=====================================================================================================================================

    public function view($id_postingan)
    {
        $cari  = $this->db->get_where('postingan_tb', array('id' => $id_postingan));

        if ($cari->num_rows() > 0 ) {
            $data['detail'] = $cari->row_array();
            
            $data['tautan'] = $this->SiteUmum->getDataTautan()->result_array();
            $this->template->load('user/master', 'user/view_', $data);
        } else {
            show_404();
        }
    }

    public function view_($id_postingan)
    {
        $cari  = $this->db->get_where('prestasi_tb', array('id' => $id_postingan));

        if ($cari->num_rows() > 0 ) {
            $data['detail'] = $cari->row_array();

            $data['tautan'] = $this->SiteUmum->getDataTautan()->result_array();
            $this->template->load('user/master', 'user/view', $data);
        } else {
            show_404();
        }
    }
    
    public function view__($id_postingan)
    {
        $cari  = $this->db->get_where('tentang_tb', array('id' => $id_postingan));

        if ($cari->num_rows() > 0 ) {
            $data['detail'] = $cari->row_array();

            $data['tautan'] = $this->SiteUmum->getDataTautan()->result_array();
            $this->template->load('user/master', 'user/view__', $data);
        } else {
            show_404();
        }
    }

}