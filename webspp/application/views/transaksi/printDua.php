<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Pembayaran</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <script src="<?php echo base_url('assets/js/jquery.min.js') ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/js/popper.min.js') ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="mt-2 text-center">Laporan Transaksi Pembayaran SPP</h2>
                <h2 class="mt-2 text-center">Tahun 2022</h2>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="table-responsive mt-3">
                   <table class="table table-striped">
				<tr>
					<th>No</th>
					<th>Nama Siswa</th>
					<th>NIS</th>
					<th>Bulan Pembayaran</th>
					<th>Bulan Yang Dibayarkan</th>
					<th>Harga Per Bulan</th>
                    <th>Total Harga</th>
                    <th>Nama Keterangan</th>
                    <th>Tanggal Pembayaran</th>
				</tr>
				<?php
				$no = 1 + $this->uri->segment(3);
				foreach ($record as $r) {

					echo "<tr>
					            <td width='10'>$no</td>
					            <td>$r->nama_siswa</td>
								<td>$r->nis_siswa</td>
					            <td>$r->nama_kategori</td>
                                <td>$r->total_bulan</td>
                                <td>$r->harga_bayar</td>
                                <td>$r->subtotal</td>
                                <td>$r->nama_keterangan</td>
                                <td>$r->tanggalpembayaran</td>
					        </tr>";
								
					$no++;
				}
				?>

			</table>
            
                </div>
            </div>
        </div>
    </div>
    <script>
        window.print();
    </script>
</body>

</html>