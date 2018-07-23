<section class="content">
<div class="row">

<div class="col-xs-12">
  <div class="box box-danger">
    <div class="box-header with-border">
      <h3 class="box-title"><b>DATA</b> | MAHASISWA</h3>
      <div class="pull-right">
        <a class="btn btn-danger" href="#" data-target="#modal_tambah" data-toggle="modal">
          <span class="fa fa-plus-circle"></span> Tambah Data
        </a>
      </div>
    </div>

    <div class="box-body">
      <div class="table-responsive">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>NO</th>
          <th>NIM</th>
          <th>NAMA</th>
          <th>JURUSAN</th>
          <th>EMAIL</th>
          <th>TELEPON</th>
          <th>USERNAME</th>
          <th>PASSWORD</th>
          <th>STATUS</th>
          <th>AKSI</th>
        </tr>
        </thead>
        <tbody>

          <?php

              $no = 1;
                $sql = mysqli_query($conn, "SELECT * FROM tb_mahasiswa") 
                or die(mysqli_error($conn));
                while($data = mysqli_fetch_array($sql)){
               
          ?>
            <tr>
              <td><?php echo $no; ?>.</td>
              <td><?php echo $data['nim']; ?></td>
              <td><?php echo $data['nama_mahasiswa']; ?></td>
              <td><?php echo $data['jurusan']; ?></td>
              <td><?php echo $data['email']; ?></td>
              <td><?php echo $data['telepon']; ?></td>
              <td><?php echo $data['username']; ?></td>
              <td><?php echo $data['password']; ?></td>
              <td><a class="btn btn-warning btn-xs"><?php echo $data['status']; ?></a></td>
              <td>
                <a href="?tampil=mahasiswa_edit&id=<?php echo $data['nim']; ?>" class="btn btn-primary btn-xs" title="edit">edit</a>
                <a href="javascript:;" data-id="<?php echo $data['nim'] ?>" data-toggle="modal" data-target="#mahasiswa_hapus"
                        class="btn btn-danger btn-xs" title="hapus">hapus</a>
              </td>
            </tr>

            <?php
              $no++;
            }
            ?>

        </tbody>
      </table>
    </div>

    <!-- Modal Tambah Data -->
    <div id="modal_tambah" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">
                <i class="fa fa-edit"></i> 
                Input Data Mahasiswa
            </h4>
            </div>
            <div class="modal-body">
            <form action="?tampil=mahasiswa_tambahpro" method="POST" name="modal_popup" enctype="multipart/form-data"
            class="form-horizontal">
                  
                <div class="form-group">
                  <label class="label-control col-md-3">NIM</label>
                  <div class="col-md-4">
                    <input type="text" class="form-control" name="nim" placeholder="ex : 201431291" autocomplete="off" required/>
                  </div>
                </div>

                <div class="form-group">
                  <label class="label-control col-md-3">NAMA MAHASISWA</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" name="nama_mhs" placeholder="ex : Firman Giri Febriyanto" autocomplete="off" required/>
                  </div>
                </div>

                <div class="form-group">
                  <label class="label-control col-md-3">JURUSAN</label>
                  <div class="col-md-5">
                    <select name="jurusan" class="form-control" required>
                      <option value="">-- pilih salah satu --</option>
                      <option value="S1 Teknik Informatika">S1 Teknik Informatika</option>
                      <option value="S1 Teknik Elektro">S1 Teknik Elektro</option>
                      <option value="S1 Teknik Mesin">S1 Teknik Mesin</option>
                      <option value="S1 Teknik Sipil">S1 Teknik Sipil</option>
                      <option value="D3 Teknik Elektro">D3 Teknik Elektro</option>
                      <option value="D3 Teknik Mesin">D3 Teknik Mesin</option>
                    </select>
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="label-control col-md-3">EMAIL</label>
                  <div class="col-md-8">
                    <input type="email" class="form-control" name="email" placeholder="ex : firman@sttpln.ac.id" autocomplete="off" required/>
                  </div>
                </div>

                <div class="form-group">
                  <label class="label-control col-md-3">TELEPON</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" name="telepon" placeholder="ex : 085244746050" autocomplete="off" required/>
                  </div>
                </div>

                <div class="form-group">
                  <label class="label-control col-md-3">USERNAME</label>
                  <div class="col-md-4">
                    <input type="text" class="form-control" name="username" placeholder="ex : firman" autocomplete="off" required/>
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="label-control col-md-3">PASSWORD</label>
                  <div class="col-md-4">
                    <input type="password" class="form-control" name="password" placeholder="ex : firman" autocomplete="off" required/>
                  </div>
                </div>

                <div class="modal-footer">
                <div class="pull-right">
                  <input type="submit" class="btn btn-primary btn-submit" name="simpan" value="Simpan">
                  <button type="reset" class="btn btn-danger btn-reset" data-dismiss="modal" aria-hidden="true">Batal</button>
                  </div>
                </div>
            </form>
            </div>
        </div>
        </div>
    </div>

    <!-- modal Hapus-->
    <div id="mahasiswa_hapus" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"> <span class="glyphicon glyphicon-exclamation-sign"></span> Konfirmasi</h4>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin menghapus data ini ?
            </div>
            <div class="modal-footer">
                <a href="javascript:;" class="btn btn-info" id="hapus-mahasiswa"><i class="glyphicon glyphicon-ok"></i> Ya</a>
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> Tidak</button>
            </div>

            </div>
        </div>
    </div>

  </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->

</section>

<script src="lib/mahasiswa.js"></script>
