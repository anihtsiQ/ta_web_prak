<?php
class Admin extends CI_Controller {

    public function __construct(){
        parent::__construct();

        if($this->session->userdata("login") == null)
		{
			redirect(base_url('Auth'));
		}
    }
    public function index(){
        $this->load->view('Template/navbar');
        $this->load->view('Admin/home_admin');
    }
    public function tambah(){
        $this->load->view('Template/navbar');
        $this->load->view('Admin/tambah');
    }
    public function transaksi(){
        $this->load->view('Template/navbar');
        $this->load->view('Admin/transaksi');
    }
    public function penjualan(){
        $this->load->view('Template/navbar');
        $this->load->view('Admin/penjualan');
    }


}