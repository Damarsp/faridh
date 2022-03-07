<?php

class Pelanggan extends MY_Controller{
	
	public function __construct(){
		parent::__construct();

		//memanggil function dari controller MY_Controller
		$this->cekLogin();

		//validasi jika session dengan lavel pelanggan mengakses halaman ini maka akan dialihkan ke halaman manager
		if ($this->session->userdata('level') == "admin") {
			redirect('admin/admin');
		} elseif ($this->session->userdata('level') == "karyawan") {
            redirect('karyawan/karyawan');
        }
	}
	
	public function index(){
		$this->load->view('Pelanggan/Dashboard');
	}
}
?>