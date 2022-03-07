<?php

class Model_nominal extends CI_Model
{
	
	public function tampil_data()
	{
		$query="SELECT transaksi.id_transaksi, transaksi.nama_siswa, transaksi.nis_siswa,kategori.nama_kategori, 
		transaksi.total_bulan, transaksi.harga_bayar, transaksi.subtotal, transaksi.tanggalpembayaran,
		keterangan.nama_keterangan
		FROM transaksi
		JOIN keterangan ON keterangan.id_keterangan = transaksi.keterangan
		JOIN kategori ON kategori.id_kategori = transaksi.id_kategori";
		
		return $this->db->query($query);
	}

	function post($data)
	{
		$this->db->insert('transaksi',$data);
	}

	function get_one($id)
	{
		$param = array('id_transaksi'=>$id);
		return $this->db->get_where('transaksi',$param);
	}

	function edit($data,$id)
	{
		$this->db->where('id_transaksi',$id);
		$this->db->update('transaksi',$data);
	}

	function delete($id)
	{
		$this->db->where('id_transaksi',$id);
		$this->db->delete('transaksi');
	}

}