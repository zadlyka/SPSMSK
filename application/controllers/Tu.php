<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tu extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		if(!isset($_SESSION['logged_in'])){
            $url=base_url('Administrator');
            redirect($url,'refresh');
        };
        $this->load->model('Suratmasukmodel');
        $this->load->model('Suratkeluarmodel');
	}

	public function index()
	{
		$this->load->view('tu/tu-beranda');
	}
	
	public function beranda()
	{
		$this->load->view('tu/tu-beranda');
	}
	
	public function beranda1()
	{
		$this->load->view('tu/tu-beranda1');
	}

	public function suratmasuk()
	{
		$x['data']=$this->Suratmasukmodel->get_all_pengguna();
		$this->load->view('tu/tu-surat-masuk',$x);
	}

	public function suratmasukubah($kode)
	{
		$x['data']=$this->Suratmasukmodel->get_edit_pengguna($kode);
		$this->load->view('tu/tu-surat-masuk-ubah',$x);
	}


	public function suratkeluar()
	{
		//$x['data']=$this->suratkeluarmodel->get_all_pengguna();
		$this->load->view('tu/tu-surat-keluar');
	}

	public function statussuratkeluar()
	{
		$x['data']=$this->Suratkeluarmodel->get_all_pengguna();
		$this->load->view('tu/tu-status-surat-keluar',$x);
	}

	public function statussuratkeluarubah($kode)
	{
		$x['data']=$this->Suratkeluarmodel->get_edit_pengguna($kode);
		$this->load->view('tu/tu-status-surat-keluar-ubah',$x);
	}

	public function arsipsuratmasuk()
	{
		$x['data']=$this->Suratmasukmodel->get_all_pengguna();
		$this->load->view('tu/tu-arsip-sm',$x);
	}

	public function arsipsuratkeluar()
	{
		$x['data']=$this->Suratkeluarmodel->get_all_pengguna();
		$this->load->view('tu/tu-arsip-sk',$x);
	}

	public function editarsipsk($kode)
	{
		$x['data']=$this->Suratkeluarmodel->get_edit_pengguna($kode);
		$this->load->view('tu/tu-edit-arsip-sk',$x);
	}
	public function editarsipsm($kode)
	{
		$x['data']=$this->Suratmasukmodel->get_edit_pengguna($kode);
		$this->load->view('tu/tu-edit-arsip-sm',$x);
	}
}

/* End of file tu.php */
/* Location: ./application/controllers/tu.php */