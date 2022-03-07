<?php
$this->load->view('template/head');
?>
<!-- CSS -->
<!--tambahkan custom css disini-->
<!-- iCheck -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/iCheck/flat/blue.css') ?>" rel="stylesheet" type="text/css" />
<!-- Morris chart -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/morris/morris.css') ?>" rel="stylesheet" type="text/css" />
<!-- jvectormap -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/jvectormap/jquery-jvectormap-1.2.2.css') ?>" rel="stylesheet" type="text/css" />
<!-- Date Picker -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/datepicker/datepicker3.css') ?>" rel="stylesheet" type="text/css" />
<!-- Daterange picker -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/daterangepicker/daterangepicker-bs3.css') ?>" rel="stylesheet" type="text/css" />
<!-- bootstrap wysihtml5 - text editor -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') ?>" rel="stylesheet" type="text/css" />
<!-- Akhir CSS -->

<!-- Awal sidebar admin -->
<?php
$this->load->view('template/sidebar');
?>
<!-- Akhir sidebar admin -->
<!-- Awal Dashboard admin -->
<div class="col-md-9">
      <div class="panel panel-default">
        <div class="panel-heading">
         <h3 class="panel-title"><i class="fa fa-dashboard"></i> Dashboard <?php echo $this->session->userdata('level');  ?></h3>
        </div>
        <div class="panel-body">
          Selamat Datang <b><?php echo $this->session->userdata('nama_lengkap');  ?></b> di halaman Dashboard
<!-- Awal panel -->
<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
    <div class="col-lg-5 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3>Pembayaran SPP</h3>
                </div>
                <div class="icon">
                    <i class="ion ion-cash"></i>
                </div>
                <a href="<?php echo base_url() ?>index.php/nominal" class="small-box-footer">Info Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div><!-- ./col -->
        <div class="col-lg-6 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>Laporan Pembayaran</h3>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="<?php echo base_url() ?>index.php/transaksi" class="small-box-footer">Info Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div><!-- ./col -->
        <tr>

         <div class="col-lg-5 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-purple">
                <div class="inner">
                    <h3>Kategori Bulan</h3>
                </div>
                <div class="icon">
                    <i class="ion ion-folder"></i>
                </div>
                <a href="<?php echo base_url() ?>index.php/kategori" class="small-box-footer">Info Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        </tr>
        <!-- ./col -->
    </div><!-- /.row -->
    <!-- Main row -->
<!-- Akhir panel -->

        </div>
      </div>
    </div>
  </div>
</div>
<!-- Akhir Dashboard admin -->
<!-- Awal footer -->
<?php
$this->load->view('template/foot')
?>
<!-- Akhir footer -->