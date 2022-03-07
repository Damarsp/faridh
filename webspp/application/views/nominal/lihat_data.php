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
			<h3 class="panel-title"><i class="fa fa-cart-plus"></i> Masukan Data Siswa</h3>
		</div>
		<div class="panel-body">
			<!-- Awal panel -->
			<!-- Awal Coding Lihat Data -->
			<?php
			echo form_open('nominal/post');
			?>
			<table class="table table-striped">
				<tr>
					<td width="180">Nama Lengkap</td>
					<td>
						<div class="col-sm-4"><input type="text" 
						 name="nama_siswa" class="form-control" 
						placeholder="Masukkan Nama" autocomplete="off" required></div>
					</td>
				</tr>
				<tr>
					<td width="180">Masukkan NIS</td>
					<td>
						<div class="col-sm-4"><input type="text" 
						maxlength="5" minlength="5" name="nis_siswa" class="form-control" 
						placeholder="Masukkan NIS" autocomplete="off" required></div>
					</td>
				</tr>
				<tr>
					<td width="180">Bulan Pembayaran</td>
					<td>
						<div class="col-sm-4">
							<select name="id_kategori" class="form-control">
								<?php
								foreach ($kategori as $k) {
									echo "<option value='$k->id_kategori'>$k->nama_kategori</option>";
								}
								?>
					</td>
				</tr>
				<tr>
					<td width="180">Bulan Yang Akan Dilunasi</td>
					<td>
						<div class="col-sm-4"><input type="text" maxlength="2" minlength="0" name="total_bulan" id="total_bulan" class="form-control" placeholder="Masukkan Bulan" autocomplete="off" required></div>
					</td>
				</tr>
				<tr>
					<td width="180">Yang Harus Dibayarkan</td>
					<td>
						<div class="col-sm-4"><input type="text" maxlength="6" minlength="0" name="harga_bayar" id="harga_bayar" class="form-control" placeholder="Masukkan Harga" autocomplete="off" required></div>
					</td>
				</tr>
				<tr>
					<td width="180">Subtotal</td>
					<td>
						<div class="col-sm-4"><input type="number" name="subtotal" id="subtotal" class="form-control" placeholder="Subtotal" autocomplete="off" required></div>
					</td>
				</tr>
				<tr>
					<td width="180">Masukkan Tanggal</td>
					<td>
						<div class="col-sm-4"><input input type="date" name="tanggalpembayaran" id="tanggalpembayaran" class="form-control" placeholder="Masukkan Tanggal" autocomplete="off" required></div>
					</td>
				</tr>
				<tr>
					<td width="180">Keterangan Pembayaran</td>
					<td>
						<div class="col-sm-4">
							<select name="keterangan" class="form-control">
								<?php
								foreach ($keterangan as $e) {
									echo "<option value='$e->id_keterangan'>$e->nama_keterangan</option>";
								}
								?>
					</td>
				</tr>
				<tr>
					<td colspan="2"><button type="submit" class="btn btn-primary btn-sm" name="submit">Simpan</button>
						<?php echo anchor('transaksi', 'Kembali', array('class' => 'btn btn-primary btn-sm')) ?>
					</td>
				</tr>
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

		// var rupiah = document.getElementById('harga_bayar');
		// rupiah.addEventListener('keyup', function(e){
		// 	// tambahkan 'Rp.' pada saat form di ketik
		// 	// gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
		// 	rupiah.value = formatRupiah(this.value, 'Rp. ');
		// });
 
		// /* Fungsi formatRupiah */
		// function formatRupiah(angka, prefix){
		// 	var number_string = angka.replace(/[^,\d]/g, '').toString(),
		// 	split   		= number_string.split(','),
		// 	sisa     		= split[0].length % 3,
		// 	rupiah     		= split[0].substr(0, sisa),
		// 	ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);
 
		// 	// tambahkan titik jika yang di input sudah menjadi angka ribuan
		// 	if(ribuan){
		// 		separator = sisa ? '.' : '';
		// 		rupiah += separator + ribuan.join('.');
		// 	}
 
		// 	rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
		// 	return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
		// }
	
	// tMeter.addEventListener('input', function() {
	// 	total = tMeter.value;
	// 	subtotal = total * harga;
	// 	if (subtotal > 0) {
	// 		sTotal.value = subtotal;
	// 	} else {
	// 		sTotal.value = 0;
	// 	}
	// });
	// tHarga.addEventListener('input', function() {
	// 	harga = tHarga.value;
	// 	subtotal = total * harga;
	// 	if (subtotal > 0) {
	// 		sTotal.value = subtotal;
	// 	} else {
	// 		sTotal.value = 0;
	// 	}
	// });
</script>