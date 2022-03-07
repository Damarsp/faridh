<?php

class TransaksiPelanggan extends CI_Controller{
	
	function __construct() {
        parent::__construct();
        $this->load->model('model_nominal');
        $this->load->model('model_kategori');
        $this->load->model('model_keterangan');
        $this->load->library('pagination');
    }

    function index(){
    	$data['record']= $this->model_nominal->tampil_data()->result();
		$data['kategori']	= $this->model_kategori->tampilkan_data()->result();
        $data['keterangan']	= $this->model_keterangan->tampilkan_data()->result();
    	$this->load->view('transaksipelanggan/form_transaksipelanggan',$data);
    }

 function detail()
    {
    	$id= $this->uri->segment(3);
    		$this->load->model('model_kategori');
            $this->load->model('model_keterangan');
    		$data['kategori']	= $this->model_kategori->tampilkan_data()->result();
            $data['keterangan']   = $this->model_keterangan->tampilkan_data()->result();
            $data['record']     = $this->model_nominal->get_one($id)->row_array();
            $this->load->view('nominal/form_detailpelanggan',$data);
			
    }
}