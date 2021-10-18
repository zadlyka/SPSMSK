<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengirimmodel extends CI_Model {

	function Ceksurat($kode){
        $hasil=$this->db->query("SELECT * FROM surat_masuk where kode='$kode'");
        return $hasil;
    }
    
    function Ceksurats($kode){
        $hasil=$this->db->query("SELECT * FROM surat_keluar where kode='$kode'");
        return $hasil;
    }

}

/* End of file pelangganmodel.php */
/* Location: ./application/models/pelangganmodel.php */