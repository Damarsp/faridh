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
          <h3 class="panel-title"><i class="fa fa-dashboard"></i> Edit Nominal</h3>
        </div>
        <div class="panel-body">
<!-- Awal panel -->
<!-- Awal Coding Lihat Data -->
			<?php
			echo form_open('transaksi/update');
			?>
			<input type="hidden" name="id" value="<?php echo $record['id_transaksi']?>">
			<table class="table table-striped">
			    <tr><td width="180">Nama Siswa</td>
			        <td><input type="text" class="form-control"  name="nama_siswa" 
					value="<?php echo $record['nama_siswa']?>" placeholder="Masukkan Nama"  autocomplete="off" required>
			       </td></tr>

				   <tr><td width="120">Nis Siswa</td>
			        <td><input type="text" class="form-control"  name="nis_siswa" 
					value="<?php echo $record['nis_siswa']?>" placeholder="Masukkan Nis" 
					 autocomplete="off" required maxlength="5" minlength="5">
			       </td></tr>
			    <tr><td>Bulan Pembayaran</td><td>
            	<select name="kategori" class="form-control" >
                <?php
                foreach ($kategori as $k)
                {
                    echo "<option value='$k->id_kategori'";
                    echo $record['id_kategori']==$k->id_kategori?'selected':'';
                    echo">$k->nama_kategori</option>";
                }
                ?>
					</td></tr>
					    <tr><td>Bulan Yang Akan Dilunasi</td>
        				<td><input type="text" class="form-control"  name="total_bulan" id="total_bulan"value="<?php echo $record['total_bulan']?>"
						 placeholder="Masukkan Bulan"  autocomplete="off" required maxlength="2" minlength="0" >
       					</td></tr>
					    <tr><td>Yang Harus Dilunasi</td>
        				<td><input type="text" class="form-control"  name="harga_bayar" id="harga_bayar" value="<?php echo $record['harga_bayar']?>" 
						placeholder="Masukkan Harga Bayar"  autocomplete="off" required maxlength="6" minlength="0">
       					</td></tr>
						<tr><td>Subtotal</td>
        				<td><input type="text" class="form-control"  name="subtotal" id="subtotal" value="<?php echo $record['subtotal']?>" placeholder="Subtotal"  autocomplete="off" required>
       					</td></tr>
						<tr><td>Masukkan Tanggal</td>
        				<td><input type="date" class="form-control"  name="tanggalpembayaran" value="<?php echo $record['tanggalpembayaran']?>" placeholder="Subtotal"  autocomplete="off" required>
       					</td></tr>
						   <tr><td>Status Pembelian</td><td>
						<select name="keterangan" class="form-control" >
						<?php
						foreach ($keterangan as $e)
						{
							echo "<option value='$e->id_keterangan'";
							echo $record['keterangan']==$e->id_keterangan?'selected':'';
							echo">$e->nama_keterangan</option>";
						}
						?>
						   
					</td></tr>
					
    <tr><td colspan="2"><button type="submit" class="btn btn-primary btn-sm" name="submit">Simpan</button>
        <?php echo anchor('transaksi','Kembali',array('class'=>'btn btn-primary btn-sm'))?></td></tr>
</table>
</form>
<!-- Akhir Coding Lihat Data -->
    </div>
  </div>
</div>
<!-- Akhir Dashboard admin -->
<!-- Awal footer -->
<?php
$this->load->view('template/foot')
?>
<!-- Akhir footer -->
<script>
	let awal = 0;
	let akhir = 0;
	let total = 0;
	let harga = 0;
	let subtotal = 0;
	const tBayar = document.querySelector('#total_bulan');
	const hBayar = document.querySelector('#harga_bayar');
	const sTotal = document.querySelector('#subtotal');

	tBayar.addEventListener('input', function() {
		awal = tBayar.value;
		total = akhir * awal;
		if (total > 0) {
			sTotal.value = total;
		}
	});
	hBayar.addEventListener('input', function() {
		akhir = hBayar.value;
		total = akhir * awal;
		if (total > 0) {
			sTotal.value = total;
		}
	});

</script>

