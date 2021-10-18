<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengirimsurat extends CI_Controller {

	function __construct(){
        parent:: __construct();
        $this->load->model('Pengirimmodel');
        $this->load->library('form_validation');
    }

	public function index()
	{
		$this->load->view('pengirimsurat/pengirim_surat');
	}

	public function Cek()
	{
		# code...
		$kode= $this->input->post('xkode');

		$ceksurat=$this->Pengirimmodel->ceksurat($kode);
		$ceksurats=$this->Pengirimmodel->ceksurats($kode);
		
        if($ceksurat->num_rows() > 0 && $ceksurats->num_rows() == 0){
            $xceksurat=$ceksurat->row_array();
            $newdata = array(
                'nomor_surat'   => $xceksurat['nomor_surat'],
                'tanggal_surat'   => $xceksurat['tanggal_surat'],
                'asal_surat'   => $xceksurat['asal_surat'],
                'perihal'   => $xceksurat['perihal'],
                'tanggal'   => $xceksurat['tanggal'],
                'status'   => $xceksurat['status'],
                'catatan'   => $xceksurat['catatan'],
                'file_surat'   => $xceksurat['file_surat'] 
                );

        $url=base_url('Pengirimsurat#cek');
        echo $this->session->set_flashdata('kode',$kode);
        echo $this->session->set_flashdata('nomor_surat',$newdata['nomor_surat']);
        echo $this->session->set_flashdata('tanggal_surat',$newdata['tanggal_surat']);
        echo $this->session->set_flashdata('asal_surat',$newdata['asal_surat']);
        echo $this->session->set_flashdata('perihal',$newdata['perihal']);
        echo $this->session->set_flashdata('tanggal',$newdata['tanggal']);
        echo $this->session->set_flashdata('status',$newdata['status']);
        echo $this->session->set_flashdata('catatan',$newdata['catatan']);
        echo $this->session->set_flashdata('file_surat',$newdata['file_surat']);
        redirect($url);
             
        }
        else if($ceksurats->num_rows() > 0 && $ceksurat->num_rows() == 0){
            $xceksurat=$ceksurats->row_array();
            $newdata = array(
                'nomor_surat'   => $xceksurat['nomor_surat'],
                'tanggal_surat'   => $xceksurat['tanggal_surat'],
                'tujuan_surat'   => $xceksurat['tujuan_surat'],
                'perihal'   => $xceksurat['perihal'],
                'tanggal'   => $xceksurat['tanggal'],
                'status'   => $xceksurat['status'],
                'catatan'   => $xceksurat['catatan'],
                'file_surat'   => $xceksurat['file_surat'] 
                );

        $url=base_url('Pengirimsurat#cek');
        echo $this->session->set_flashdata('kode',$kode);
        echo $this->session->set_flashdata('nomor_surat',$newdata['nomor_surat']);
        echo $this->session->set_flashdata('tanggal_surat',$newdata['tanggal_surat']);
        echo $this->session->set_flashdata('asal_surat',$newdata['tujuan_surat']);
        echo $this->session->set_flashdata('perihal',$newdata['perihal']);
        echo $this->session->set_flashdata('tanggal',$newdata['tanggal']);
        echo $this->session->set_flashdata('status',$newdata['status']);
        echo $this->session->set_flashdata('catatan',$newdata['catatan']);
        echo $this->session->set_flashdata('file_surat',$newdata['file_surat']);
        redirect($url);
             
        }
        else if ($kode == '') {
        # code...
        $url=base_url('Pengirimsurat#cek');
        echo $this->session->set_flashdata('tdk_ketemu',"Masukan Kode Pencarian");
        redirect($url);
        }
        else{
        $url=base_url('Pengirimsurat#cek');
        echo $this->session->set_flashdata('tdk_ketemu',"Data Tidak ditemukan, Silahkan Cek Kode Pencarian yang Telah Anda Inputkan");
        redirect($url);
        }

	}

}

/* End of file Pengirimsurat.php */
/* Location: ./application/controllers/Pengirimsurat.php */