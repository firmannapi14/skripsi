<?php 

  $mhs          = mysqli_query($conn, "SELECT * FROM tb_mahasiswa");
  $hitmhs       = mysqli_num_rows($mhs);

  $dataolah     = mysqli_query($conn, "SELECT * FROM tb_dataolah");
  $hitdataolah  = mysqli_num_rows($dataolah);

  $klas         = mysqli_query($conn, "SELECT * FROM tb_klasifikasi");
  $hitklas      = mysqli_num_rows($klas);

  $report       = mysqli_query($conn, "SELECT * FROM tb_report WHERE deleted_at IS NULL");
  $hitreport    = mysqli_num_rows($report);


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
                  <h3><?= $hitmhs ?></h3>

                  <p>Mahasiswa</p>
                  </div>
                  <div class="icon">
                  <i class="fa fa-users"></i>
                  </div>
                  <a href="?tampil=mahasiswa" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-md-4">
              <div class="small-box bg-yellow">
                  <div class="inner">
                  <h3><?= $hitdataolah ?></h3>

                  <p>Dataolah</p> 
                  </div>
                  <div class="icon">
                  <i class="fa fa-database"></i>
                  </div>
                  <a href="?tampil=dataolah" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-md-4">
              <div class="small-box bg-red">
                  <div class="inner">
                  <h3><?= $hitklas ?></h3>

                  <p>Klasifikasi</p>
                  </div>
                  <div class="icon">
                  <i class="fa fa-list"></i>
                  </div>
                  <a href="?tampil=klasifikasi" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
        </div>

<div class="row">
            <div class="col-md-12">
            </div>
            <!-- ./col -->
            <div class="col-md-4">
              <div class="small-box bg-blue">
                  <div class="inner">
                  <h3><?= $hitreport ?></h3>

                  <p>Konfirmasi</p>
                  </div>
                  <div class="icon">
                  <i class="fa fa-users"></i>
                  </div>
                  <a href="?tampil=konfirmasi" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-md-4">
              <div class="small-box bg-yellow">
                  <div class="inner">
                  <h3>Proses</h3>

                  <p>TF-IDF</p> 
                  </div>
                  <div class="icon">
                  <i class="fa fa-refresh"></i>
                  </div>
                  <a href="?tampil=proses" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
        </div>
</section>