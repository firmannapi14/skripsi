<?php

  $tampil = mysqli_query($conn, "SELECT * FROM tb_mahasiswa WHERE nim='$_GET[id]'")
            or die (mysqli_error($conn));
  $data   = mysqli_fetch_array($tampil);
 ?>

<section class="content">
<div class="row">

  <div class="col-xs-12">
    <div class="box box-danger">
      <div class="box-header with-border">
          <h3 class="box-title"><b>DATA</b> | MAHASISWA Edit</h3>
      </div>

        <div class="box-body">

          <form name="tambah" action="?tampil=mahasiswa_editpro" method="post" enctype="multipart/form-data"
          class="form-horizontal">

          <div class="col-md-12">

            <div class="form-group">
              <label class="label-control col-md-2">NIM</label>
              <div class="col-md-2">
                <input value="<?= $data['nim']; ?>" type="hidden" name="nim" class="form-control">
                <input value="<?= $data['nim']; ?>" type="text" name="nim_baru" class="form-control" required>
              </div>
            </div>

            <div class="form-group">
              <label class="label-control col-md-2">NAMA MAHASISWA</label>
              <div class="col-md-5">
                <input value="<?= $data['nama_mahasiswa']; ?>" type="text" name="nama_mhs" class="form-control" required>
              </div>
            </div>

            <div class="form-group">
                <label class="label-control col-md-2">JURUSAN</label>
                <div class="col-md-3">
                    <select name="jurusan" class="form-control" required>
                        <option value="">-- pilih salah satu --</option>
                        <option value="S1 Teknik Informatika" <?php if ($data['jurusan'] == "S1 Teknik Informatika") echo "selected"; ?>>S1 Teknik Informatika</option>
                        <option value="S1 Teknik Elektro" <?php if ($data['jurusan'] == "S1 Teknik Elektro") echo "selected"; ?>>S1 Teknik Elektro</option>
                        <option value="S1 Teknik Mesin" <?php if ($data['jurusan'] == "S1 Teknik Mesin") echo "selected"; ?>>S1 Teknik Mesin</option>
                        <option value="S1 Teknik Sipil" <?php if ($data['jurusan'] == "S1 Teknik Sipil") echo "selected"; ?>>S1 Teknik Sipil</option>
                        <option value="D3 Teknik Elektro" <?php if ($data['jurusan'] == "D3 Teknik Elektro") echo "selected"; ?>>D3 Teknik Elektro</option>
                        <option value="D3 Teknik Mesin" <?php if ($data['jurusan'] == "D3 Teknik Mesin") echo "selected"; ?>>D3 Teknik Mesin</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
              <label class="label-control col-md-2">EMAIL</label>
              <div class="col-md-3">
                <input value="<?= $data['email']; ?>" type="text" name="email" class="form-control" required>
              </div>
            </div>

            <div class="form-group">
              <label class="label-control col-md-2">TELEPON</label>
              <div class="col-md-3">
                <input value="<?= $data['telepon']; ?>" type="text" name="telepon" class="form-control" required>
              </div>
            </div>

            <div class="form-group">
              <label class="label-control col-md-2">USERNAME</label>
              <div class="col-md-2">
                <input value="<?= $data['username']; ?>" type="text" name="username" class="form-control" required>
              </div>
            </div>

            <div class="form-group">
              <label class="label-control col-md-2">PASSWORD</label>
              <div class="col-md-2">
                <input value="<?= $data['password']; ?>" type="text" name="password" class="form-control" required>
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
                <a href="?tampil=mahasiswa  " class="btn btn-danger"><span class="fa fa-remove"></span> Tutup</a>
              </div>
            </div>
          </div>

          </form>

        </div>
    </div>
  </div>


</div>
</section>
