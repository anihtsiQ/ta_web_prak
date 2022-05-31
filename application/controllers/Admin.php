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
        $data['result'] = $this->AdminModel->semua_barang();

        $this->load->view('Template/navbar');
        $this->load->view('Admin/transaksi',$data);
    }
    public function penjualan(){
        $data['result'] = $this->AdminModel->semua_penjualan();

        $this->load->view('Template/navbar');
        $this->load->view('Admin/penjualan',$data);

    }

    public function update_br()
	{
        $id_br = $this->input->post('id_br');
        $stok_br = $this->input->post('stok_br');
        
        if($this->AdminModel->update_stok($id_br,$stok_br))
{
            echo"
            <script>
                alert('Stok gagal diupdate');
				window.history.go(-1);
            </script>";
        }
        echo"
        <script>
            alert('Stok berhasil diupdate');
			window.history.go(-1);
        </script>";
	}

    public function insert_br(){
        $data = [
        'barang' => $this->input->post('nama_br'),
        'id_kategori' => $this->input->post('kategori_br'),
        'stok' => $this->input->post('stok_br'),
        'satuan' => $this->input->post('satuan')
        ];
        //var_dump($data);
        $this->AdminModel->insert_barang($data);
        echo"
        <script>
            alert('Stok berhasil diupdate');
			window.history.go(-1);
        </script>";
    }

    public function insert_transaksi(){
        $transaksi=[
            'nama_pelanggan' => $this->input->post('nama_pelanggan'),
            'jumlah' => $this->input->post('jumlah'),
            'id_barang' => $this->input->post('id_br'),
        ];

        $id_br = $this->input->post('id_br');
        $stok_br = $this->input->post('jumlah');

        //var_dump($id_br);
        $this->AdminModel->insert_transaksi($transaksi);
        $this->AdminModel->update_transaksi($id_br,$stok_br);

        echo"
        <script>
            alert('Stok berhasil diupdate');
			window.history.go(-1);
        </script>";

    }
}