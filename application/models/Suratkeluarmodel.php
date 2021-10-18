<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suratkeluarmodel extends CI_Model {

	function get_all_pengguna(){
	    $this->db->order_by("tanggal", "desc");
		$hsl=$this->db->get('surat_keluar');
		return $hsl;	
	}

	function simpan_upload($file_surat,$kode){
		$hsl=$this->db->query("UPDATE surat_keluar set file_surat ='$file_surat' where kode ='$kode'");
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
			$sql = $this->db->query("SELECT kode FROM surat_keluar where kode='$kode'");
			$cek = $sql->num_rows();
			
			$sqls = $this->db->query("SELECT kode FROM surat_masuk where kode='$kode'");
			$ceks = $sqls->num_rows();
		}
		
		return $kode;

	}

	function get_edit_pengguna($kode){
		$hsl=$this->db->get_where('surat_keluar',array('kode' => $kode));
		return $hsl;	
	}

	function ceknomorsurat($nomor_surat)
	{
		# code...
		$hasil=$this->db->query("SELECT * FROM surat_keluar WHERE nomor_surat='$nomor_surat'");
        return $hasil;
	}

	function simpan_surat($kode,$nomor_surat,$tanggal_surat,$tujuan_surat,$perihal,$status,$seksi,$tanggal,$waktu,$tahun,$petugas_seksi,$petugas_tu,$catatan,$file_surat){

		$hsl=$this->db->query("INSERT INTO surat_keluar (kode,nomor_surat,tanggal_surat,tujuan_surat,perihal,status,seksi,tanggal,waktu,tahun,petugas_seksi,petugas_tu,catatan,file_surat) VALUES ('$kode','$nomor_surat','$tanggal_surat','$tujuan_surat','$perihal','$status','$seksi','$tanggal','$waktu','$tahun','$petugas_seksi','$petugas_tu','$catatan','$file_surat')");
		
		return $hsl;
		
	}
	function update_surat($kode,$nomor_surat,$tanggal_surat,$tujuan_surat,$perihal,$status,$seksi,$tanggal,$waktu,$tahun,$petugas_seksi,$petugas_tu,$catatan){

		$hsl=$this->db->query("UPDATE surat_keluar set nomor_surat='$nomor_surat',tanggal_surat='$tanggal_surat',tujuan_surat='$tujuan_surat',perihal='$perihal',status='$status',tanggal='$tanggal',waktu='$waktu',tahun='$tahun',petugas_seksi='$petugas_seksi',petugas_tu='$petugas_tu',catatan='$catatan' where kode='$kode'");
			return $hsl;
	}

	function update_arsip($kode,$nomor_surat,$tanggal_surat,$tujuan_surat,$perihal,$tanggal){

		$hsl=$this->db->query("UPDATE surat_keluar set nomor_surat='$nomor_surat',tanggal_surat='$tanggal_surat',tujuan_surat='$tujuan_surat',perihal='$perihal',tanggal='$tanggal' where kode='$kode'");
			return $hsl;
	}

	function hapus_surat($kode){
		$hsl=$this->db->query("DELETE FROM surat_keluar where kode='$kode'");
		return $hsl;
	}
	
	function removefile($file_surat,$kode){
		$hsl=$this->db->query("UPDATE surat_keluar set file_surat ='$file_surat' where kode ='$kode'");
			return $hsl;
	}

}

/* End of file suratkeluarmodel.php */
/* Location: ./application/models/suratkeluarmodel.php */