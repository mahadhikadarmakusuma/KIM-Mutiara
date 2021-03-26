<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AuthController extends CI_Controller
{
    public function __contruct()
    { 
        parent::__contruct();
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('AdminModel');
    }
    public function index()
    {
        $this->load->view('admin/login');
    }
    public function prosesLogin()
    {
        $user  = 'kimsalatiga';
        $pass = 'mutiarasalatiga';
        $post = $this->input->post();

        if ($post['username'] != $user) {
                ?>
            <script>
                alert("Username salah, periksa kembali");
                location.href = "javascript:history.back()";
            </script>
                <?php
        } elseif ($post['password'] != $pass) {
                ?>
            <script>
                alert("Password salah, periksa kembali");
                location.href = "javascript:history.back()";
            </script>
                <?php
        } else {
            $data['active'] = "home";
            $this->session->set_userdata('status', 'LOGIN');
            redirect('DashboardController/index');
        }
    }
    public function dashboard()
    {
        $this->template->load('admin/include/master', 'admin/dashboard');
    }
    public function logout()
    {
        if (!empty($this->session->userdata('status'))) {
            $this->session->sess_destroy();
            redirect('AuthController/index');
        }
    }
}
