<?php
class Admin extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model("AdminModel");

        if($this->session->userdata("login") == null)
		{
			redirect(base_url('Auth'));
		}
    }
    public function index(){
        $data['result'] = $this->AdminModel->semua_barang();
        
        $this->load->view('Template/navbar');
        $this->load->view('Admin/home_admin',$data);
        
    }
    public function tambah(){
        $data['result'] = $this->AdminModel->kategori_barang();

        $this->load->view('Template/navbar');
        $this->load->view('Admin/tambah',$data);
    }
    public function transaksi(){
        $this->load->view('Template/navbar');
        $this->load->view('Admin/transaksi');
    }
    public function penjualan(){
        $this->load->view('Template/navbar');
        $this->load->view('Admin/penjualan');
    }

    public function update_br($id_barang,$stok_br)
	{
        $id_barang = $this->input->post('id_br');
        $stok_br = $this->input->post('stok_br');

        $this->adminModel->update_stok($id_barang,$stok_br);

        redirect(base_url('Admin/home_admin'));
	}

}