<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SiteUmum extends CI_Model
{
	function getDataTautan()
	{
		return $this->db->get('tautan_tb'); 
	}

	function getDataPemerintahan($kat)
	{
		return $this->db->order_by('id', 'desc')->get_where('postingan_tb', array('sub_kategori' => $kat));
	}

	function getDataKelembagaan()
	{
		return $this->db->order_by('id', 'desc')->get_where('postingan_tb', array('sub_kategori' => 'kelembagaan masyarakat'));
	}

	function getDataKeamanan()
	{
		return $this->db->order_by('id', 'desc')->get_where('postingan_tb', array('sub_kategori' => 'keamanan dan ketertiban'));
	}

	function getDataSeni()
	{
		return $this->db->order_by('id', 'desc')->get_where('postingan_tb', array('sub_kategori' => 'seni budaya'));
	}

	function getDataPemberdayaan()
	{
		return $this->db->order_by('id', 'desc')->get_where('postingan_tb', array('sub_kategori' => 'pemberdayaan masyarakat'));
	}

	function getDataEkonomi()
	{
		return $this->db->order_by('id', 'desc')->get_where('postingan_tb', array('sub_kategori' => 'ekonomi masyarakat'));
	}

	function getDataPendidikan()
	{
		return $this->db->order_by('id', 'desc')->get_where('postingan_tb', array('sub_kategori' => 'pendidikan'));
	}

	function getDataKesehatan()
	{
		return $this->db->order_by('id', 'desc')->get_where('postingan_tb', array('sub_kategori' => 'kesehatan'));
	}

	function getDataKuliner()
	{
		return $this->db->order_by('id', 'desc')->get_where('postingan_tb', array('sub_kategori' => 'kuliner'));
	}

	function getDataUmkm()
	{
		return $this->db->order_by('id', 'desc')->get_where('postingan_tb', array('sub_kategori' => 'umkm'));
	}
}