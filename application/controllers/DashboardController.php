<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DashboardController extends CI_Controller
{
    function __construct() 
    {
        parent::__construct();
        $this->load->helper('url'); 
        $this->load->library('template');
        $this->load->library('session'); 
        $this->load->model('Posting');
        $this->load->model('AdminModel');
        $this->load->library('pagination');
  
        if ($this->session->userdata('status') != "LOGIN") {
            $this->session->set_flashdata('harus_login', ' Pastikan Login terlebih dahulu');
            redirect('AuthController/index');
        } 
    }
    public function index()
    {
        $data['pendidikan']         = count($this->AdminModel->getDataPendidikan());
        $data['budaya']             = count($this->AdminModel->getDataBudaya());
        $data['kesehatan']          = count($this->AdminModel->getDataKesehatan());
        $data['kuliner']            = count($this->AdminModel->getDataKuliner());
        $data['pemberdayaan']       = count($this->AdminModel->getDataPemberdayaan());
        $data['ekonomi']            = count($this->AdminModel->getDataEkonomi());
        $data['umum']               = count($this->AdminModel->getDataUmum());
        $data['kelembagaan']        = count($this->AdminModel->getDataKelembagaan());
        $data['kamtib']             = count($this->AdminModel->getDataKamtib());
        $data['prestasi']           = count($this->AdminModel->getDataPrestasi());
        $data['tentang']            = count($this->AdminModel->getDataTentang());
        $data['umkm']               = count($this->AdminModel->getDataUmkm());

        $this->template->load('admin/include/master', 'admin/dashboard', $data);
    }
    public function pemerintahan() 
    {   
        $get = $this->input->get(); 
            // pagination 

            $datae = $this->db->get_where('postingan_tb', array('kategori =' => 'pemerintahan'));
            $jlhData = $datae->num_rows();
            $this->load->library('pagination');

            $config['base_url'] = site_url("DashboardController/pemerintahan");
            $config['total_rows'] = $jlhData;
            $config['per_page'] = 5;
            $config['first_link']       = 'First';
            $config['last_link']        = 'Last';
            $config['next_link']        = 'Next';
            $config['prev_link']        = 'Prev';
            $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
            $config['full_tag_close']   = '</ul></nav></div>';
            $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
            $config['num_tag_close']    = '</span></li>';
            $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
            $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
            $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
            $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['prev_tagl_close']  = '</span>Next</li>';
            $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
            $config['first_tagl_close'] = '</span></li>';
            $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['last_tagl_close']  = '</span></li>';
            
            $from = $this->uri->segment(3);
            $this->pagination->initialize($config);

            if(!isset($_GET['search'])) {
                $data['pagination'] = $this->db->where('kategori', 'pemerintahan')->get('postingan_tb', $config['per_page'], $from)->result();
            } else {
                $data['pagination'] = $this->db->like('nama', $get['search'])
                                                ->or_like('keterangan', $get['search'])
                                                ->or_like('deskripsi', $get['search'])
                                                ->where('kategori', 'pemerintahan')
                                                ->get('postingan_tb', $config['per_page'], $from)->result();
            }

        $jenis = 'pemerintahan';
        $data['postingan'] = $this->Posting->dataPemerintahan($jenis)->result();
        $this->template->load('admin/include/master', 'admin/pemerintahan', $data);
    }

    public function potensi() 
        {          
            $get = $this->input->get(); 
            // pagination 

            $datae = $this->db->get_where('postingan_tb', array('kategori =' => 'potensi'));
            $jlhData = $datae->num_rows();
            $this->load->library('pagination');

            $config['base_url'] = site_url("DashboardController/potensi");
            $config['total_rows'] = $jlhData;
            $config['per_page'] = 5;
            $config['first_link']       = 'First';
            $config['last_link']        = 'Last';
            $config['next_link']        = 'Next';
            $config['prev_link']        = 'Prev';
            $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
            $config['full_tag_close']   = '</ul></nav></div>';
            $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
            $config['num_tag_close']    = '</span></li>';
            $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
            $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
            $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
            $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['prev_tagl_close']  = '</span>Next</li>';
            $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
            $config['first_tagl_close'] = '</span></li>';
            $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['last_tagl_close']  = '</span></li>';
            
            $from = $this->uri->segment(3);
            $this->pagination->initialize($config);

            if(!isset($_GET['search'])) {
                $data['pagination'] = $this->db->where('kategori', 'potensi')->get('postingan_tb', $config['per_page'], $from)->result();
            } else {
                $data['pagination'] = $this->db->like('nama', $get['search'])
                                                ->or_like('keterangan', $get['search'])
                                                ->or_like('deskripsi', $get['search'])
                                                ->where('kategori', 'potensi')
                                                ->get('postingan_tb', $config['per_page'], $from)->result();
            }
            // end pagination

            // $data['potensi'] = $this->AdminModel->tampil_potensi($config["per_page"], $data['page']);
            $jenis = 'potensi';
            $data['postingan'] = $this->Posting->dataPotensi($jenis)->result();
            $this->template->load('admin/include/master', 'admin/potensi', $data);
            // $this->load->view('potensi',$data);
        }

    public function prestasi()
    {

        $get = $this->input->get(); 
        // pagination 

        $datae = $this->db->get_where('prestasi_tb', array('kategori =' => 'prestasi'));
        $jlhData = $datae->num_rows();
        $this->load->library('pagination');

        $config['base_url'] = site_url("DashboardController/prestasi");
        $config['total_rows'] = $jlhData;
        $config['per_page'] = 5;
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
        
        $from = $this->uri->segment(3);
        $this->pagination->initialize($config);

        if(!isset($_GET['search'])) {
            $data['pagination'] = $this->db->where('kategori','prestasi')->get('prestasi_tb', $config['per_page'], $from)->result();
        } else {
            $data['pagination'] = $this->db->like('nama', $get['search'])
                                            ->or_like('keterangan', $get['search'])
                                            ->or_like('deskripsi', $get['search'])
                                            ->where('kategori','prestasi')
                                            ->get('prestasi_tb', $config['per_page'], $from)->result();
        }
        // end pagination

        // $data['potensi'] = $this->AdminModel->tampil_potensi($config["per_page"], $data['page']);
        $jenis = 'prestasi';
        $data['postingan'] = $this->db->get('prestasi_tb')->result();
        $this->template->load('admin/include/master', 'admin/prestasi', $data);
    }

    public function tentang()
    {
        $data['postingan'] = $this->db->get('tentang_tb')->result_array();
        $this->template->load('admin/include/master', 'admin/tentang', $data);
    }
    public function tautan()
    {
        $data['tautan'] = $this->db->get('tautan_tb')->result();
        $this->template->load('admin/include/master', 'admin/tautan', $data);
    }
    //------------------------------------------------------------------------------------

    public function posting()
    {
        $data['kategori'] = $this->Posting->dataKategori()->result();
        $this->template->load('admin/include/master', 'admin/input_pem', $data);
    }
    public function postingPotensi()
    {
        $data['kategori'] = $this->Posting->kategoriPotensi()->result();
        $this->template->load('admin/include/master', 'admin/postingPotensi', $data);
    }
    public function tautanInput()
    {
        $this->template->load('admin/include/master', 'admin/tautan_input');    
    }
    public function input_prestasi(){
        $this->template->load('admin/include/master', 'admin/input_prestasi');
    }
    public function input_tentang(){
        $this->template->load('admin/include/master', 'admin/input_tentang');
    }

}
