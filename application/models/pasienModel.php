<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pasienModel extends CI_Model{
    public function select(){
        $data = $this->db->select('*')
                         ->from('pasien')
                         ->get()->result();
                         return $data;
    }

    public function addNewPasien($data){
        $res = $this->db->insert('pasien',$data);
        if($res){
            return true;
        } else {
            return false;
        }
    }

    public function getDetailPasien($id){
        $data = $this->db->select('*')
                         ->from('pasien')
                         ->where('no_rekam_medis',$id)
                         ->get()->row();
                         return $data;
    }

    public function editPasien($data,$id){
        $res = $this->db->update('pasien', $data, array('no_rekam_medis' => $id));
        return $res;
    }

    public function deletePasien($id){
        $res = $this->db->delete('pasien', array('no_rekam_medis' => $id));
    }

    public function cek_no_remed($no_rm){
        $q="SELECT Count(no_rekam_medis) as jumlah FROM pasien where no_rekam_medis = '$no_rm'";
        return $this->db->query($q)->result();
    }
}