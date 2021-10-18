<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if(!isset($_SESSION['logged_in'])){
            $url=base_url('Administrator');
            redirect($url);
        };
		$this->load->model('Penggunamodel');
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url' ,'download', 'file'));

	}

	public function index()
	{
		$this->load->view('su/su-tambah-pengguna');
	}

    public function simpan_pengguna()
	{
		$username=$this->input->post('xusername');
		$password=$this->input->post('xpassword');
		$nama=$this->input->post('xnama');
		$pic=$this->input->post('xpic');

		$cek = $this->Penggunamodel->cekusername($username);
		if($cek->num_rows() > 0){
			$url=base_url('pengguna');
        	echo $this->session->set_flashdata('username','Username Telah Ada!');
        	redirect($url);
		}else{
			$this->Penggunamodel->simpan_pengguna($username,$password,$nama,$pic);
			$data['username'] = $username;
			$data['password'] = $password;
			$data['nama'] = $nama;
			$data['pic'] = $pic;

			$this->load->view('su/su-tambah-pengguna-result',$data);
		}

		
	}

	public function edit_pengguna($id)
	{
		$username=$this->input->post('xusername');
		$password=$this->input->post('xpassword');
		$nama=$this->input->post('xnama');
		$pic=$this->input->post('xpic');

		//$cek = $this->penggunamodel->cekusername($username);
		
		$this->Penggunamodel->edit_pengguna($id,$username,$password,$nama,$pic);
		redirect('su/daftarpengguna','refresh');
	}

	function hapus_pengguna($id){
		$this->Penggunamodel->hapus_pengguna($id);
		redirect('su/daftarpengguna','refresh');
	}
}

/* End of file pengguna.php */
/* Location: ./application/controllers/pengguna.php */