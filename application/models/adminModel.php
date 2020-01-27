<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class adminModel extends CI_Model{
    public function select(){
        $data = $this->db->select('*')
                         ->from('admin')
                         ->get()->result();
                         return $data;
    }

    public function cek_signin(){
        $username = set_value('username');
        $password = set_value('password');

        $hasil = $this->db->where('username',$username)
                          ->where('password',md5($password))
                          ->limit(1)
                          ->get('admin');
                if($hasil->num_rows()>0){
                    return $hasil->row();
                } else {
                    return array();
                }
    }
}