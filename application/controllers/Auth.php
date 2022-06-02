<?php
class Auth extends CI_Controller {
    
    function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model("AdminModel");
    }

    public function index(){
        
        if ($this->session->userdata('username')) {
            redirect('Admin');
        }
        
        $this->form_validation->set_rules('username','Username','required|trim');
        $this->form_validation->set_rules('password','Password','required|trim');

        if ($this->form_validation->run()==false){
            $this->load->view('Auth/login');
        }
        else {
            $this->_login();
        }

    }

    private function _login(){
        
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $user = $this->db->get('user')->row_array();

        if($user){
            $this->session->set_userdata(["login" => $user['id_user']]);
                redirect('admin');
        }
        else {
            $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
            username / password salah!
          </div>');
          redirect('auth');
        }
    }

    public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('auth'));
	}
}