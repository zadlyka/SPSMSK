<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ptsp extends CI_Controller {

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
		$this->load->view('ptsp/ptsp-beranda');
	}
	public function beranda()
	{
		$this->load->view('ptsp/ptsp-beranda');
	}
	public function beranda1()
	{
		$this->load->view('ptsp/ptsp-beranda1');
	}
	public function inputsuratmasuk()
	{
		$this->load->view('ptsp/ptsp-input-surat-masuk');
	}
	public function inputsuratmasukresult()
	{
		$this->load->view('ptsp/ptsp-input-surat-masuk-result');
	}
	public function status()
	{
		$x['data']=$this->Suratmasukmodel->get_all_pengguna();
		$this->load->view('ptsp/ptsp-status',$x);
	}
	public function statussk()
	{
		$x['data']=$this->Suratkeluarmodel->get_all_pengguna();
		$this->load->view('ptsp/ptsp-status-sk',$x);
	}
	public function arsipsuratmasuk()
	{
		$x['data']=$this->Suratmasukmodel->get_all_pengguna();
		$this->load->view('ptsp/ptsp-arsip-sm',$x);
	}
	public function arsipsuratkeluar()
	{
		$x['data']=$this->Suratkeluarmodel->get_all_pengguna();
		$this->load->view('ptsp/ptsp-arsip-sk',$x);
	}

}

/* End of file ptsp.php */
/* Location: ./application/controllers/ptsp.php */