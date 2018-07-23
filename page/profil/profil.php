<section class="content">
<div class="row">

  <div class="col-xs-12">
    <div class="box box-danger">
      <div class="box-header with-border">
          <h3 class="box-title"><b><?php if ($role == 0) echo "ADMIN"; else { echo "MAHASISWA"; } ?></b> | PROFIL Edit</h3>
      </div>

        <div class="box-body">

          <?php if($role == 0) { ?>
          <form name="tambah" action="?tampil=admin_editpro" method="post" enctype="multipart/form-data"
          class="form-horizontal">
          <?php } else { ?>
          <form name="tambah" action="?tampil=mhs_editpro" method="post" enctype="multipart/form-data"
          class="form-horizontal">
          <?php } ?>

          <div class="col-md-12">

            <div class="form-group">
              <label class="label-control col-md-2">ROLE</label>
              <div class="col-md-8">
                <?php if ($role == 0) { ?>
                    <input value="<?= $id ?>" type="hidden" name="id" class="form-control" required>
                  <?php } else { ?>
                    <input value="<?= $id ?>" type="hidden" name="id" class="form-control" required>
                  <?php } ?>
                <a class="btn btn-primary"><?php if ($role == 0) { echo "ADMIN"; } else { echo "MAHASISWA"; } ?></a>
              </div>
            </div>

            <?php if ($role == 1) { ?>
            <div class="form-group">
              <label class="label-control col-md-2">NAMA</label>
              <div class="col-md-5">
                  <input value="<?= $nama ?>" type="text" name="nama_mhs" class="form-control" required>
              </div>
            </div>
            

            <div class="form-group">
                <label class="label-control col-md-2">JURUSAN</label>
                <div class="col-md-3">
                  <a class="btn btn-primary"><?= $jur ?></a>
                </div>
            </div>
            <?php } ?>

            <div class="form-group">
              <label class="label-control col-md-2">EMAIL</label>
              <div class="col-md-3">
                <?php if($role == 0) { ?>
                  <input value="<?= $email ?>" type="text" name="email" class="form-control" required>
                <?php } else { ?>
                  <input value="<?= $email ?>" type="text" name="email" class="form-control" required>
                <?php } ?>
              </div>
            </div>

            <div class="form-group">
              <label class="label-control col-md-2">TELEPON</label>
              <div class="col-md-3">
                <?php if($role == 0) { ?>
                  <input value="<?= $telepon ?>" type="text" name="telepon" class="form-control" required>
                <?php } else { ?>
                  <input value="<?= $telepon ?>" type="text" name="telepon" class="form-control" required>
                <?php } ?>
              </div>
            </div>

            <div class="form-group">
              <label class="label-control col-md-2">USERNAME</label>
              <div class="col-md-2">
                <?php if($role == 0) { ?>
                  <input value="<?= $username ?>" type="text" name="username" class="form-control" required>
                <?php } else { ?>
                  <input value="<?= $username ?>" type="text" name="username" class="form-control" required>
                <?php } ?>
              </div>
            </div>

            <div class="form-group">
              <label class="label-control col-md-2">PASSWORD</label>
              <div class="col-md-2">
                <?php if($role == 0) { ?>
                  <input value="<?= $password ?>" type="text" name="password" class="form-control" required>
                <?php } else { ?>
                  <input value="<?= $password ?>" type="text" name="password" class="form-control" required>
                <?php } ?>
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
                <a href="?tampil=mahasiswa" class="btn btn-danger"><span class="fa fa-remove"></span> Tutup</a>
              </div>
            </div>
          </div>

          </form>

        </div>
    </div>
  </div>


</div>
</section>
