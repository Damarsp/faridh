<?php

class Nominal extends CI_Controller{
	
	function __construct() {
        parent::__construct();
        $this->load->model('model_nominal');
        $this->load->model('model_kategori');
        $this->load->model('model_keterangan');
        $this->load->library('pagination');
    }

    function index(){
		$data['kategori']	= $this->model_kategori->tampilkan_data()->result();
        $data['keterangan']	= $this->model_keterangan->tampilkan_data()->result();
    	$data['record']= $this->model_nominal->tampil_data()->result();   
    	$this->load->view('nominal/lihat_data',$data);
    }

    function post()
    {
    	if(isset($_POST['submit'])){
			//proses nominal
			$nama		    = $this->input->post('nama_siswa');
            $nis		    = $this->input->post('nis_siswa');
			$kategori 	    = $this->input->post('id_kategori');
			$total_bulan 	= $this->input->post('total_bulan');
            $harga_bayar    = $this->input->post('harga_bayar');
            $subtotal    = $this->input->post('subtotal');
            $tanggalpembayaran = $this->input->post('tanggalpembayaran');
            $keterangan 	    = $this->input->post('keterangan');
			$data 		= array('nama_siswa'=>$nama,
                                'nis_siswa'=>$nis,
								'id_kategori'=>$kategori,
								'total_bulan'=>$total_bulan,
                                'harga_bayar'=>$harga_bayar,
                                'subtotal'=>$subtotal,
                                'tanggalpembayaran'=>$tanggalpembayaran,
                                'keterangan'=>$keterangan,
                                );
        
			$this->model_nominal->post($data);
			redirect('transaksi');
		}
		else{
			$this->load->model('model_kategori');
			$data['kategori']= $this->model_kategori->tampilkan_data()->result();
            $this->load->view('transaksi',$data);
		}
    }

    

}