<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PostinganController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct(); 
        $this->load->helper('url');
        $this->load->model('Posting');

        if ($this->session->userdata('status') != "LOGIN") {
            $this->session->set_flashdata('harus_login', ' Pastikan Login terlebih dahulu');
            redirect('AuthController/index');
        }
    } 

//=============================================================== PEMERINTAHAN ==================================================================================

public function posting()
    {
        //print_r($this->input->post());
        $post = $this->input->post();
        $nama = $this->input->post('nama');
        $kategori = 'pemerintahan';
        $keterangan = $this->input->post('keterangan');
        $gambar  = $this->input->post('file');
        if($post['nama'] == "" || $post['nama'] == NULL) {
            ?> <script> alert("Nama postingan tidak boleh kosong !"); javascript:history.back()</script> <?php
        }
        $data['nama'] = $post['nama'];
        $data['kategori'] = 'pemerintahan';

        if($post['deskripsi'] == "") {
            ?> <script> alert("Deskripsi postingan tidak boleh kosong !"); javascript:history.back()</script> <?php
        }
        $data['deskripsi'] = $post['deskripsi'];

        if($post['keterangan'] == "") {
            ?> <script> alert("Keterangan postingan tidak boleh kosong !"); javascript:history.back()</script> <?php
        }
        $data['keterangan'] = $post['keterangan'];

        if($post['sub_kategori'] == "" || $post['sub_kategori'] == NULL) {
            ?> <script> alert("Kategori postingan tidak boleh kosong !"); javascript:history.back()</script> <?php
        }
        $data['sub_kategori'] = $post['sub_kategori'];

        $path = "images/uploads/";
        if(!is_dir($path)){
            mkdir($path,0777,TRUE);
            fopen($path."/index.php", "w");
        }
        $file = $_FILES['file'];
        $xxxx = explode('.',$file['name']);
        $nmxxxx = explode(' ',$xxxx[0]);
        $ext = end($xxxx);
        $rand = rand(11,99);
        $name = "file_".$nmxxxx[0]."_".$rand.".".$ext;
        $config['file_name']        = $name;
        $config['upload_path']      = $path;
        $config['allowed_types']    = array('jpg','jpeg','gif','png','mp4');
        // $config['max_size']         = 5000;
        $link = $path."/".$name;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if($this->upload->do_upload('file')){
            $data['gambar'] = $name;
        } else {
            $data['gambar'] = "";              
        }
        /*echo "<pre>";  print_r($data);  echo "</pre>";*/
        $insert = $this->db->insert('postingan_tb', $data);

        if($insert){
            $this->session->set_flashdata('sukses', 'Postingan baru berhasil diinput');
            redirect('DashboardController/posting'); 
        }            
            
    }

    //EDIT PEMERINTAHAN
    public function ubah_foto($tipe=''){
        $post = $this->input->post();
        
       // $dataupload ['idemp_usr'] = $post['pegawai'];
        $path = "images/uploads/";
        if(!is_dir($path)){
            mkdir($path,0777,TRUE);
            fopen($path."/index.php", "w");
        }
        $file = $_FILES['foto'];
        $xxxx = explode('.',$file['name']);
        $nmxxxx = explode(' ',$xxxx[0]);
        $ext = end($xxxx);
        $rand = rand(11,99);
        $name = "postingan_".$nmxxxx[0]."_".$rand.".".$ext;
        $config['file_name']        = $name;
        $config['upload_path']      = $path;
        $config['allowed_types']    = array('jpg','jpeg','gif','png','mp4');
        // $config['max_size']         = 5000;
        $link = $path."/".$name;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if($this->upload->do_upload('foto')){
            $this->db->set('gambar', $name)
                    ->where('id', $post['id'])
                    ->update('postingan_tb');

            unlink("./images/uploads/".$post['fotolama']);
        }
        $this->session->set_flashdata('sukses', 'Gambar berhasil diperbaharui');
        redirect('DashboardController/pemerintahan'); 
    }

    public function editPemerintahan()
    {
        $post = $this->input->post();

        if($post['nama'] == "" || $post['nama'] == NULL) {
            ?> <script> alert("Nama postingan tidak boleh kosong !"); javascript:history.back()</script> <?php
        }
        $data['nama'] = $post['nama'];

        if($post['deskripsi'] == "") {
            ?> <script> alert("Deskripsi postingan tidak boleh kosong !"); javascript:history.back()</script> <?php
        }
        $data['deskripsi'] = $post['deskripsi'];

        if($post['keterangan'] == "") {
            ?> <script> alert("Keterangan postingan tidak boleh kosong !"); javascript:history.back()</script> <?php
        }
        $data['keterangan'] = $post['keterangan'];

        $this->db->update('postingan_tb', $data, "id =".$post['id']);
        $this->session->set_flashdata('sukses', 'Data berhasil diperbaharui');
        redirect('DashboardController/pemerintahan'); 
    }

    function dataHapus()
    {
        $id = $this->input->post('id_postingan');
        $this->Posting->dataHapus($id);
        $this->session->set_flashdata('sukses_hapus', 'Data berhasil di hapus');
        redirect('DashboardController/Pemerintahan');
    }   
    
