<?php 

  $paket    = mysqli_query($conn, "SELECT * FROM tbl_paket WHERE status=1");
  $hitpaket = mysqli_num_rows($paket);

  $pesa     = mysqli_query($conn, "SELECT * FROM tbl_pesanan");
  $hitpesa  = mysqli_num_rows($pesa);

  $pesana     = mysqli_query($conn, "SELECT * FROM tbl_pesananother");
  $hitpesana  = mysqli_num_rows($pesana);

  $pesanan    = $hitpesa+$hitpesana;

  $voucher     = mysqli_query($conn, "SELECT * FROM tbl_voucher WHERE status=1");
  $hitvoucher  = mysqli_num_rows($voucher);


?>
<section class="content-header">
  <h1>
    Dashboard
    <small>Administrator</small>
  </h1>
  <ol class="breadcrumb">
    <li><a><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard</li>
  </ol>
</section>

<!-- isi halaman -->
<section class="content">
<div class="row">
            <div class="col-md-12">
            </div>
            <!-- ./col -->
            <div class="col-md-4">
              <div class="small-box bg-green">
                  <div class="inner">
                  <h3><?= $hitvoucher ?></h3>

                  <p>Voucher</p>
                  </div>
                  <div class="icon">
                  <i class="fa fa-ticket"></i>
                  </div>
                  <a href="admin/" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-md-4">
              <div class="small-box bg-yellow">
                  <div class="inner">
                  <h3><?= $hitpaket ?></h3>

                  <p>Paket</p> 
                  </div>
                  <div class="icon">
                  <i class="fa fa-list"></i>
                  </div>
                  <a href="plnmitra/" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-md-4">
              <div class="small-box bg-red">
                  <div class="inner">
                  <h3><?= $pesanan ?></h3>

                  <p>Pesanan</p>
                  </div>
                  <div class="icon">
                  <i class="fa fa-shopping-cart"></i>
                  </div>
                  <a href="plnlab/" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
        </div>
</section>