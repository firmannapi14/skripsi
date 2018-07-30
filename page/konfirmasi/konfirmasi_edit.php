<?php

  $tampil = mysqli_query($conn, "SELECT * FROM tb_report 
                                 JOIN tb_klasifikasi ON tb_report.kode_klasifikasi=tb_klasifikasi.kode_klasifikasi 
                                 WHERE tb_report.id_report='$_GET[id]'")
            or die (mysqli_error($conn));
  $data   = mysqli_fetch_array($tampil);
 ?>

<section class="content">
<div class="row">

  <div class="col-xs-12">
    <div class="box box-danger">
      <div class="box-header with-border">
          <h3 class="box-title"><b>DATA</b> | KONFIRMASI Edit</h3>
      </div>

        <div class="box-body">

          <form name="tambah" action="?tampil=konfirmasi_editpro" method="post" enctype="multipart/form-data"
          class="form-horizontal">

          <div class="col-md-12">

            <div class="form-group">
                <label class="label-control col-md-3">JUDUL SEMINAR/KEGIATAN</label>
                <div class="col-md-6">
                    <input type="hidden" value="<?= $data['id_report'] ?>" name="id_report">
                    <textarea class="form-control" name="deskripsi" rows="3" required><?= $data['judul_indonesia'] ?></textarea>
                </div>
            </div>

            <div class="form-group">
                <label class="label-control col-md-3">JUDUL SEMINAR/KEGIATAN (ENGLISH)</label>
                <div class="col-md-6">
                    <textarea class="form-control" name="judul_inggris" rows="3" required><?= $data['judul_inggris'] ?></textarea>
                </div>
            </div>  

            <div class="form-group">
              <label class="label-control col-md-3">KLASIFIKASI</label>
              <div class="col-md-8">
                <a class="btn btn-primary"><?= $data['klasifikasi'] ?></a>
              </div>
            </div>

            <div class="form-group">
                <label class="label-control col-md-3">TANGGAL TERBIT</label>
                <div class="col-md-6">
                    <div class="input-group date">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                            <input value="<?= $data['tgl_terbit'] ?>" type="text" name="tgl_terbit" class="form-control pull-right" id="datepicker1" autocomplete="off" required>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="label-control col-md-3">INSTANSI PENYELENGGARA</label>
                <div class="col-md-6">
                    <input value="<?= $data['instansi_penyelenggara'] ?>" type="text" class="form-control" name="instansi">
                </div>
            </div>

            <div class="form-group">
                <label class="label-control col-md-3">NAMA KOTA</label>
                <div class="col-md-6">
                    <input value="<?= $data['nama_kota'] ?>" type="text" class="form-control" name="kota">
                </div>
            </div>

            <div class="form-group">
                <label class="label-control col-md-3">NEGARA</label>
                <div class="col-md-6">
                    <input value="<?= $data['nama_negara'] ?>" type="text" class="form-control" name="negara">
                </div>
            </div>

            <div class="form-group">
                <label class="label-control col-md-3">PERIODE</label>
                <div class="col-md-6">
                    <div class="input-group date">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                        <input value="<?= $data['periode_awal'] ?>" type="text" name="periode_awal" class="form-control pull-right" id="datepicker2" autocomplete="off" required>
                    <span class="input-group-addon">sampai</span>
                        <input value="<?= $data['periode_akhir'] ?>" type="text" name="periode_akhir" class="form-control pull-right" id="datepicker3" autocomplete="off" required>
                    </div>
                </div>
            </div>

          </div>
        </div>

          <div class="box-footer">
            <div class="form-group">
              <label class="col-md-3"></label>
              <div class="col-md-4">
                <button type="Submit" name="tambah" class="btn btn-primary">
                  <span class="fa fa-edit"></span> Edit</button>
                <a href="?tampil=konfirmasi" class="btn btn-danger"><span class="fa fa-remove"></span> Tutup</a>
              </div>
            </div>
          </div>

          </form>

        </div>
    </div>
  </div>


</div>
</section>
