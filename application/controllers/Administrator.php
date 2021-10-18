<?php
class Administrator extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->model('Loginmodel');
    }
    function index(){
        $this->load->view('admin/login');
    }
    function Auth(){
        $username=strip_tags(str_replace("'", "", $this->input->post('username',TRUE)));
        $password=strip_tags(str_replace("'", "", $this->input->post('password',TRUE)));
        $cadmin=$this->Loginmodel->cekadmin($username,$password);
        if($cadmin->num_rows() > 0){
            $xcadmin=$cadmin->row_array();
            $newdata = array(
                'idadmin'   => $xcadmin['id'],
                'username'  => $xcadmin['username'],
                'nama'      => $xcadmin['nama'],
                'pic'     => $xcadmin['pic'],
                'logged_in' => TRUE
            );

            $this->session->set_userdata($newdata);
            if ($newdata['pic']=='Administrator PTSP') {
                # code...
                redirect('Ptsp');
            }elseif ($newdata['pic']=='Administrator TU') {
                # code...
                redirect('Tu');
            }elseif ($newdata['pic']=='Administrator Utama') {
                # code...
                redirect('Su');
            }
             
        }else{
            redirect('Administrator/Gagallogin'); 
        }
    }


    function Gagallogin(){
        $url=base_url('Administrator');
        echo $this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert"><span class="fa fa-close"></span></button> Username Atau Password Salah</div>');
        redirect($url);
    }

    function Logout(){
        $url=base_url('Administrator');
        $this->session->sess_destroy();
        redirect($url);
    }
}