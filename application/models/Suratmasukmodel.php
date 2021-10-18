<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suratmasukmodel extends CI_Model {

	function get_all_pengguna(){
	    $this->db->order_by("tanggal", "desc");
		$hsl=$this->db->get('surat_masuk');
		return $hsl;	
	}

	function get_edit_pengguna($kode){
		$hsl=$this->db->get_where('surat_masuk',array('kode' => $kode));
		return $hsl;	
	}

	function cekkode()
	{
		# code...
		$kode = "";
		$chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ123456789";
		$cek = 1;
		$ceks = 1;
		while($cek > 0 && $ceks > 0){
			$charArray = str_split($chars);
			for ($i=0; $i < 10; $i++) { 
				# code...
				$randitem = array_rand($charArray);
				$kode .= "".$charArray[$randitem];
			}
			$sql = $this->db->query("SELECT kode FROM surat_masuk where kode='$kode'");
			$cek = $sql->num_rows();
			$sqls = $this->db->query("SELECT kode FROM surat_keluar where kode='$kode'");
			$ceks = $sqls->num_rows();
		}
		
		return $kode;

	}

	function ceknomorsurat($nomor_surat)
	{
		# code...
		$hasil=$this->db->query("SELECT * FROM surat_masuk WHERE nomor_surat='$nomor_surat'");
        return $hasil;
	}

	function simpan_surat($kode,$nomor_surat,$tanggal_surat,$asal_surat,$perihal,$status,$diteruskan,$tanggal,$waktu,$tahun,$penerima,$petugas_ptsp,$petugas_tu,$catatan,$file_surat){
		$hsl=$this->db->query("INSERT INTO surat_masuk (kode,nomor_surat,tanggal_surat,asal_surat,perihal,status,diteruskan,tanggal,waktu,tahun,penerima,petugas_ptsp,petugas_tu,catatan,file_surat) VALUES ('$kode','$nomor_surat','$tanggal_surat','$asal_surat','$perihal','$status','$diteruskan','$tanggal','$waktu','$tahun','$penerima','$petugas_ptsp','$petugas_tu','$catatan','$file_surat')");
		return $hsl;
	}

	function simpan_upload($file_surat,$kode){
		$hsl=$this->db->query("UPDATE surat_masuk set file_surat ='$file_surat' where kode ='$kode'");
			return $hsl;
	}

	function update_surat($kode,$nomor_surat,$tanggal_surat,$asal_surat,$perihal,$status,$diteruskan,$tanggal,$waktu,$tahun,$penerima,$petugas_tu,$catatan){

		$data = [
	            'nomor_surat' => $nomor_surat,
	            'tanggal_surat' => $tanggal_surat,
	            'asal_surat' => $asal_surat,
	            'perihal' => $perihal,
	            'status' => $status,
	            'diteruskan' => $diteruskan,
	            'tanggal' => $tanggal,
	            'waktu' => $waktu,
	            'tahun' => $tahun,
	            'penerima' => $penerima,
	            'petugas_tu' => $petugas_tu,
	            'catatan' => $catatan,
	        ];
        $this->db->where('kode', $kode);
        $this->db->update('surat_masuk', $data);
	}

	function update_arsip($kode,$nomor_surat,$tanggal_surat,$asal_surat,$perihal,$tanggal){

		$hsl=$this->db->query("UPDATE surat_masuk set nomor_surat='$nomor_surat',tanggal_surat='$tanggal_surat',asal_surat='$asal_surat',perihal='$perihal',tanggal='$tanggal' where kode ='$kode'");
			return $hsl;
	}

	function hapus_surat($kode){
		$hsl=$this->db->query("DELETE FROM surat_masuk where kode ='$kode'");
		return $hsl;
	}

    function removefile($file_surat,$kode){
		$hsl=$this->db->query("UPDATE surat_masuk set file_surat ='$file_surat' where kode ='$kode'");
			return $hsl;
	}
}

/* End of file suratmasukmodel.php */
/* Location: ./application/models/suratmasukmodel.php */