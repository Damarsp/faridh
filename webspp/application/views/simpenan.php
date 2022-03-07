<?php
if ($this->session->userdata('level') === 'admin') {
	$this->load->view('template/sidebaradmin');
} else if($this->session->userdata('level') === 'karyawan') {
	$this->load->view('template/sidebar');
} else {
	$this->load->view('template/sidebarpelanggan');

}
?>

<td width='10' ><a href='" . base_url('transaksi/edit/') . "' class='btn btn-primary'>Detail</a></td>