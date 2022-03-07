<div class=".container-fluid" style="margin-top: 80px">
    <div class="row">
        <div class="col-md-3">
            <div class="list-group">
               <!-- User Panel -->
              <div class="user-panel">
                <div class="pull-left image">
                <img src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/img/avatar7.png') ?>" class="img-circle" alt="User Image" />
                </div>
                  <div class="pull-left info">
                <p><b style="font-size: 14px;"><?php echo $this->session->userdata('nama_lengkap'); ?></b></p>
                    <p style="color : b ; font-size : 12px !important"><i class="fa fa-circle text-success" style="color : green !important"></i> Online</p>
                </div>
            </div>
            <!--Coba sidebar-->
            
            <!--Akhir sidebar coba-->
              <!-- Akhir User Panel-->
              <a href="<?php echo base_url() ?>index.php/admin/admin" class="list-group-item" style="padding : 15px 30px 15px 10px;"><i class="fa fa-dashboard"></i> Dashboard</a>
              <a href="<?php echo base_url() ?>index.php/nominal" class="list-group-item" style="padding : 15px 30px 15px 10px;"><i class="fa fa-cart-plus"></i> Form Pembayaran</a>
              <a href="<?php echo base_url() ?>index.php/transaksi" class="list-group-item" style="padding : 15px 30px 15px 10px;"><i class="fa fa-bar-chart"></i> Laporan Pembayaran</a>
              <a href="<?php echo base_url() ?>index.php/kategori" class="list-group-item" style="padding : 15px 30px 15px 10px;"><i class="fa fa-folder"></i> Kategori Bulan</a>
              <a href="<?php echo base_url() ?>index.php/user" class="list-group-item" style="padding : 15px 30px 15px 10px;"><i class="fa fa-user-secret"></i> User</a>
            </div>
        </div>