//====================================================================== PRESTASI ========================================================================================
    
public function input_prestasi()
{
    $post = $this->input->post();
    $nama = $this->input->post('nama');
    $kategori = 'prestasi';
    $keterangan = $this->input->post('keterangan');
    $gambar  = $this->input->post('file');
    if($post['nama'] == "" || $post['nama'] == NULL) {
        ?> <script> alert("Nama postingan tidak boleh kosong !"); javascript:history.back()</script> <?php
    }
    $data['nama'] = $post['nama'];
    $data['kategori'] = 'prestasi';
    $data['keterangan'] = $post['keterangan'];
    $data['deskripsi'] = $post['deskripsi'];
    $data['tanggal'] = $post['tanggal'];


    $path = "images/uploads/";
    if(!is_dir($path)){
        mkdir($path,0777,TRUE);
        fopen($path."/index.php", "w");
    }
    $file = $_FILES['file'];
    $xxxx = explode('.',$file['name']);
    $nmxxxx = explode(' ',$xxxx[0]);
    $ext = end($xxxx);
    $rand = rand(11,99);
    $name = "file_".$nmxxxx[0]."_".$rand.".".$ext;
    $config['file_name']        = $name;
    $config['upload_path']      = $path;
    $config['allowed_types']    = array('jpg','jpeg','gif','png','mp4');
    // $config['max_size']         = 5000;
    $link = $path."/".$name;

    $this->load->library('upload', $config);
    $this->upload->initialize($config);

    if($this->upload->do_upload('file')){
        $data['gambar'] = $name;
    } else {
        $data['gambar'] = "";              
    }
    /*echo "<pre>";  print_r($data);  echo "</pre>";*/
    $insert = $this->db->insert('prestasi_tb', $data);

    if($insert){
        $this->session->set_flashdata('sukses', 'Postingan baru berhasil diinput');
        redirect('DashboardController/posting'); 
    }
}

