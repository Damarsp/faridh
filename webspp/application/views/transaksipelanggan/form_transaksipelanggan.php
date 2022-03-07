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
					<th>No</th>
					<th>Nama Siswa</th>
					<th>NIK</th>
					<th>Kategori Laporan</th>
					<th>Tanggal Pembayaran</th>	
					
					
					
					<th colspan="3"> <center> Operasi </center></th>
				</tr>
				<?php
				$no = 1 + $this->uri->segment(3);
				foreach ($record as $r) {

					echo "<tr>
					            <td width='10'>$no</td>
					            <td>$r->nama_siswa</td>
								<td>$r->nis_siswa</td>
					            <td>$r->nama_kategori</td>
								<td>$r->tanggalpembayaran</td>
								<td width='10'>" . anchor('transaksipelanggan/detail/' . $r->id_transaksi, 'Detail') . "</td>
						    </tr>";
					$no++;
				}

				?>
			</table>
			<td><button type="button" onClick="window.print();" class="btn btn-success"><img src="https://img.icons8.com/ios-filled/20/ffffff/print.png" /></button></td>
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