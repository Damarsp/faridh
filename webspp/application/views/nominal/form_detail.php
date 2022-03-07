<?php
$this->load->view('template/head');
?>
<!-- CSS -->
<!--tambahkan custom css disini-->
<!-- iCheck -->
<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
  <script src="<?php echo base_url('assets/js/jquery.min.js') ?>" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/js/popper.min.js') ?>" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>" type="text/javascript"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
<!-- Akhir CSS -->

<!-- Awal sidebar admin -->
<?php
if ($this->session->userdata('level') === 'admin') {
	$this->load->view('template/sidebaradmin');
} else if($this->session->userdata('level') === 'karyawan') {
	$this->load->view('template/sidebar');
} else {
	$this->load->view('template/sidebarpelanggan');

}
?>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#detailtransaksi">
  Lihat Detail
</button>

<!-- Modal -->
<div class="modal fade" id="detailtransaksi" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle">Detail Transaksi</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <br>
      </div>
      <div class="modal-body">
			<table class="table table-striped">
				            <tr><td width="180">Tanggal Pembayaran</td>
        			    	  <td><p>: <?php echo $record['tanggalpembayaran']?></p>
       					    </td></tr>

					          <tr><td>Harga Per Bulan</td>
        				      <td><p>: Rp. <?php echo $record['harga_bayar']?></p>
       				    	</td></tr>

                    <tr><td>Bulan Yang Dibayarkan</td>
        			      	<td><p>: <?php echo $record['total_bulan']?> Bulan</p>
       				    	</td></tr>

					          <tr><td>Total Harga</td>
        			      	<td><p>: RP. <?php echo $record['subtotal']?></p>
       				    	</td></tr>   </table>
      </div>  
      <div class="modal-footer">
         <tr><td colspan="2">
        <?php echo anchor('transaksi','Kembali',array('class'=>'btn btn-primary btn-sm'))?></td></tr>
      </div>
    </div>
  </div>
</div>
<?php
$this->load->view('template/foot')
?>

