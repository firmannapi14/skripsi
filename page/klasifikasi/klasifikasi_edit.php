<?php

  $tampil = mysqli_query($conn, "SELECT * FROM tb_klasifikasi WHERE kode_klasifikasi='$_GET[id]'")
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

          <form name="tambah" action="?tampil=klasifikasi_editpro" method="post" enctype="multipart/form-data"
          class="form-horizontal">

          <div class="col-md-12">

            <div class="form-group">
              <label class="label-control col-md-2">KODE KLASIFIKASI</label>
              <div class="col-md-8">
                <input value="<?= $data['kode_klasifikasi']; ?>" type="hidden" name="kd_klasifikasi" class="form-control">
                <a class="btn btn-primary"><?= $data['kode_klasifikasi'] ?></a>
              </div>
            </div>

            <div class="form-group">
              <label class="label-control col-md-2">KLASIFIKASI</label>
              <div class="col-md-5">
                <input value="<?= $data['klasifikasi']; ?>" type="text" name="klasifikasi" class="form-control" required>
              </div>
            </div>

            <div class="form-group">
              <label class="label-control col-md-2">DESKRIPSI</label>
              <div class="col-md-5">
                <textarea name="deskripsi" class="form-control" rows="3" required><?= $data['deskripsi']; ?></textarea>
              </div>
            </div>

          </div>
        </div>

          <div class="box-footer">
            <div class="form-group">
              <label class="col-md-2"></label>
              <div class="col-md-4">
                <button type="Submit" name="tambah" class="btn btn-primary">
                  <span class="fa fa-edit"></span> Edit</button>
                <a href="?tampil=klasifikasi" class="btn btn-danger"><span class="fa fa-remove"></span> Tutup</a>
              </div>
            </div>
          </div>

          </form>

        </div>
    </div>
  </div>


</div>
</section>
