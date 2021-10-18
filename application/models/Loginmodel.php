<?php
class Loginmodel extends CI_Model{
    function cekadmin($username,$password){
        $hasil=$this->db->query("SELECT * FROM tbl_pengguna WHERE username='$username' AND password='$password'");
        return $hasil;
    }
  
}
