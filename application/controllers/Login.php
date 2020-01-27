<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('adminModel');
	}

	public function index()
	{
		$this->load->view('vLogin');
	}

	public function singin(){
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');

		if($this->form_validation->run()==false)
        {
            $this->session->set_flashdata('alert','Gagal!!! Username atau Password invalid');
            $this->load->view('vlogin');
        }else{
            $this->load->model('adminModel');
            $valid_user = $this->adminModel->cek_signin();
            // print_r($valid_user);die();
            if($valid_user == false){
                $this->session->set_flashdata('error','Username atau Password Salah');
                redirect('Login');
            }else{
                $this->session->set_userdata('username', $valid_user->username);
                $this->session->set_userdata('password', $valid_user->password);
                $this->session->set_userdata('id_admin', $valid_user->id_admin);
                $this->session->set_userdata('nm_admin', $valid_user->nm_admin);
           // print_r($valid_user);die();
                redirect('Dashboard');
            }
        }
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
}
