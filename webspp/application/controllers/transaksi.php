<?php

class Transaksi extends CI_Controller{
	
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
    	$this->load->view('transaksi/form_transaksi',$data);
    }

	function edit()
    {
    	$id= $this->uri->segment(3);
    		$this->load->model('model_kategori');
            $this->load->model('model_keterangan');
    		$data['kategori']	= $this->model_kategori->tampilkan_data()->result();
            $data['keterangan']   = $this->model_keterangan->tampilkan_data()->result();
            $data['record']     = $this->model_nominal->get_one($id)->row_array();
            $this->load->view('nominal/form_edit',$data);	
    }

	function update() {
		$id 				= $this->input->post('id');
		$nama				= $this->input->post('nama_siswa');
		$nis				= $this->input->post('nis_siswa');
		$kategori 			= $this->input->post('kategori');
		$total_bulan		= $this->input->post('total_bulan');
		$harga_bayar		= $this->input->post('harga_bayar');
		$subtotal			= $this->input->post('subtotal');
		$tanggalpembayaran	= $this->input->post('tanggalpembayaran');
		$keterangan			= $this->input->post('keterangan');
		$data 				= array('nama_siswa'=>$nama, 'nis_siswa'=>$nis, 'id_kategori'=>$kategori,
								'total_bulan'=>$total_bulan, 'harga_bayar'=>$harga_bayar,  'subtotal'=>$subtotal,'tanggalpembayaran'=>$tanggalpembayaran,'keterangan'=>$keterangan);
		$this->model_nominal->edit($data,$id);

		redirect('transaksi');
	}

    function delete()
    {
    	$id= $this->uri->segment(3);
    	$this->model_nominal->delete($id);
    	redirect('transaksi');
    }

	function detail()
    {
    	$id= $this->uri->segment(3);
    		$data['kategori']	= $this->model_kategori->tampilkan_data()->result();
            $data['record']     = $this->model_nominal->get_one($id)->row_array();
            $this->load->view('nominal/form_detail',$data);
			
    }

    public function printDua()
    {


		$data['record']= $this->model_nominal->tampil_data()->result();
		$data['kategori']	= $this->model_kategori->tampilkan_data()->result();
        $data['keterangan']	= $this->model_keterangan->tampilkan_data()->result();
    	$this->load->view('transaksi/printDua',$data);
		// $this->load->model('model_nominal');
		// $data['transaksi']= $this->model_kategori->tampilkan_data()->result();
		
        // $this->load->view('transaksi/printDua',$data);
    }

   
}