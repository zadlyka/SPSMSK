<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suratkeluar extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if(!isset($_SESSION['logged_in'])){
            $url=base_url('Administrator');
            redirect($url);
        };
		$this->load->model('Suratkeluarmodel');
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url' ,'download', 'file'));
	}
	public function index()
	{
		$this->load->view('tu/tu-surat-keluar');
	}

	public function lakukan_downloads($file_surat){	
		$lokasi = './assets/surat/'.$file_surat;			
		force_download($lokasi,NULL);
	}

	public function removefile($kode)
	{
		# code...
		$sql = $this->Suratkeluarmodel->get_edit_pengguna($kode);
		$row = $sql->row_array();
		$file = $row['file_surat'];
        $path='./assets/surat/'.$file;
        
        if($file != ''){
		    $path='./assets/surat/'.$file;
            unlink($path);
		}
		
		$file_surat = '';
		$this->Suratkeluarmodel->removefile($file_surat,$kode);
		redirect('tu/statussuratkeluarubah/'.$kode,'refresh');
	}

	public function removefiles($kode)
	{
		# code...
		$sql = $this->Suratkeluarmodel->get_edit_pengguna($kode);
		$row = $sql->row_array();
		$file = $row['file_surat'];
        $path='./assets/surat/'.$file;
        
        if($file != ''){
		    $path='./assets/surat/'.$file;
            unlink($path);
		}
		
		$file_surat = '';
		$this->Suratkeluarmodel->removefile($file_surat,$kode);
		redirect('su/statussuratkeluarubah/'.$kode,'refresh');
	}

	public function removefilearsip($kode)
	{
		# code...
		$sql = $this->Suratkeluarmodel->get_edit_pengguna($kode);
		$row = $sql->row_array();
		$file = $row['file_surat'];
        $path='./assets/surat/'.$file;
        
        if($file != ''){
		    $path='./assets/surat/'.$file;
            unlink($path);
		}
		
		$file_surat = '';
		$this->Suratkeluarmodel->removefile($file_surat,$kode);
		redirect('tu/statussuratkeluarubah/'.$kode,'refresh');
	}

	public function removefilearsips($kode)
	{
		# code...
		$sql = $this->Suratkeluarmodel->get_edit_pengguna($kode);
		$row = $sql->row_array();
		$file = $row['file_surat'];
        $path='./assets/surat/'.$file;
        
        if($file != ''){
		    $path='./assets/surat/'.$file;
            unlink($path);
		}
		
		$file_surat = '';
		$this->Suratkeluarmodel->removefile($file_surat,$kode);
		redirect('su/statussuratkeluarubah/'.$kode,'refresh');
	}

	public function edit_surat($kode)
	{
		$config['upload_path']="./assets/surat";
	    $config['allowed_types']='pdf';
		$nomor_surat=$this->input->post('xnomor_surat');
		$tanggal_surat=$this->input->post('xtanggal_surat');
		$tujuan_surat=$this->input->post('xtujuan_surat');
		$perihal=$this->input->post('xperihal');
		$status=$this->input->post('xstatus');
		$seksi=$this->input->post('xseksi');
		$tanggal=$this->input->post('xtanggal');
		$waktu='';
		$tahun=$this->input->post('xtahun');
		$petugas_seksi=$this->input->post('xpetugas_seksi');
		$petugas_tu=$this->input->post('xpetugas_tu');
		$catatan=$this->input->post('xcatatan');

		
		$this->load->library('upload',$config);
		if($this->upload->do_upload("file")){
		    $data = array('upload_data' => $this->upload->data());
		    $temp= $data['upload_data']['file_name']; 
		    $file_surat = str_replace(" ", "_", $temp);
		  	
		  	$result= $this->Suratkeluarmodel->simpan_upload($file_surat,$kode);
		        echo json_decode($result);
			redirect('tu/arsipsuratkeluar','refresh');
		}

		$this->Suratkeluarmodel->update_surat($kode,$nomor_surat,$tanggal_surat,$tujuan_surat,$perihal,$status,$seksi,$tanggal,$waktu,$tahun,$petugas_seksi,$petugas_tu,$catatan);
		
	}


	public function simpan_surat()
	{
		# code...
		$config['upload_path']="./assets/surat";
	    $config['allowed_types']='pdf';
	    $nomor_surat=$this->input->post('xnomor_surat');
	    $tanggal_surat=$this->input->post('xtanggal_surat');
		$tujuan_surat=$this->input->post('xtujuan_surat');
		$perihal=$this->input->post('xperihal');
		$status='Belum Selesai';
		$seksi=$this->input->post('xseksi');
		$tanggal=$this->input->post('xtanggal');
		$waktu='';
		$tahun=$this->input->post('xtahun');
		$petugas_seksi=$this->input->post('xpetugas_seksi');
		$petugas_tu=$this->input->post('xpetugas_tu');
		$catatan=$this->input->post('xcatatan');
		
		$kode = $this->Suratkeluarmodel->cekkode();
		
		if ($nomor_surat!='') {
			# code...
			$cadmin=$this->Suratkeluarmodel->ceknomorsurat($nomor_surat);
	        if($cadmin->num_rows() > 0){
	        	$url=base_url('Tu/Suratkeluar');
		        echo $this->session->set_flashdata('msg','Nomor Surat telah diinputkan sebelumnya');
		        redirect($url);
	        }
		}

	    $this->load->library('upload',$config);
		if($this->upload->do_upload("file")){
		    $data = array('upload_data' => $this->upload->data());
		    $temp= $data['upload_data']['file_name']; 
		    $file_surat = str_replace(" ", "_", $temp);
		        
		    $result= $this->Suratkeluarmodel->simpan_surat($kode,$nomor_surat,$tanggal_surat,$tujuan_surat,$perihal,$status,$seksi,$tanggal,$waktu,$tahun,$petugas_seksi,$petugas_tu,$catatan,$file_surat);

		        echo json_decode($result);

		}else{
			$file_surat = '';
			$this->Suratkeluarmodel->simpan_surat($kode,$nomor_surat,$tanggal_surat,$tujuan_surat,$perihal,$status,$seksi,$tanggal,$waktu,$tahun,$petugas_seksi,$petugas_tu,$catatan,$file_surat);
		}
		

			$data['kode'] = $kode;
			$data['nomor_surat'] = $nomor_surat;
			$data['tanggal_surat'] = $tanggal_surat;
			$data['tujuan_surat'] = $tujuan_surat;
			$data['perihal'] = $perihal;
			$data['tanggal'] = $tanggal;

			redirect('tu/statussuratkeluar','refresh');
	}

	public function edit_arsip($kode)
	{
		$config['upload_path']="./assets/surat";
	    $config['allowed_types']='pdf';
		$nomor_surat=$this->input->post('xnomor_surat');
		$tanggal_surat=$this->input->post('xtanggal_surat');
		$tujuan_surat=$this->input->post('xtujuan_surat');
		$perihal=$this->input->post('xperihal');
		$tanggal=$this->input->post('xtanggal');

		
		$this->load->library('upload',$config);
		if($this->upload->do_upload("file")){
		    $data = array('upload_data' => $this->upload->data());
		    $temp= $data['upload_data']['file_name']; 
		    $file_surat = str_replace(" ", "_", $temp);
		        
		  	
		  	$result= $this->Suratkeluarmodel->simpan_upload($file_surat,$kode);
		        echo json_decode($result);
			redirect('tu/arsipsuratmasuk','refresh');
		}

		$this->Suratkeluarmodel->update_arsip($kode,$nomor_surat,$tanggal_surat,$tujuan_surat,$perihal,$tanggal);
		
	}

	function hapus_arsip($kode){
	    $sql = $this->Suratkeluarmodel->get_edit_pengguna($kode);
		$row = $sql->row_array();
		$file = $row['file_surat'];
        $path='./assets/surat/'.$file;
        
        if($file != ''){
		    $path='./assets/surat/'.$file;
            unlink($path);
		}
		$this->Suratkeluarmodel->hapus_surat($kode);
		redirect('tu/arsipsuratkeluar','refresh');
	}

	function hapus_surat($kode){
	    $sql = $this->Suratkeluarmodel->get_edit_pengguna($kode);
		$row = $sql->row_array();
		$file = $row['file_surat'];
        $path='./assets/surat/'.$file;
        
        if($file != ''){
		    $path='./assets/surat/'.$file;
            unlink($path);
		}
		$this->Suratkeluarmodel->hapus_surat($kode);

		redirect('tu/statussuratkeluar','refresh');
	}
	
	function hapus_arsips($kode){
	    $sql = $this->Suratkeluarmodel->get_edit_pengguna($kode);
		$row = $sql->row_array();
		$file = $row['file_surat'];
        $path='./assets/surat/'.$file;
        
        if($file != ''){
		    $path='./assets/surat/'.$file;
            unlink($path);
		}
		$this->Suratkeluarmodel->hapus_surat($kode);
		redirect('su/arsipsuratkeluar','refresh');
	}

	function hapus_surats($kode){
	    $sql = $this->Suratkeluarmodel->get_edit_pengguna($kode);
		$row = $sql->row_array();
		$file = $row['file_surat'];
        $path='./assets/surat/'.$file;
        
        if($file != ''){
		    $path='./assets/surat/'.$file;
            unlink($path);
		}
		$this->Suratkeluarmodel->hapus_surat($kode);

		redirect('su/statussuratkeluar','refresh');
	}

}

/* End of file suratkeluar.php */
/* Location: ./application/controllers/suratkeluar.php */