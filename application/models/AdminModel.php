<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminModel extends CI_Model
{
	function tampil_potensi($limit,$start){
		$query = $this->db->get('postingan_tb', $limit, $start);
		return $query;
	}
	function getDataPendidikan()
	{
		return $this->db->get_where('postingan_tb', array('sub_kategori' => 'pendidikan'))->result_array();
	}
	function getDataBudaya()
	{
		return $this->db->get_where('postingan_tb', array('sub_kategori' => 'seni budaya'))->result_array();
	}
	function getDataKesehatan()
	{
		return $this->db->get_where('postingan_tb', array('sub_kategori' => 'kesehatan'))->result_array();
	}
	function getDataKuliner()
	{
		return $this->db->get_where('postingan_tb', array('sub_kategori' => 'kuliner'))->result_array();
	}
	function getDataPemberdayaan()
	{
		return $this->db->get_where('postingan_tb', array('sub_kategori' => 'pemberdayaan masyarakat'))->result_array();
	}
	function getDataEkonomi()
	{
		return $this->db->get_where('postingan_tb', array('sub_kategori' => 'ekonomi masyarakat'))->result_array();
	}
	function getDataUmum()
	{
		return $this->db->get_where('postingan_tb', array('sub_kategori' => 'umum'))->result_array();
	}
	function getDataKelembagaan()
	{
		return $this->db->get_where('postingan_tb', array('sub_kategori' => 'kelembagaan masyarakat'))->result_array();
	}
	function getDataKamtib()
	{
		return $this->db->get_where('postingan_tb', array('sub_kategori' => 'keamanan dan ketertiban'))->result_array();
	}
	function getDataPrestasi()
	{
		return $this->db->get_where('prestasi_tb', array('id','asc'))->result_array();
	}
	function getDataTentang()
	{
		return $this->db->get_where('tentang_tb', array('id'))->result_array();
	}
	function getDataUmkm()
	{
		return $this->db->get_where('postingan_tb', array('sub_kategori' => 'umkm'))->result_array();
	}
} 