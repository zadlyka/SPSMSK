<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Su extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if(!isset($_SESSION['logged_in'])){
            $url=base_url('Administrator');
            redirect($url);
        };
		$this->load->model('Penggunamodel');
		$this->load->model('Suratmasukmodel');
		$this->load->model('Suratkeluarmodel');
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url' ,'download', 'file'));

	}

	function index()
	{
		$this->load->view('su/su-beranda');
	}
	
	function beranda1()
	{
		$this->load->view('su/su-beranda1');
	}
	
	function beranda()
	{
		$this->load->view('su/su-beranda');
	}

	 function Suratmasuk()
	{
		$x['data']=$this->Suratmasukmodel->get_all_pengguna();
		$this->load->view('su/su-surat-masuk',$x);
	}

	 function Suratmasukubah($kode)
	{
		$x['data']=$this->Suratmasukmodel->get_edit_pengguna($kode);
		$this->load->view('su/su-surat-masuk-ubah',$x);
	}


	 function Suratkeluar()
	{
		//$x['data']=$this-Suratkeluarmodel->get_all_pengguna();
		$this->load->view('su/su-surat-keluar');
	}

	function Tambahpengguna()
	{
		//$x['data']=$this->suratkeluarmodel->get_all_pengguna();
		$this->load->view('su/su-tambah-pengguna');
	}

	function Daftarpengguna()
	{
		$x['data']=$this->Penggunamodel->get_all_pengguna();
		$this->load->view('su/su-daftar-pengguna',$x);
	}

	 function Daftarpenggunaubah($id)
	{
		$x['data']=$this->Penggunamodel->get_edit_pengguna($id);
		$this->load->view('su/su-daftar-pengguna-ubah',$x);
	}

	 function Statussuratkeluar()
	{
		$x['data']=$this->Suratkeluarmodel->get_all_pengguna();
		$this->load->view('su/su-status-surat-keluar',$x);
	}

	 function Statussuratkeluarubah($kode)
	{
		$x['data']=$this->Suratkeluarmodel->get_edit_pengguna($kode);
		$this->load->view('su/su-status-surat-keluar-ubah',$x);
	}

	 function Arsipsuratmasuk()
	{
		$x['data']=$this->Suratmasukmodel->get_all_pengguna();
		$this->load->view('su/su-arsip-sm',$x);
	}

	 function Arsipsuratkeluar()
	{
		$x['data']=$this->Suratkeluarmodel->get_all_pengguna();
		$this->load->view('su/su-arsip-sk',$x);
	}

	 function Editarsipsk($kode)
	{
		$x['data']=$this->Suratkeluarmodel->get_edit_pengguna($kode);
		$this->load->view('su/su-edit-arsip-sk',$x);
	}
	 function Editarsipsm($kode)
	{
		$x['data']=$this->Suratmasukmodel->get_edit_pengguna($kode);
		$this->load->view('su/su-edit-arsip-sm',$x);
	}

}

/* End of file su.php */
/* Location: ./application/controllers/su.php */