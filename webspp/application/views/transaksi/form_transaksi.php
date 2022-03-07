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
<!-- Akhir sidebar admin -->
<!-- Awal Dashboard admin -->
<div class="col-md-9">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title"><i class="fa fa-bar-chart"></i> Laporan Pembayaran SPP</h3>
		</div>
		<div class="panel-body">
			<!-- Awal panel -->
			<!-- Awal Coding Lihat Data -->

			<div class="row">
				<div class="col-sm-3"><?php
										echo anchor('nominal', 'Tambah Transaksi', array('class' => 'btn btn-success btn-sm'))
										?></div>
				<div class="col-sm-3"> </div>
				<div class="col-sm-3"> </div>
			</div>
			<hr>
			<table class="table table-striped">
				<tr>
					<th width="50">No</th>
					<th>Nama Siswa</th>
					<th width="100">NIS</th>
					<th>Bulan Pembayaran</th>
					<th>Keterangan pembayaran</th>
					<th colspan="3"> <center>Operasi</center></th>
				</tr>
				<?php
				$no = 1 + $this->uri->segment(3);
				foreach ($record as $r) {

					echo "<tr>
					            <td width='10'>$no</td>
					            <td>$r->nama_siswa</td>
								<td>$r->nis_siswa</td>
					            <td>$r->nama_kategori</td>
								<td>$r->nama_keterangan</td>
								<td width='10'>
									<a width='10'  data-toggle='modal' data-target='#detailtransaksi' id='btn-detail' 
									data-tanggal='". $r->tanggalpembayaran . "' 
									data-harga='". $r->harga_bayar . "' 
									data-total='". $r->total_bulan . "' 
									data-subtotal='". $r->subtotal . "'
									" . ">Detail<a>
								</td>
					            <td width='10'>" . anchor('transaksi/edit/' . $r->id_transaksi, 'Edit') . "</td>
					            <td width='10'>" . anchor('transaksi/delete/' . $r->id_transaksi, 'Delete') . "</td>
					            </tr>";
								
					$no++;
				}
				?>

			</table>
			 <td><a href="<?= base_url() ?>transaksi/printDua" class="btn btn-primary">
			 <!-- <img src="https://img.icons8.com/ios-filled/20/ffffff/print.png" /> -->
			 Print Laporan</a></td>
			<script>	
				< script src = "https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css" / >
			</script>
			<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"> </script>
			</script>
			</script>
			<!-- Akhir Coding Lihat Data -->
		</div>
	</div>
</div>
<!-- Akhir Dashboard admin -->
<!-- Awal footer -->
<?php
$this->load->view('template/foot')
?>

<div class="modal fade" id="detailtransaksi" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle">Detail Transaksi Pembayaran SPP </h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <br>
      </div>
      <div class="modal-body">
			<table class="table table-striped">
				    <tr><td width="180">Tanggal Pembayaran</td>
        				<td><p>: <span id="tanggal"></span></p>
       					</td></tr>
						<tr><td>Bulan Yang Dibayarkan</td>
        				<td><p>: <span id="total"></span> Bulan</p>
       					</td></tr>
					    <tr><td>Harga Per Bulan</td>
        				<td><p>: Rp. <span id="harga"></span></p>
       					</td></tr>
					    <tr><td>Total Harga</td>
        				<td><p>: RP. <span id="subtotal"></span></p>
       					</td></tr>   </table>
      </div>
      <div class="modal-footer">
         <tr><td colspan="2">
        <?php echo anchor('transaksi','Kembali',array('class'=>'btn btn-primary btn-sm'))?></td></tr>
      </div>
    </div>
  </div>
</div>

<script>
	$(document).on('click', '#btn-detail', function() {
		let tanggal = $(this).data('tanggal');
		let harga = $(this).data('harga');
		let total = $(this).data('total');
		let subtotal = $(this).data('subtotal');

		$('#tanggal').html(tanggal);
		$('#harga').html(harga);
		$('#total').html(total);
		$('#subtotal').html(subtotal);
	});
</script>