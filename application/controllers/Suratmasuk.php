<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suratmasuk extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if(!isset($_SESSION['logged_in'])){
            $url=base_url('Administrator');
            redirect($url);
        };
		$this->load->model('Suratmasukmodel');
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url' ,'download', 'file'));

	}
	public function index()
	{
		$this->load->view('ptsp/ptsp-input-surat-masuk');
	}

	public function removefile($kode)
	{
		# code...
		$sql = $this->Suratmasukmodel->get_edit_pengguna($kode);
		$row = $sql->row_array();
		$file = $row['file_surat'];
        $path='./assets/surat/'.$file;
        
        if($file != ''){
		    $path='./assets/surat/'.$file;
            unlink($path);
		}
		
		$file_surat = '';
		$this->Suratmasukmodel->removefile($file_surat,$kode);
		redirect('tu/suratmasukubah/'.$kode,'refresh');
	}

	public function removefilearsips($kode)
	{
		# code...
		$sql = $this->Suratmasukmodel->get_edit_pengguna($kode);
		$row = $sql->row_array();
		$file = $row['file_surat'];
		
        if($file != ''){
		    $path='./assets/surat/'.$file;
            unlink($path);
		}
		
		$file_surat = '';
		$this->Suratmasukmodel->removefile($file_surat,$kode);
		redirect('su/editarsipsm/'.$kode,'refresh');
	}

	public function removefiles($kode)
	{
		# code...
		$sql = $this->Suratmasukmodel->get_edit_pengguna($kode);
		$row = $sql->row_array();
		$file = $row['file_surat'];
        
        if($file != ''){
		    $path='./assets/surat/'.$file;
            unlink($path);
		}
		
		$file_surat = '';
		$this->Suratmasukmodel->removefile($file_surat,$kode);
		redirect('su/suratmasukubah/'.$kode,'refresh');
	}

    function lakukan_download($file_surat){	
		$lokasi = './assets/surat/'.$file_surat;			
		force_download($lokasi,NULL);
	}

	public function simpan_surat()
	{
		$nomor_surat=$this->input->post('xnomor_surat');
		$tanggal_surat=$this->input->post('xtanggal_surat');
		$asal_surat=$this->input->post('xasal_surat');
		$perihal=$this->input->post('xperihal');
		$status='Belum Selesai';
		$diteruskan='';
		$tanggal=$this->input->post('xtanggal');
		$waktu='';
		$tahun=$this->input->post('xtahun');
		$penerima='';
		$petugas_ptsp=$this->input->post('xpetugas_ptsp');
		$petugas_tu='';
		$catatan='';
		$file_surat='';

		$kode = $this->Suratmasukmodel->cekkode();
		
		if ($nomor_surat!='') {
			# code...
			$cadmin=$this->Suratmasukmodel->ceknomorsurat($nomor_surat);
	        if($cadmin->num_rows() > 0){
	        	$url=base_url('Ptsp/Inputsuratmasuk');
		        echo $this->session->set_flashdata('msg','Nomor Surat telah diinputkan sebelumnya');
		        redirect($url);
	        }
		}

		$this->Suratmasukmodel->simpan_surat($kode,$nomor_surat,$tanggal_surat,$asal_surat,$perihal,$status,$diteruskan,$tanggal,$waktu,$tahun,$penerima,$petugas_ptsp,$petugas_tu,$catatan,$file_surat);

		$data['kode'] = $kode;
		$data['nomor_surat'] = $nomor_surat;
		$data['tanggal_surat'] = $tanggal_surat;
		$data['asal_surat'] = $asal_surat;
		$data['perihal'] = $perihal;
		$data['tanggal'] = $tanggal;

		$this->load->view('ptsp/ptsp-input-surat-masuk-result',$data);
	}

	public function edit_surat($kode)
	{
		# code...
		$config['upload_path']="./assets/surat";
	    $config['allowed_types']='pdf';
	    $nomor_surat=$this->input->post('xnomor_surat');
		$tanggal_surat=$this->input->post('xtanggal_surat');
		$asal_surat=$this->input->post('xasal_surat');
		$perihal=$this->input->post('xperihal');
		$status=$this->input->post('xstatus');
		$diteruskan=$this->input->post('xditeruskan');
		$tanggal=$this->input->post('xtanggal');
		$waktu=$this->input->post('xwaktu');
		$tahun=$this->input->post('xtahun');
		$penerima=$this->input->post('xpenerima');
		$petugas_tu=$this->input->post('xpetugas_tu');
		$catatan=$this->input->post('xcatatan');


	    $this->load->library('upload',$config);
		if($this->upload->do_upload("file")){
		    $data = array('upload_data' => $this->upload->data());
		    $temp= $data['upload_data']['file_name']; 
		    $file_surat = str_replace(" ", "_", $temp);

		  	$result= $this->Suratmasukmodel->simpan_upload($file_surat,$kode);
		        echo json_decode($result);

			redirect('tu/suratmasuk','refresh');
		}

		$this->Suratmasukmodel->update_surat($kode,$nomor_surat,$tanggal_surat,$asal_surat,$perihal,$status,$diteruskan,$tanggal,$waktu,$tahun,$penerima,$petugas_tu,$catatan);
	}


	public function edit_arsip($kode)
	{
		$config['upload_path']="./assets/surat";
	    $config['allowed_types']='pdf';
		$nomor_surat=$this->input->post('xnomor_surat');
		$tanggal_surat=$this->input->post('xtanggal_surat');
		$asal_surat=$this->input->post('xasal_surat');
		$perihal=$this->input->post('xperihal');
		$tanggal=$this->input->post('xtanggal');

		
		$this->load->library('upload',$config);
		if($this->upload->do_upload("file")){
		    $data = array('upload_data' => $this->upload->data());
		    $temp= $data['upload_data']['file_name']; 
		    $file_surat = str_replace(" ", "_", $temp);
		        
		  	
		  	$result= $this->Suratmasukmodel->simpan_upload($file_surat,$kode);
		        echo json_decode($result);
			redirect('tu/arsipsuratmasuk','refresh');
		}

		$this->Suratmasukmodel->update_arsip($kode,$nomor_surat,$tanggal_surat,$asal_surat,$perihal,$tanggal);
		
	}

	function hapus_arsip($kode){
	    $sql = $this->Suratmasukmodel->get_edit_pengguna($kode);
		$row = $sql->row_array();
		$file = $row['file_surat'];
        $path='./assets/surat/'.$file;
        
        if($file != ''){
		    $path='./assets/surat/'.$file;
            unlink($path);
		}
		$this->Suratmasukmodel->hapus_surat($kode);
		redirect('tu/arsipsuratmasuk','refresh');
	}

	function hapus_surat($kode){
	    $sql = $this->Suratmasukmodel->get_edit_pengguna($kode);
		$row = $sql->row_array();
		$file = $row['file_surat'];
        $path='./assets/surat/'.$file;
        
        if($file != ''){
		    $path='./assets/surat/'.$file;
            unlink($path);
		}
		$this->Suratmasukmodel->hapus_surat($kode);

		redirect('tu/suratmasuk','refresh');
	}
	
	function hapus_arsips($kode){
	    $sql = $this->Suratmasukmodel->get_edit_pengguna($kode);
		$row = $sql->row_array();
		$file = $row['file_surat'];
        $path='./assets/surat/'.$file;
        
        if($file != ''){
		    $path='./assets/surat/'.$file;
            unlink($path);
		}
		$this->Suratmasukmodel->hapus_surat($kode);
		redirect('su/arsipsuratmasuk','refresh');
	}

	function hapus_surats($kode){
	    $sql = $this->Suratmasukmodel->get_edit_pengguna($kode);
		$row = $sql->row_array();
		$file = $row['file_surat'];
        $path='./assets/surat/'.$file;
        
        if($file != ''){
		    $path='./assets/surat/'.$file;
            unlink($path);
		}
		$this->Suratmasukmodel->hapus_surat($kode);

		redirect('su/suratmasuk','refresh');
	}

}

/* End of file suratmasuk.php */
/* Location: ./application/controllers/suratmasuk.php */