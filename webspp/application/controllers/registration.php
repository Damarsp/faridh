<?php

class Registration extends CI_Controller
{
	
	function __construct() {
        parent::__construct();
        $this->load->model('model_user');

    }


   public function register()
  {
    $this->load->view('auth/registration');
  }

	function post()
	{
		if(isset($_POST['submit'])){
            // proses data
            $nama       =  $this->input->post('nama',true);
            $username   =  $this->input->post('username',true);
            $password   =  $this->input->post('password',true);
            $level 	  	=  $this->input->post('level',true);
            $active	  	= $this->input->post('active',true);
            $data       =  array(   'nama_lengkap'=>$nama,
                                    'username'=>$username,
                                    'password'=>md5($password),
                                    'level'	=>$level,
                                     'active'=>$active);
            $this->db->insert('user',$data);
            redirect('');
        }
        else{
            //$this->load->view('operator/form_input');
            //$data['level']= $this->model_user->tampil_data()->result();
            $this->load->view('auth/registration');
        }
    }

}