<?php
class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
    }

    public function index()
    {
        $this->load->view('V_login');
    }

    public function proses_login()
    {
        $user = $this->input->post('username');
        $pass = $this->input->post('password');
        $this->M_login->proses_login($user, $pass);
    }
}