function dataHapusPrestasi()
{
    $id = $this->input->post('id_postingan');
    $this->db->delete('prestasi_tb', array('id' => $id));
    $this->session->set_flashdata('message', 'Data berhasil di hapus');
    redirect('DashboardController/prestasi');
}

    public function ubah_foto_prestasi($tipe=''){
        $post = $this->input->post();
        
       // $dataupload ['idemp_usr'] = $post['pegawai'];
        $path = "images/uploads/";
        if(!is_dir($path)){
            mkdir($path,0777,TRUE);
            fopen($path."/index.php", "w");
        }
        $file = $_FILES['foto'];
        $xxxx = explode('.',$file['name']);
        $nmxxxx = explode(' ',$xxxx[0]);
        $ext = end($xxxx);
        $rand = rand(11,99);
        $name = "prestasi_".$nmxxxx[0]."_".$rand.".".$ext;
        $config['file_name']        = $name;
        $config['upload_path']      = $path;
        $config['allowed_types']    = array('jpg','jpeg','gif','png','mp4');
        // $config['max_size']         = 5000;
        $link = $path."/".$name;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if($this->upload->do_upload('foto')){
            $this->db->set('gambar', $name)
                    ->where('id', $post['id'])
                    ->update('prestasi_tb');

            unlink("./images/uploads/".$post['fotolama']);
        }
        $this->session->set_flashdata('sukses_hapus', 'Gambar berhasil diperbaharui');
        redirect('DashboardController/prestasi'); 
    }

    function dataEdit($id)
    {
        $data['dataEditPemerintahan'] = $this->Posting->dataEditPemerintahan($id);
        $this->template->load('admin/include/master', 'admin/edit', $data);
    }

    function editPrestasi($id)
    {
        $data['dataEditPemerintahan'] = $this->db->get_where('prestasi_tb', array('id' => $id));
        $this->template->load('admin/include/master', 'admin/editPrestasi', $data);
    }

    public function editPemerintahanPrestasi()
    {
        $post = $this->input->post();

        $data['nama'] = $post['nama'];
        $data['tanggal'] = $post['tanggal'];
        $data['deskripsi'] = $post['deskripsi'];
        $data['keterangan'] = $post['keterangan'];

        $this->db->update('prestasi_tb', $data, "id =".$post['id']);
        $this->session->set_flashdata('sukses_hapus', 'Data berhasil diperbaharui');
        redirect('DashboardController/prestasi'); 
    }
    //========================================================================= TENTANG ===================================================================

    public function input_tentang(){
        $post = $this->input->post();
        $nama = $this->input->post('nama');
        $keterangan = $this->input->post('keterangan');
        $gambar  = $this->input->post('file');
        if($post['nama'] == "" || $post['nama'] == NULL) {
            ?> <script> alert("Nama postingan tidak boleh kosong !"); javascript:history.back()</script> <?php
        }
        $data['nama'] = $post['nama'];
        $data['keterangan'] = $post['keterangan'];
        $data['tanggal'] = $post['tanggal'];
    
        $path = "images/uploads/";
        if(!is_dir($path)){
            mkdir($path,0777,TRUE);
            fopen($path."/index.php", "w");
        }
        $file = $_FILES['file'];
        $xxxx = explode('.',$file['name']);
        $nmxxxx = explode(' ',$xxxx[0]);
        $ext = end($xxxx);
        $rand = rand(11,99);
        $name = "file_".$nmxxxx[0]."_".$rand.".".$ext;
        $config['file_name']        = $name;
        $config['upload_path']      = $path;
        $config['allowed_types']    = array('jpg','jpeg','gif','png','mp4');
        // $config['max_size']         = 5000;
        $link = $path."/".$name;
    
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
    
        if($this->upload->do_upload('file')){
            $data['gambar'] = $name;
        } else {
            $data['gambar'] = "";              
        }
        /*echo "<pre>";  print_r($data);  echo "</pre>";*/
        $insert = $this->db->insert('tentang_tb', $data);
    
        if($insert){
            $this->session->set_flashdata('sukses', 'Postingan baru berhasil diinput');
            redirect('DashboardController/posting'); 
        }
    }
    
    function dataHapusTentang()
    {
        $id = $this->input->post('id_postingan');
        $this->db->delete('tentang_tb', array('id' => $id));
        $this->session->set_flashdata('message', 'Data berhasil di hapus');
        redirect('DashboardController/tentang');
    }
    
        public function ubah_foto_tentang($tipe=''){
            $post = $this->input->post();
            
           // $dataupload ['idemp_usr'] = $post['pegawai'];
            $path = "images/uploads/";
            if(!is_dir($path)){
                mkdir($path,0777,TRUE);
                fopen($path."/index.php", "w");
            }
            $file = $_FILES['foto'];
            $xxxx = explode('.',$file['name']);
            $nmxxxx = explode(' ',$xxxx[0]);
            $ext = end($xxxx);
            $rand = rand(11,99);
            $name = "tentang_".$nmxxxx[0]."_".$rand.".".$ext;
            $config['file_name']        = $name;
            $config['upload_path']      = $path;
            $config['allowed_types']    = array('jpg','jpeg','gif','png','mp4');
            // $config['max_size']         = 5000;
            $link = $path."/".$name;
    
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
    
            if($this->upload->do_upload('foto')){
                $this->db->set('gambar', $name)
                        ->where('id', $post['id'])
                        ->update('tentang_tb');
    
                unlink("./images/uploads/".$post['fotolama']);
            }
            $this->session->set_flashdata('sukses_hapus', 'Gambar berhasil diperbaharui');
            redirect('DashboardController/tentang'); 
        }
    
        function dataEditt($id)
        {
            $data['dataEditPemerintahan'] = $this->Posting->dataEditPemerintahan($id);
            $this->template->load('admin/include/master', 'admin/edit', $data);
        }
    
        function editTentang($id)
        {
            $data['dataEditPemerintahan'] = $this->db->get_where('tentang_tb', array('id' => $id));
            $this->template->load('admin/include/master', 'admin/editTentang', $data);
        }
    
        public function editPemerintahanTentang()
        {
            $post = $this->input->post();
    
            $data['nama'] = $post['nama'];
            $data['tanggal'] = $post['tanggal'];
            $data['deskripsi'] = $post['deskripsi'];
            $data['keterangan'] = $post['keterangan'];
    
            $this->db->update('tentang_tb', $data, "id =".$post['id']);
            $this->session->set_flashdata('sukses_hapus', 'Data berhasil diperbaharui');
            redirect('DashboardController/tentang'); 
        }

    //========================================================================= POTENSI ===================================================================
    function postingPotensi()
    {
        $post = $this->input->post();
        $nama = $this->input->post('nama');
        $keterangan = $this->input->post('keterangan');
        $gambar  = $this->input->post('file');
        if($post['nama'] == "" || $post['nama'] == NULL) {
            ?> <script> alert("Nama postingan tidak boleh kosong !"); javascript:history.back()</script> <?php
        }
        $data['nama'] = $post['nama'];
        $data['kategori'] = 'potensi';

        if($post['deskripsi'] == "") {
            ?> <script> alert("Deskripsi postingan tidak boleh kosong !"); javascript:history.back()</script> <?php
        }
        $data['deskripsi'] = $post['deskripsi'];

        if($post['keterangan'] == "") {
            ?> <script> alert("Keterangan postingan tidak boleh kosong !"); javascript:history.back()</script> <?php
        }
        $data['keterangan'] = $post['keterangan'];

        if($post['sub_kategori'] == "" || $post['sub_kategori'] == NULL) {
            ?> <script> alert("Kategori postingan tidak boleh kosong !"); javascript:history.back()</script> <?php
        }
        $data['sub_kategori'] = $post['sub_kategori'];

        $path = "images/uploads/";
        if(!is_dir($path)){
            mkdir($path,0777,TRUE);
            fopen($path."/index.php", "w");
        }
        $file = $_FILES['file'];
        $xxxx = explode('.',$file['name']);
        $nmxxxx = explode(' ',$xxxx[0]);
        $ext = end($xxxx);
        $rand = rand(11,99);
        $name = "file_".$nmxxxx[0]."_".$rand.".".$ext;
        $config['file_name']        = $name;
        $config['upload_path']      = $path;
        $config['allowed_types']    = array('jpg','jpeg','gif','png','mp4');
        // $config['max_size']         = 5000;
        $link = $path."/".$name;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if($this->upload->do_upload('file')){
            $data['gambar'] = $name;
        } else {
            $data['gambar'] = "";              
        }
        /*echo "<pre>";  print_r($data);  echo "</pre>";*/
        $insert = $this->db->insert('postingan_tb', $data);

        if($insert){
            $this->session->set_flashdata('sukses', 'Postingan baru berhasil diinput');
            redirect('DashboardController/posting'); 
        }
    }
    //============================================================================ TAUTAN =======================================================================
    public function inputTautan()
    {
        $nama = $this->input->post('nama');
        $website = $this->input->post('website');
        $alamat =  $this->input->post('alamat');

        $data = array(
            'nama' => $nama,
            'alamat' => $alamat,
            'website' => $website
        ); 

        if($this->db->insert('tautan_tb', $data))
        {
            $this->session->set_flashdata('sukses', 'Berhasil Input Tautan');
            redirect('DashboardController/tautan');
        } else {
            redirect('DashboardController/tautan');
            $this->session->set_flashdata('gagal', 'Gagal Input Data');
        }
    }
    public function dataHapusTautan()
    {
        $id = $this->input->post('id');
        $this->db->where('id', $id);
        if($this->db->delete('tautan_tb')){
            $this->session->set_flashdata('sukses_hapus', 'Data berhasil di hapus');
            redirect('DashboardController/tautan');
        } else {
            $this->session->set_flashdata('gagal_hapus', 'Data gagal di hapus');
            redirect('DashboardController/tautan');
        }
    }

    //===========================================================================================================================================================
    public function view($id_postingan)
    {
        $cari = $this->db->get_where('postingan_tb', array('id' => $id_postingan));

        if ($cari->num_rows() > 0 ) {
            $data['gambar'] = $cari['gambar'];
            $data['cari'] = $cari->result_array();

            $this->template->load('user/include/master_site', 'user/view', $data);
        } else {
            show_404();
        }
    }

}
