<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Posting extends CI_Model
{
    function postingBaru($input)
    {
        $this->db->insert('postingan_tb', $input);
    }
    //==================================================
    function dataPemerintahan($jenis)
    {
        $this->db->where('kategori', $jenis);
        return $this->db->get('postingan_tb');
    }
    function dataKategori()
    {
        return $this->db->get('kategori_pemerintahan_tb');
    }
    function dataEditPemerintahan($id)
    {   
        $this->db->where('id', $id); 
        return $this->db->get('postingan_tb');
    }
    function dataHapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('postingan_tb');
    }
//====================================================  
    function dataPotensi($jenis)
    {
        return $this->db->get_where('postingan_tb', array('kategori' => $jenis));
    }
    function kategoriPotensi()
    {
        return $this->db->get('kategori_potensi_tb');
    }
    function postingPotensi($input)
    {
        $this->db->insert('postingan_tb', $input);   
    }
    //==================================================

    //==================================================== 
    function input_prestasi_($data){
        return $this->db->insert('prestasi_tb', $data);
    }

    function input_tentang_($data){
        return $this->db->insert('tentang_db', $data);
    }
}
