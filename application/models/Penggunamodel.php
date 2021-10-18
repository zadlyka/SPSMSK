<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penggunamodel extends CI_Model {

	function cekusername($username){
        $hasil=$this->db->query("SELECT * FROM tbl_pengguna WHERE username='$username'");
        return $hasil;
    }

    function simpan_pengguna($username,$password,$nama,$pic)
    {
    	# code...
    	$hsl=$this->db->query("INSERT INTO tbl_pengguna (username,password,nama,pic) VALUES ('$username','$password','$nama','$pic')");
		return $hsl;
    }

    function get_all_pengguna(){
		$hsl=$this->db->get('tbl_pengguna');
		return $hsl;	
	}

	function get_edit_pengguna($id){
		$hsl=$this->db->get_where('tbl_pengguna',array('id' => $id));
		return $hsl;	
	}

	function edit_pengguna($id,$username,$password,$nama,$pic){

		$hsl=$this->db->query("UPDATE tbl_pengguna set username='$username',password='$password',nama='$nama',pic='$pic' where id ='$id'");
			return $hsl;
	}

	function hapus_pengguna($id){
		$hsl=$this->db->query("DELETE FROM tbl_pengguna where id ='$id'");
		return $hsl;
	}

}

/* End of file penggunamodel.php */
/* Location: ./application/models/penggunamodel.php */