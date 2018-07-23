<?php

  $tampil = mysqli_query($conn, "SELECT * FROM tb_dataolah WHERE kode_dataolah='$_GET[id]'")
            or die (mysqli_error($conn));
  $data   = mysqli_fetch_array($tampil);
 ?>

<section class="content">
<div class="row">

  <div class="col-xs-12">
    <div class="box box-danger">
      <div class="box-header with-border">
          <h3 class="box-title"><b>DATA</b> | KLASIFIKASI Edit</h3>
      </div>

        <div class="box-body">

          <form name="tambah" action="?tampil=dataolah_editpro" method="post" enctype="multipart/form-data"
            class="form-horizontal">

              <div class="form-group">
                <label class="label-control col-md-2">JUDUL</label>
                <div class="col-md-6">
                  <input class="form-control" value="<?= $data['judul_indonesia'] ?>" type="text" name="judul" placeholder="isikan judul ..." required>
                </div>
              </div>

              <div class="form-group">
                <label class="label-control col-md-2">TANGGAL TERBIT</label>
                <div class="col-md-6">
                  <input type="text" value="<?= $data['tanggal_terbit'] ?>" name="tgl_terbit"class="form-control pull-right" id="datepicker">
                </div>
              </div>

              <div class="form-group">
                <label class="label-control col-md-2">KLASIFIKASI</label>
                <div class="col-md-6">
                  <select class="form-control" name="klasifikasi">
                    <option value="">-- pilih salah satu --</option>
                    <?php
                    $kontrak = mysqli_query($conn, "SELECT * FROM tb_klasifikasi ORDER BY kode_klasifikasi ASC");
                    while ($rowkon = mysqli_fetch_array($kontrak)){
                      if($data['kode_klasifikasi'] == $rowkon['kode_klasifikasi']) {
                        echo "<option value=$rowkon[kode_klasifikasi] selected>$rowkon[klasifikasi]</option> \n";
                      } else {
                        echo "<option value=$rowkon[kode_klasifikasi]>$rowkon[klasifikasi]</option> \n";
                      }
                      
                    }
                    ?>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label class="label-control col-md-2">CATATAN</label>
                <div class="col-md-6">
                  <textarea name="catatan" class="form-control" rows="3" placeholder="isikan catatan ..." required><?= $data['catatan'] ?></textarea>
                </div>
              </div>
        </div>

          <div class="box-footer">
            <div class="form-group">
              <label class="col-md-2"></label>
              <div class="col-md-4">
                <button type="Submit" name="tambah" class="btn btn-primary">
                  <span class="fa fa-edit"></span> Edit</button>
                <a href="?tampil=dataolah" class="btn btn-danger"><span class="fa fa-remove"></span> Tutup</a>
              </div>
            </div>
          </div>

          </form>

        </div>
    </div>
  </div>


</div>
</section>
