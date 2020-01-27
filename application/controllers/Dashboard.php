<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('adminModel');
        $this->load->model('pasienModel');
        if($this->session->userdata('id_admin')==NULL){
            redirect('Login');
        }
	}
    
    public function index(){
        $this->load->view('admin/vDashBoard');
    }

    public function createKunjungan(){
        $this->data=null;
        $this->load->view('admin/createPasien');
    }

    public function daftar(){
        $this->load->library('form_validation');

        $this->form_validation->set_rules('no_rekam_medis','No. Rekam Medis','trim|required');
        $this->form_validation->set_rules('no_regis_nasional','No. Registrasi Nasional','trim|required');
        $this->form_validation->set_rules('nm_pasien','Nama Pasien','trim|required');
        $this->form_validation->set_rules('umur','Umur Pasien','trim|required');
        $this->form_validation->set_rules('jenis_kelamin','Jenis Kelamin','trim|required');

        if($this->form_validation->run() != false){
            $this->createKunjungan();
        } else {
            $no_rm = $this->input->post('no_r_m');
            $no_rn = $this->input->post('no_r_n');
            $nm = $this->input->post('nm_pasien');
            $umur = $this->input->post('umur');
            $jk = $this->input->post('j_k');

            $valid_user = $this->pasienModel->cek_no_remed($no_rm);
            // print_r($valid_user[0]->jumlah);die();
            if($valid_user[0]->jumlah == 1){
                $this->session->set_flashdata('error','No. Rekam Medis Sudah Ada');
                redirect('dashboard/createKunjungan');
            } else {
                $data_pasien = array (
                    'no_rekam_medis' => $no_rm,
                    'no_regis_nasional' => $no_rn,
                    'nama_pasien' => $nm,
                    'umur' => $umur,
                    'jenis_kelamin' => $jk
                    // 'no_rekam_medis' => $data[0]->jumlah
                );

                $this->pasienModel->addNewPasien($data_pasien);
                $this->session->set_flashdata('success', 'New Passenger created successfully');
                redirect(base_url('dashboard'));
            }
        }
    }
}